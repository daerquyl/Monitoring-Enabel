	<!--  
	Identification Entreprise
	 -->
	<fieldset id="2">
		<script>
		$(document).ready(function(){
			$('#legal_status').on('change',function(){
				var isGie = $(this).val() == "GIE";
				if(isGie){
					$("#capital").val(0);
					$("#capital").parent().hide();
				}else{
					$("#capital").val('');
					$("#capital").parent().show();
				}
			});
			$('#sectors').on('change',function(){
				var otherSectors = $(this).val() == "AUTRES";
				if(!otherSectors){
					$("#other_sector").val('');
					$("#other_sector").parent().hide();
				}else{
					$("#other_sector").val('-');
					$("#other_sector").parent().show();
				}
			});
		});
		</script>
		<!-- Nom  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="name" class="font-weight-bold">Nom de l'entreprise</label>
			<input data-validation="required" class="form-control" type="text" id="name" name="name"/>       
		</div>										
		<!-- Nom  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="headquarter" class="font-weight-bold">Si&egrave;ge de l'entreprise</label>
			<input data-validation="required" class="form-control" type="text" id="headquarter" name="headquarter"/>       
		</div>		
		<!-- Date de creation  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="created" class="font-weight-bold">Date de cr&eacute;ation</label>
			<input data-validation="required" class="form-control" type="date" id="created" name="created"/>       
		</div>	
		<!-- Forme Juridique -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="legal_status" class="font-weight-bold">Forme Juriridique</label>
			<select class="form-control" id="legal_status" name="legal_status"
				data-validation="non_empty_select">
				<option value="-">-</option>
				<option value="GIE">GIE</option>
				<option value="SA">SA</option>
				<option value="SUARL">SUARL</option>
				<option value="SARL">SARL</option>
				<option value="SAS">SAS</option>
				<option value="COOPERATIVE">COOPERATIVE</option>
				<option value="SNC">SNC</option>
				<option value="AGR">AGR</option>
				<option value="NEANT">NEANT</option>
			</select>     
		</div>	
		<!-- Capital Social -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="capital" class="font-weight-bold">Capital Social</label>
			<input data-validation="number required" 
			data-validation-depends-on="legal_status" 
			data-validation-depends-on-value="GIE" 
			class="form-control" type="number" id="capital" name="capital" placeholder="FCFA"/>       
		</div>
		<!-- Ninea -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="ninea" class="font-weight-bold">Ninea</label>
			<input data-validation="required" class="form-control" type="text" id="ninea" name="ninea"/>       
		</div>
		<!-- RCCM -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="rccm" class="font-weight-bold">RCCM</label>
			<input data-validation="required" class="form-control" type="text" id="rccm" name="rccm"/>       
		</div>		
		<!-- Nom Manager -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="manager" class="font-weight-bold">Responsable</label>
			<input data-validation="required" class="form-control" type="text" id="manager" name="manager"/>       
		</div>	
		
		<!-- Telephone -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="phone" class="font-weight-bold">T&eacute;l&eacute;phone responsable</label>
			<input data-validation="required" class="form-control" type="text" id="phone" name="phone"/>       
		</div>
		
		<!-- Adresse -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="address" class="font-weight-bold">Adresse responsable</label>
			<input data-validation="required" class="form-control" type="text" id="address" name="address"/>       
		</div>
		
		<!-- Statut Responsable -->
		<div class="form-group pb-0 pt-0 mt-0 multiple">
			<label for="manager_position" class="font-weight-bold">Statut du responsable</label>
			<input type="text" class="form-control d-none input" data-target="sr" id="manager_position" name="manager_position" data-validation="required"/>
			<div class="checkboxes_container">
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sr" value="PROPRIETAIRE"><label> Propri&eacute;taire</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sr" value="DIRECTEUR"><label> Directeur</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sr" value="GERANT"><label> G&eacute;rant</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sr" value="PRESIDENT"><label> Pr&eacute;sident</label></div>
			</div>
		</div>	

		<!-- Age  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="age" class="font-weight-bold">Age Responsable</label>
			<input data-validation="number length" data-validation-length="max3" 
			class="form-control" type="text" id="age" name="age" maxlength=3/>       
		</div>
	
		<!-- Activite principale -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="principal_activity" class="font-weight-bold">Activit&eacute; principale</label>
			<input data-validation="required" class="form-control" type="text" id="principal_activity" name="principal_activity"/>       
		</div>		

		<!-- Autres activites -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="other_activites" class="font-weight-bold">Autres activit&eacute;</label>
			<input class="form-control" type="text" id="other_activites" name="other_activites"/>       
		</div>		

		<!-- Secteurs  -->
		<div class="form-group pb-0 pt-0 mt-0 multiple">
			<label for="sectors" class="font-weight-bold">Secteur d'activit&eacute;</label>
			<input type="text" class="form-control d-none input" data-target="sct" id="sectors" name="sectors" data-validation="required"/>
			<div class="checkboxes_container">
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="HORTICULTURE"><label> Horticulture</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="RIZICULTURE"><label> Riziculture</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="PAPAYE"><label> Papaye</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="POMME DE TERRE"><label> Pomme de terre</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="ANACARDE"><label> Anacarde</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="ELEVAGE"><label> Elevage</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="PECHE"><label> P&ecirc;che</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="APICULTURE"><label> Apiculture</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="ARTISANAT AGRICOLE"><label> Artisanat agricole</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="RIZICULTURE"><label> Riziculture</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="MECANISATION"><label> M&eacute;canisation</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="SEMENCE RIZ"><label> Semence riz</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox sct" value="AUTRES"><label> Autres</label></div>
			</div>
		</div>	

		<!-- Autre secteur -->
		<div class="form-group pb-0 pt-0 mt-0" style="display:none">
			<label for="other_sector" class="font-weight-bold">Autre secteur</label>
			<input class="form-control" type="text" id="other_sector" name="other_sector"/>       
		</div>

		<!-- maillon dans la chaine de valeur  -->
		<div class="form-group pb-0 pt-0 mt-0 multiple">
			<label for="position_in_value_stream" class="font-weight-bold">Maillon dans la cha&icirc;ne de valeur</label>
			<input type="text" class="form-control d-none input" data-target="mcv" id="position_in_value_stream" name="position_in_value_stream" data-validation="required"/>
			<div class="checkboxes_container">
				<div class="form-group"><input type="checkbox" class="multiple-checkbox mcv" value="PRODUCTION"><label> Production</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox mcv" value="TRANSFORMATION"><label> Transformation</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox mcv" value="LOGISTIQUE"><label> Logistique</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox mcv" value="COMMERCIALISATION"><label> Commercialisation</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox mcv" value="INTRANTS ET SEMENCES"><label> Intrants et semences</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox mcv" value="AUTRES"><label> Autres</label></div>
			</div>
		</div>
		
		<!-- Existant avant le PAREBA  -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="created_before_pareba" class="font-weight-bold">Existe Avant le PARERBA</label>
			<select class="form-control" id="created_before_pareba" name="created_before_pareba"
				data-validation="non_empty_select">
				<option value="-">-</option>						
				<option value="false"> Non </option>
				<option value="true">Oui</option>
			</select>
		</div>									
		<!-- Revenu du responsabe -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="manager_revenue" class="font-weight-bold">Montant total des salaires du responsable durant la p&eacute;riode</label>
			<input data-validation="number required" class="form-control" id="manager_revenue" name="manager_revenue" placeholder="en CFA"/>       
		</div>		

		<!-- Chef d'entreprise forme par le projet -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="trained_by_pareba" class="font-weight-bold">Responsable form&eacute; par le projet</label>
			<select class="form-control" id="trained_by_pareba" name="trained_by_pareba"
				data-validation="non_empty_select">
				<option value="-">-</option>						
				<option value="false"> Non </option>
				<option value="true">Oui</option>
			</select>
		</div>	
		
		<!-- Trimestres travaillees durant cette annee -->	
		<div class="form-group pb-0 pt-0 mt-0 multiple">
			<label for="worked_trimesters" class="font-weight-bold">Trimestres travaill&eacute;es durant cette ann&eacute;e</label>
			<input type="text" class="form-control d-none input" data-target="wt" id="worked_trimesters" name="worked_trimesters"
			data-validation="required"/>
			<div class="checkboxes_container">
				<div class="form-group"><input type="checkbox" class="multiple-checkbox wt" value="trim1"><label> TRIM 1</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox wt" value="trim2"><label> TRIM 2</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox wt" value="trim3"><label> TRIM 3</label></div>
				<div class="form-group"><input type="checkbox" class="multiple-checkbox wt" value="trim4"><label> TRIM 4</label></div>
			</div>
		</div>
				
		<!-- Chiffre d'affaire avant le pareba -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="ca_before_pareba" class="font-weight-bold">Chiffre d'affaire pr&eacute;c&eacute;dent</label>
			<input data-validation="number required" class="form-control" type="text" id="ca_before_pareba" name="ca_before_pareba" placeholder="en CFA"/>       
		</div>
	</fieldset>
