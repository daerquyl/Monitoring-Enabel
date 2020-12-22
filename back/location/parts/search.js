
$(document).ready(function(){
	$('#location-search').on("keyup",function(){
		if($(this).val()){							
			$('.location-details').hide();
			$('.location-details[data-search*="'+$(this).val().toUpperCase()+'"]').show();
		}else{
			$('.location-details').show();
		}
	});
});
