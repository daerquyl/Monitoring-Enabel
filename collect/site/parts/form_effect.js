$(document).ready(function(){
	$("#site-form #commune_id").on("change",function(){
		var department = $(this).children("option:selected").attr("data-department");
		$("#site-form #department_id").val(department).trigger("change");
	});
	$("#site-form #department_id").on("change",function(){
		var region =$(this).children("option:selected").attr("data-region");
		$("#site-form #region_id").val(region).trigger("change");
	});
	$("#site-form #commune_id").val($("#site-form #commune_id option:first").val()).trigger("change");
});