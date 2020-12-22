
$(document).ready(function(){
	$('#organization-search').on("keyup",function(){
		if($(this).val()){							
			$('.organization-details').hide();
			$('.organization-details[data-search*="'+$(this).val().toUpperCase()+'"]').show();
		}else{
			$('.organization-details').show();
		}
	});
});
