/*// Define a class like this
function Person(name, gender){

   // Add object properties like this
   this.name = name;
   this.gender = gender;
}

// Add methods like this.  All Person objects will be able to invoke this
Person.prototype.speak = function(){
    alert("Howdy, my name is" + this.name);
}

// Instantiate new objects with 'new'
var person = new Person("Bob", "M");

// Invoke methods like this
person.speak(); // alerts "Howdy, my name is Bob"*/

function jqueryTable(action,menu_weight){
	//
	//action menu ##################################################################################################################
	var jom=new jqueryOverlayMenu(action,menu_weight);
	
	$("#page_list_table th.page_list_action")
		//
		.mousedown(function(event){
			event.stopPropagation();
			jom.setVisibility(true);
		});
	//
	$(document)
		//
		.mousedown(function(){
			jom.setVisibility(false);
		});
	//
	//overmouse selector ##################################################################################################################
	var isMouseDown=false;
	var isHighlighted;
	var currentCol;
	var sel;
	//
	$("#page_list_table td.page_list_action")
		//
		.mousedown(function(){
			isMouseDown=true;
			currentCol=this.getAttribute("data-col");
			$(this).toggleClass("page_list_td_highlighted");
			//other td
			$(this).siblings().each(function(i,e){
				$(e).toggleClass("page_list_td_highlighted");
			});
			//
			isHighlighted=$(this).hasClass("page_list_td_highlighted");
			//
			sel=$(this).find('input')[0];
			sel.value=isHighlighted;
			//
			jom.setVisibility(false);
			return false;
		})
		//
		.mouseover(function(){
			if(isMouseDown){
				if(currentCol===this.getAttribute("data-col")){
					$(this).toggleClass("page_list_td_highlighted",isHighlighted);
					//other td
					$(this).siblings().each(function(i,e){
						$(e).toggleClass("page_list_td_highlighted",isHighlighted);
					});
					//
					sel=$(this).find('input')[0];
					sel.value=isHighlighted;
				}
			}
		})
		//
		.bind("selectstart",function(){
			return false;
		})
	
	$(document)
		//
		.mouseup(function(){
			isMouseDown=false;
		});
}

function getSelectedCheck(){
	var tot_sel=0;
	//
	$("#page_list_table td.page_list_action").each(function(i,e){
		if($(this).find('input')[0].value=="true"){
			tot_sel+=1;
		}
	});
	return tot_sel;
}

function jqueryOverlayMenu(action,menu_weight){
	//append overlay menu not visible
	$("body").append("<div id='overlay_menu' style='width:"+menu_weight+"px'></div>");
	//append action in overlay menu
	$(action).each(function(i,e){
		$("#overlay_menu").append("<div class=\"overlay_menu_action\" onmousedown=\"alert('we')\"><img class=\"icon_bar_img\" style=\"width:14px;height:14px;vertical-align:middle\" src=\""+e["icon"]+"\"></img><span style=\"padding-left:6px;\">"+e["label"]+"<span></div>");
	});
	
	//show overlay menu
	this.setVisibility=function(value){
		if(value==true){
			$("#overlay_menu").css('visibility','visible');
		}else{
			$("#overlay_menu").css('visibility','hidden');
		}
	}
}

function jqueryOverlay(){
	this.last_id=0;
	
	//create overlay
	this.create=function(ref){
		//append overlay trasparent and page to body
		$("body").append("<div id='overlay'></div>");
		$("body").append("<div class='overlay_page'></div>");
		$(".overlay_page").load(ref);
		
		$("#overlay").click(function(){
			$(".overlay_page").remove();
			$("#overlay").remove();
		})
	}
}

function jqueryCsv(filename,classname,callback){
	this.filename=filename;
	this.classname=classname;
	this.svg=$(document.getElementById(this.filename).getSVGDocument());
	//
	this.svg.find(this.classname).each(function(i,e){
		//
		$(e).mouseover(function(){
			e.style.setProperty("stroke","#EFE697", "");
			e.style.setProperty("stroke-width","5px", "");
		});
		//
		$(e).mouseout(function(){
			e.style.setProperty("stroke-width","0px", "");
		});
		//
		$(e).click(function(){
			callback(e.id);
			/*$(e).siblings(this.classname).each(function(ii,ee){
				ee.style.setProperty("stroke-width","0px", "");
			});*/
			//
		});
	});
}
