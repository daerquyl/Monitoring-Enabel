
$(document).ready(function(){
	$('#site-search').on("keyup",function(){
		if($(this).val()){							
			$('.site-details').hide();
			$('.site-details[data-search*="'+$(this).val().toUpperCase()+'"]').show();
		}else{
			$('.site-details').show();
		}
	});
});
