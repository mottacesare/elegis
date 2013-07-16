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

function jqueryTable(){
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
			return false; // prevent text selection
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
	//
	//action menu ##################################################################################################################
	jom=new jqueryOverlayMenu();
	
	$("#page_list_table th.page_list_action")
		//
		.click(function(event){
			jom.setVisibility(true);
			event.stopPropagation();
		});
	//
	$(document)
		//
		.click(function(ref){
			jom.setVisibility(false);
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


function jqueryOverlayMenu(){
	//append overlay menu not visible
	$("body").append("<div id='overlay_menu'></div>");
	
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
