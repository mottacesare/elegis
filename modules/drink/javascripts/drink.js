//on load
$(function(){
	$(function () {
	var isMouseDown = false,
		isHighlighted;
 var currentCol;
	$("#our_table td")
		.mousedown(function () {
			isMouseDown = true;
			currentCol = this.getAttribute("data-col");
			$(this).toggleClass("highlighted");
			isHighlighted = $(this).hasClass("highlighted");
			return false; // prevent text selection
		})
		.mouseover(function () {
			if (isMouseDown) {
					if(currentCol === this.getAttribute("data-col")){
							$(this).toggleClass("highlighted", isHighlighted);
					}
			}
		})
		.bind("selectstart", function () {
			return false;
		})

	$(document)
		.mouseup(function () {
			isMouseDown = false;
		});
});
});

//
function insert(){
	//
	//alert("INSERT");
	//
	
}

