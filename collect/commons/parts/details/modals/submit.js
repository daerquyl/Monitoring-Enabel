
$(document).ready(function(){
	$(".submit-link").on("click",function(){
		$("#submit-btn a").attr("href",$(this).attr("href"));
		$("#submit-msg span").text($(this).attr("data-collect"));
	});
});
