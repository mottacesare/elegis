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
	//
	$("#page_list_table td.page_list_action")
		//
		.mousedown(function(){
			isMouseDown = true;
			currentCol = this.getAttribute("data-col");
			$(this).toggleClass("highlighted");
			isHighlighted = $(this).hasClass("highlighted");
			return false; // prevent text selection
		})
		//
		.mouseover(function(){
			if (isMouseDown) {
				if(currentCol === this.getAttribute("data-col")){
					$(this).toggleClass("highlighted", isHighlighted);
				}
			}
		})
		//
		.bind("selectstart", function(){
			return false;
		})
	
	$(document)
		//
		.mouseup(function(){
			isMouseDown = false;
		});
}
