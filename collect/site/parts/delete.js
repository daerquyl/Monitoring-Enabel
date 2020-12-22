
$(document).ready(function(){
	$(".delete-link").on("click",function(){
		$("#delete-btn a").attr("href",$(this).attr("href"));
		$("#delete-msg span").text($(this).attr("data-site"));
	});
});
