
$(document).ready(function(){
	$(".reject-link").on("click",function(){
		$("#reject-form #id").val($(this).attr("data-collect"));
		$("#reject-msg span").text($(this).attr("data-collect"));
	});
});
