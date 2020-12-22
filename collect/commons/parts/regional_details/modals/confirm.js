
$(document).ready(function(){
	$(".confirm-link").on("click",function(){
		$("#confirm-btn a").attr("href",$(this).attr("href"));
		$("#confirm-msg span").text($(this).attr("data-collect"));
	});
});
