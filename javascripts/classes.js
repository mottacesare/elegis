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
}

/*function jqueryOverlay(ref){
	//append overlay trasparent and page to body
	$("body").append("<div id='overlay'></div>");
	$("body").append("<div class='overlay_page'></div>");
	$(".overlay_page").load(ref);
	
	$("#overlay").click(function(){
		$(".overlay_page").remove();
		$("#overlay").remove();
	})
}*/

function jqueryOverlay(){
	this.last_id=null;
	
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
