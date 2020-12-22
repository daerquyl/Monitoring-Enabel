	<!--  
	Identification organisation 
	 -->
	<fieldset id="2">
		<!-- Nom  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="name" class="font-weight-bold">Nom organisation</label>
			<input data-validation="required" class="form-control" type="text" id="name" name="name"/>       
		</div>										
		<!-- Date de creation  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="created" class="font-weight-bold">Date de cr&eacute;ation</label>
			<input data-validation="required" class="form-control" type="date" id="created" name="created"/>       
		</div>		
		<!-- Statut -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="legal_status" class="font-weight-bold">Statut</label>
			<select class="form-control" id="legal_status" name="legal_status"
			data-validation="non_empty_select" >
				<option value="-">-</option>
				<option value="GIE">GIE</option>
				<option value="COOPERATIVE">Coop&eacute;rative</option>
				<option value="SOCIETE">Soci&eacute;t&eacute;</option>
				<option value="AUTRE">AUTRE</option>
			</select>     
		</div>	
		<!-- Montant part social -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="social_part_amount" class="font-weight-bold">Montant part sociale</label>
			<input class="form-control" type="number" data-validation="required number" id="social_part_amount" name="social_part_amount" placeholder="FCFA"/>       
		</div>		
		<!-- Montant droits d'adhesion -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="adhesion_amount" class="font-weight-bold">Montant droits d'adh&eacute;sion</label>
			<input class="form-control" type="number" data-validation="required number" id="adhesion_amount" name="adhesion_amount" placeholder="FCFA"/>       
		</div>
		<!-- Capital Social -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="capital" class="font-weight-bold">Capital social</label>
			<input class="form-control" type="number" data-validation="required number" id="capital" name="capital" placeholder="FCFA"/>       
		</div>	
		<!-- Date d'approbation des status  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="status_approval_date" class="font-weight-bold">Date approbation des status</label>
			<input class="form-control" type="date" id="status_approval_date" name="status_approval_date"/>       
		</div>	
		<!-- Date Agrement  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="agreement_date" class="font-weight-bold">Date agr&eacute;ment</label>
			<input class="form-control" data-validation="" type="date" id="agreement_date" name="agreement_date"/>       
		</div>	
		<!-- Numero d'agrement -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="agreement_number" class="font-weight-bold">Num&eacute;ro d'agrement</label>
			<input class="form-control" data-validation="" type="text" id="agreement_number" name="agreement_number"/>       
		</div>
		<!-- Date Reconnaissance juridique  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="legal_approval_date" class="font-weight-bold">Date reconnaissance juridique</label>
			<input class="form-control" data-validation="" type="date" id="legal_approval_date" name="legal_approval_date"/>       
		</div>	
		<!-- Numero reconnaissance juridique -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="legal_number" class="font-weight-bold">NINEA</label>
			<input class="form-control" data-validation="" type="text" id="legal_number" name="legal_number"/>       
		</div>
		<!-- Presence gerant  -->
		<script>
			$(document).ready(function(){
				$("#has_manager").on('change',function(){
					if($("#has_manager").val() == "true"){
						$("#manager_details").show();
					}else{
						$("#manager_details").hide();
					}
				});
			});
		</script>
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="has_manager" class="font-weight-bold">Pr&eacute;sence g&eacute;rant</label>
			<select class="form-control" id="has_manager" name="has_manager"
			data-validation="non_empty_select" >
				<option value="-">-</option>
				<option value="false">Non</option>
				<option value="true">Oui</option>
			</select>
		</div>	
		<div id="manager_details" style="display:none;">
			<!-- Nom  -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="name" class="font-weight-bold">Nom & Pr&eacute;nom</label>
				<input data-validation="required" class="form-control" type="text" id="manager_name" name="manager_name"/>       
			</div>										
			<!-- Adress  -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="manager_address" class="font-weight-bold">Village d'origine, adresse</label>
				<input data-validation="required"  class="form-control" type="text" id="manager_address" name="manager_address"/>       
			</div>										
			<!-- Age  -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="age" class="font-weight-bold">Age</label>
				<input data-validation="number length" data-validation-length="max3" 
				class="form-control" type="text" id="age" name="age" maxlength=3/>       
			</div>
			<!-- Sexe -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="manager_sex" class="font-weight-bold">Sexe</label>
				<select class="form-control" id="manager_sex" name="manager_sex"
				data-validation="non_empty_select">
					<option value="-"> - </option>
					<option value="F">Femme</option>
					<option value="H">Homme</option>
				</select>
			</div>	
			<!-- NID -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="manager_nid" class="font-weight-bold">Identifiant National</label>
				<input data-validation="length" data-validation-length="max13" 
				class="form-control" type="text" id="manager_nid" name="manager_nid" maxlength=13 />       
			</div>
			<!-- Telephone -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="manager_phone" class="font-weight-bold">T&eacute;l&eacute;phone</label>
				<input data-validation="number length" data-validation-length="max14" 
				class="form-control" type="text" id="manager_phone" name="manager_phone" maxlength=14/>       
			</div>
			<!--  Migrant de retour-->																	
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="mr" class="font-weight-bold">Migrant de retour</label>
				<select required class="form-control" id="mr" name="mr"
				data-validation="non_empty_select">
					<option value="-"> - </option>
					<option value="false">Non</option>
					<option value="true">Oui</option>
				</select>
			</div>	
			<!-- Personne vivant avec un handicap -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="pvh" class="font-weight-bold">Personne vivant avec handicap</label>
				<select class="form-control" id="pvh" name="pvh"
				data-validation="non_empty_select">
					<option value="-"> - </option>
					<option value="false">Non</option>
					<option value="true">Oui</option>
				</select>
			</div>	
			<!-- Forme par le PAREBA  -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="trained_by_pareba" class="font-weight-bold">G&eacute;rant form&eacute; par le projet</label>
				<select class="form-control" id="trained_by_pareba" name="trained_by_pareba"
				data-validation="non_empty_select">
					<option value="-"> - </option>
					<option value="false"> Non </option>
					<option value="true">Oui</option>
				</select>
			</div>			
			<!-- Revenu Gerant -->
			<div class="form-group pb-0 pt-0 mt-0">
				<label for="manager_revenue" class="font-weight-bold">Revenu G&eacute;rant</label>
				<input data-validation="number required" class="form-control" id="manager_revenue" name="manager_revenue" placeholder="en CFA"/>       
			</div>		
			<!-- Campagnes travaillees durant cette annee dans cette exploitation -->	
			<div class="form-group pb-0 pt-0 mt-0 multiple">
				<label for="worked_campaigns" class="font-weight-bold">Campagnes travaill&eacute;es durant l'ann&eacute;e</label>
				<input type="text" class="form-control d-none input"  data-target="ct" id="worked_campaigns" name="worked_campaigns"
				data-validation="required"  />
				<div class="checkboxes_container">
					<div class="form-group"><input type="checkbox" class="multiple-checkbox ct" value="CSF"><label> CSF</label></div>
					<div class="form-group"><input type="checkbox" class="multiple-checkbox ct" value="CSC"><label> CSC</label></div>
					<div class="form-group"><input type="checkbox" class="multiple-checkbox ct" value="HIV"><label> HIV</label></div>
				</div>
			</div>
		</div>			
	</fieldset>
