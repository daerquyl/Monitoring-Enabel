
$(document).ready(function(){
	$(".validate-link").on("click",function(){
		$("#validate-btn a").attr("href",$(this).attr("href"));
		$("#validate-msg span").text($(this).attr("data-collect"));
	});
});
