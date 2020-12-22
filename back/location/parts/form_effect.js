
	//handle Types
	function switchForm(superior){
		$(".form-unrequired").hide();
		$(".form-"+superior.toLowerCase()).show();
	}		
//	switchForm("SUPERVISOR");
	$("#type").on("change",function(e){
		var superior = $("#type option:selected").attr("data-superior");
		switchForm(superior);
	});