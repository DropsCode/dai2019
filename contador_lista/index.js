$(document).ready(function(){
	$("#increment-button").on('click', function(){
		var value = parseInt($("#num-value").text())
		value++
		$("#num-value").text(value)
	})
	
	$("#decrement-button").on('click', function(){
		var value = parseInt($("#num-value").text())
		value--
		$("#num-value").text(value)
	})
	
	$("#save").on('click', function(){
		var title = $("#input-title").val()
		var description = $("#input-description").val()
		
		var row = "<div><span>"+title+"</span><span>"+description+"</span></div>"
		
		$("#my-list").append(row)
	})
})