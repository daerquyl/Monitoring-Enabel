
$(document).ready(function(){
	$('#campaign-search').on("keyup",function(){
		if($(this).val()){							
			$('.campaign-details').hide();
			$('.campaign-details[data-search*="'+$(this).val().toUpperCase()+'"]').show();
		}else{
			$('.campaign-details').show();
		}
	});
});
