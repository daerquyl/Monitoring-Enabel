<script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

	// Add custom validation rule
	$.formUtils.addValidator({
	  name : 'pv_check',
	  validatorFunction : function(value, $el, config, language, $form) {
		var realMeetingsCount = parseInt($("#"+$el.attr('id').replace("pv","real")).val(),10);
		var pvMeetingsCount = parseInt(value,10);
		return  pvMeetingsCount <= realMeetingsCount;
	  },
	  errorMessage : 'PV < Reunions realisees',
	  errorMessageKey: 'pv_check'
	});

	$.formUtils.addValidator({
	  name : 'superficie_check',
	  validatorFunction : function(value, $el, config, language, $form) {
		var total_superficie = parseFloat($("#totalHa").val(),10);
		var superficie = parseFloat(value,10);
		return  superficie <= total_superficie;
	  },
	  errorMessage : 'Superficie > Total superficie',
	  errorMessageKey: 'superficie_check'
	});
	
	$.formUtils.addValidator({
	  name : 'running_check',
	  validatorFunction : function(value, $el, config, language, $form) {
		var total_superficie = parseFloat($("#totalHa").val(),10);
		var running_ha = 0;
		$(".running_ha").each(function(){
			var val = parseFloat($(this).val(),10);
			running_ha += (val) ? val : 0;
		});
		return  running_ha <= total_superficie;
	  },
	  errorMessage : 'Somme(Superficie en exploitaton) > Total superficie ',
	  errorMessageKey: 'running_check'
	});
	
	$.formUtils.addValidator({
	  name : 'not_0',
	  validatorFunction : function(value, $el, config, language, $form) {
		var parsed_value = parseFloat(value,10);
		return  parsed_value != 0;
	  },
	  errorMessage : 'Doit etre > 0',
	  errorMessageKey: 'not_0'
	});
	
	// Add custom validation rule
	$.formUtils.addValidator({
	  name : 'non_empty_select',
	  validatorFunction : function(value, $el, config, language, $form) {
		return (""+value).trim().replace('-','') != '';
	  },
	  errorMessage : 'Vous devez choisir un element',
	  errorMessageKey: 'emptySelect'
	});
	
	$.validate({
	  form : ".form-to-validate",
	  scrollToTopOnError : false,
	  dateFormat : 'dd/mm/yyyy',
	  errorMessagePosition: $('.error-container'),
	  modules : 'security, toggleDisabled, sanitize, logic',
	  lang : 'fr',
	  
	});
	
	$('.next').on('click',function(event){
		if( !$(".form-to-validate").isValid() ) {
			event.stopImmediatePropagation();
		}
	});
</script>