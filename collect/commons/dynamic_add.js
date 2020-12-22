	//Pour les forms part manuellement
	$(document).ready(function(){
		$(document).on("click",".clone-btn",function(e){
			var cloneMaxLimitReach = $(this).closest('fieldset').find('.base').length >= 3;
			if(!cloneMaxLimitReach){
				var cloned = $(this).closest('fieldset').find('.base').first().clone(true);
				cloned.find('.form-control').val('');
				cloned.insertBefore($(this).closest(".clone-action"));
			}
			e.preventDefault();
		});
	});

	//Pour les forms part a creer automatiquement (employees)
	$(document).ready(function(){
		$("#employee_count").on("keyup",function(e){
			var boolVal = !!+($('#employee_count').val());
			$('#employee_count_mark').val(boolVal ? "true" : "false");
			var actualCloneCount = $(this).closest('fieldset').find('.base').length;
			var cloneCountToReach = $(this).val();
			
			if(cloneCountToReach!=""){
				//Creer de nouveau clones si nouvelle valeur > ancienne valeur
				if(cloneCountToReach > actualCloneCount){
					var differenceCount = cloneCountToReach - actualCloneCount;
					for (var i=1; i<=differenceCount; i++){
						var cloned = $('#e1').clone(true);
						console.log($(cloned).html());
						cloned.attr("id","e" + (actualCloneCount + i));
						cloned.find('.emp_id').text(actualCloneCount + i);
						cloned.find('.form-control').val('');
						cloned.find('.multiple-checkbox').prop('checked',false);
						cloned.insertAfter($(this).closest('fieldset').find('.base').last());
					}
				}
				
				//Supprimer les clones de trop si nouvelle valeur < ancienne valeur
				if(cloneCountToReach < actualCloneCount){
					var limit = 0;
					if(cloneCountToReach == 0){//Gestion du cas ou retour a zero - 
						//Garder le template de base
						$('#employees .form-control').val('');
						$('#employees .multiple-checkbox').prop('checked',false);
						var limit = cloneCountToReach + 1;
					}else{
						var limit = cloneCountToReach;				
					}
					for (var i=actualCloneCount; i>limit; i--){
						$(this).closest('fieldset').find('#e'+i).val('');
						$(this).closest('fieldset').find('#e'+i).remove();
					}
				}
			}
			//Gerer l'affichage et le retrait du formulaire en fonction du 
			// du nombre d'employes
			if(cloneCountToReach == 0){ 
				//Cacher le template
				$(this).closest('fieldset').find('#employees').hide();
			}else{
				//Afficher le formulaire
				$(this).closest('fieldset').find('#employees').show();
			}
			
			e.preventDefault();
		});
	});
