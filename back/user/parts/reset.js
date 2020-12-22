
$(document).ready(function(){
	$(".reset-link").on("click",function(){
		$("#reset-btn a").attr("href",$(this).attr("href"));
		console.log($(this).attr("href"));
		$("#reset-msg span").text($(this).attr("data-user"));
	});
});
