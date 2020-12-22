$(document).ready(function(){
	$(document).on('change','.multiple-checkbox',function(){
		var val_input = $(this).closest(".multiple").find(".input");
		var target_checkbox_class = $(val_input).attr("data-target");
		var checkboxes_count = $("."+target_checkbox_class).length;
		var val = "";
		var checkboxes = $(this).closest(".checkboxes_container").find("input");
		for(var i=0; i<checkboxes_count; i++){
			var val_i = $(checkboxes[i]).is(":checked") ? "," + $(checkboxes[i]).val() : "";
			if(val_i != ""){
				val += val_i;
			}
		}									
		$(val_input).val(val.substring(1));
	});
	
	$(document).on('change','.multiple .input',function(){
		var val = $(this).val();
		var target_checkbox_class = $(this).attr("data-target");
		var checkboxes_count = $("."+target_checkbox_class).length;
		var checkboxes = $(this).parent().find(".checkboxes_container").find("input");
		for(var i=0; i<checkboxes_count; i++){
			if(val.includes($(checkboxes[i]).val())){
				$(checkboxes[i]).prop("checked",true);
			}
		}											
	});
});
