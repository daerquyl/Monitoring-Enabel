
$(document).ready(function(){
	$(".delete-link").on("click",function(){
		$("#delete-btn a").attr("href",$(this).attr("href"));
		console.log($(this).attr("href"));
		$("#delete-msg span").text($(this).attr("data-organization"));
	});
});
