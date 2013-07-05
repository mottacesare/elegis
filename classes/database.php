<?php
//
Class database{
	//
	function __construct($db,$user,$passwd,$host="localhost") {
		$this->host=$host;
		$this->user=$user;
		$this->pass=$passwd;
		$this->db=$db;
		//wait for mysql error
		while(1){
			$this->link=pg_connect(sprintf("dbname=%s user=%s password=%s host=%s" ,$this->db,$this->user,$this->pass,$this->host));
			//if connected pass
			if($this->link){
				break;
			}else{
				sleep(1);
			}
		}
		//userID
		$this->userID=0;		
	}
	
	//
	private function fix($field){
		$res=preg_replace("/'/","`",$field);
		//$res=addslashes($field);
		return trim($res);
	}
	
	//
	public function setUserId($uid){
		$this->userID=$uid;
	}
	
	//
	public function getResults($query){
		$res=pg_query($this->link,$query);
		if (!$res) {
			//debug @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
			echo("<div id='errorbox'>$query</div>");
			return -1;
		}
		//hold pointer
		$this->res=$res;
		return ($this->res);
	}
	
	//
	public function getRows($query,$timeout=0,$limit=0,$comp=0){
		//code
		$code=md5($query);
		$cutted=False;
		//if timeout >0 then tri to get rows from cache
		$rows=Null;
		//
		if($timeout>0){
			$memcache = new Memcache;
			$memcache->connect('127.0.0.1', 11211);
			$cutted=False;
			$rows=$memcache->get($code);
		}
		//normal query
		if(!$rows){
			//do query and fetch
			$res=pg_query($this->link,$query);
			//
			if (!$res) {
				//debug @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
				echo("<div id='errorbox'>$query</div>");
				return -1;
			}else{
				//hold pointer
				$this->res=$res;
				//memory limit
				if($limit>0){
					//store into array
					$rows=array();
					$cnt=1;
					while($row=$this->getRow($res)){
						if($cnt>$limit){
							$cutted=True;
							break;
						}
						array_push($rows,$row);
						$cnt++;
					}
				//full of memory
				}else{
					$rows=pg_fetch_all($this->res);
				}
				//save to cache
				if($timeout>0){
					$memcache->set($code,$rows,$comp,$timeout);
				}
				//check result
				if(!$rows){
					$rows=array();
				}
			}
		}
		//
		return array("rows"=>$rows,"cutted"=>$cutted,"count"=>count($rows));
	}
	
	//
	public function getRow($rs=Null){
		if(!$rs){
			$rs=$this->res;
		}
		return pg_fetch_array($rs);
	}
}
//
?>
