	$(document).ready(function(){
		$(".slideleft").hide();
		function changeBloc(selector){
			$("#main .active").hide();
			$("#main .active").removeClass("active");
			$("."+selector).addClass("active");
			$("."+selector).show();
			
			$(".slidelink").show();
			if($("."+selector).attr("data-next") == null){
				$(".slideright").hide();
			}
			if($("."+selector).attr("data-previous") == null){
				$(".slideleft").hide();
			}
		}
		
		$(".slidelink").on("click",function(e){
			
			var target = "bloc1";
			if($(this).hasClass("slideleft")){
				target= $("#main .active").attr("data-previous");
			}else{
				target= $("#main .active").attr("data-next");
			}
			changeBloc(target);
			e.preventDefault();
		});
	});
	