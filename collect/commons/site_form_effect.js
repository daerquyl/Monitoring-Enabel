$(document).ready(function(){
	//Script pour mise a jour des champs lies au site
	$(".record-card #site_id").on("change",function(){
		var commune = $(this).children("option:selected").attr("data-commune");
		$(".record-card #commune_id").val(commune).trigger("change");
	});
	$(".record-card #commune_id").on("change",function(){
		var department = $(this).children("option:selected").attr("data-department");
		$(".record-card #department_id").val(department).trigger("change");
	});
	$(".record-card #department_id").on("change",function(){
		var region =$(this).children("option:selected").attr("data-region");
		$(".record-card #region_id").val(region).trigger("change");
	});
});