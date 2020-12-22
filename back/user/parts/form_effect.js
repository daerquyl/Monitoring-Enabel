
	//handle Types
	function switchForm(superior){
		$(".form-unrequired").hide();
		$(".form-"+superior.toLowerCase()).show();
		
		if(superior != "SUPERVISOR"){
			$(".form-site").hide();
		}else{
			$(".form-site").show();
		}
		
		if(superior == "ORGANIZATION"){
			$("#organization_id option[data-name='ENABEL']").hide();
		}
	}		
	switchForm($("#role option:first").attr("data-superior"));
	$("#role").on("change",function(e){
		var superior = $("#role option:selected").attr("data-superior");
		switchForm(superior);
	});