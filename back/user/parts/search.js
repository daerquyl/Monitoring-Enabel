
$(document).ready(function(){
	$('#user-search').on("keyup",function(){
		if($(this).val()){							
			$('.user-details').hide();
			$('.user-details[data-search*="'+$(this).val().toUpperCase()+'"]').show();
		}else{
			$('.user-details').show();
		}
	});
});