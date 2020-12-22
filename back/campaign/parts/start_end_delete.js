
$(document).ready(function(){
	$(".delete-link").on("click",function(){
		$("#delete-btn a").attr("href",$(this).attr("href"));
		$("#delete-msg span").text($(this).attr("data-campaign"));
	});
	$(".start-link").on("click",function(){
		$("#start-btn a").attr("href",$(this).attr("href"));
		$("#start-msg span").text($(this).attr("data-campaign"));
	});
	$(".end-link").on("click",function(){
		$("#end-btn a").attr("href",$(this).attr("href"));
		$("#end-msg span").text($(this).attr("data-campaign"));
	});
});
