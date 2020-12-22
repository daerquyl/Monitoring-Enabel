	<!--  
	Informations sur les employes
	-->
	<fieldset id="4">
		<!-- Nombre d'employes(Different du chef d'entreprise) -->
		<div class="form-group pb-0 pt-0 mt-0">
			<label for="employee_count" class="font-weight-bold">Nombre d'employ&eacute;s(diff&eacute;rent du chef d'entreprise)</label>
			<input class="form-control" type="number" id="employee_count" name="employee_count"/>       
		</div>	
		<!-- Nombre d'employes(Different du chef d'entreprise) -->
		<select
		data-validation="non_empty_select" 
		id="employee_count_mark" style="display:none" 
		> 
			<option value="true"></option>
			<option value="false"></option>
		</option>
		</select>
		<div id="employees" style="display:none">
			<div class="base" id="e1">
				<!-- Champ employe id -->
				<input type="hidden" id="employee_id" name="employee_id[]"/>
			
				<label for="employee_count" class="font-weight-bold">Informations Employ&eacute; <span class="emp_id">1</span></label>				
				
				<!-- Nom -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_name" class="font-weight-bold">Nom </label>
					<input data-validation="required" class="form-control" type="text" id="employee_name" name="employee_name[]" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true"/>       
				</div>		
				
				<!-- Age  -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_age" class="font-weight-bold">Age</label>
					<input data-validation="number length" data-validation-length="max3" 
					class="form-control" type="text" id="employee_age" name="employee_age[]" maxlength=3 data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true"/>       
				</div>
				
				<!-- Sexe -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_sex" class="font-weight-bold">Sexe</label>
					<select class="form-control" id="employee_sex" name="employee_sex[]"
					data-validation="non_empty_select" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true">
						<option value="-"> - </option>
						<option value="F">Femme</option>
						<option value="H">Homme</option>
					</select>
				</div>	
				
				<!--  Migrant de retour-->																	
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_mr" class="font-weight-bold">Migrant de retour</label>
					<select class="form-control" id="employee_mr" name="employee_mr[]"
					data-validation="non_empty_select" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true">
						<option value="-"> - </option>
						<option value="false">Non</option>
						<option value="true">Oui</option>
					</select>
				</div>	
				
				<!--  Migrant dans la localite-->																	
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_mr_local" class="font-weight-bold">Migrant dans la localit&eacute;</label>
					<select class="form-control" id="employee_mr_local" name="employee_mr_local[]"
					data-validation="non_empty_select" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true">
						<option value="-"> - </option>
						<option value="false">Non</option>
						<option value="true">Oui</option>
					</select>
				</div>	

				<!-- Personne vivant avec un handicap -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_pvh" class="font-weight-bold">Personne vivant avec handicap</label>
					<select class="form-control" id="employee_pvh" name="employee_pvh[]"
					data-validation="non_empty_select" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true">
						<option value="-"> - </option>
						<option value="false">Non</option>
						<option value="true">Oui</option>
					</select>
				</div>	
				
				<!-- Forme par le PAREBA  -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_trained_by_pareba" class="font-weight-bold">Form&eacute; par le projet</label>
					<select class="form-control" id="employee_trained_by_pareba" name="employee_trained_by_pareba[]"
					data-validation="non_empty_select" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true">
						<option value="-"> - </option>
						<option value="false"> Non </option>
						<option value="true">Oui</option>
					</select>
				</div>				

				<!-- Relation avec le chef d'entreprise  -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="relationship_with_manager" class="font-weight-bold">Relation avec le chef d'entreprise</label>
					<select class="form-control" id="relationship_with_manager" name="relationship_with_manager[]"
					data-validation="non_empty_select" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true">
						<option value="-"> - </option>
						<option value="Aucune">Aucune</option>
						<option value="Conjoint">Conjoint(e)</option>
						<option value="Enfant/Assimile">Enfant ou assimil&eacute;</option>
						<option value="Parent">Parents(p&egrave;re, m&egrave;re ou asssimil&eacute;</option>
						<option value="Frere/Soeur">Fr&egrave;re/Soeur</option>
					</select>
				</div>
				
				<!-- Statut  -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_status" class="font-weight-bold">Statut</label>
					<select class="form-control" id="employee_status" name="employee_status[]"
					data-validation="non_empty_select" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true">
						<option value="-"> - </option>
						<option value="Permanent">Permanent</option>
						<option value="Tacheron">T&acirc;cheron</option>
						<option value="Journalier">Journalier</option>
						<option value="Saisonnier">Saisonnier</option>
					</select>
				</div>
				
				<!-- Nombre de jours travailles  -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="worked_days" class="font-weight-bold">Nombre de jours travaill&eacute;s</label>
					<input data-validation="number length" data-validation-length="max3" 
					class="form-control" type="text" id="worked_days" name="worked_days[]" maxlength=3 data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true"/>       
				</div>

				<!-- Montant percu (nature + espece)-->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="employee_revenue" class="font-weight-bold">Montant per&ccedil;u (nature + esp&egrave;ce)</label>
					<input data-validation="number required" class="form-control" id="employee_revenue" name="employee_revenue[]" placeholder="en CFA" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true"/>       
				</div>		

				<!-- Mode de remuneration -->
				<div class="form-group pb-0 pt-0 mt-0">
					<label for="payment_mode" class="font-weight-bold">Mode de r&eacute;mun&eacute;ration</label>
					<select class="form-control" id="payment_mode" name="payment_mode[]"
					data-validation="non_empty_select" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true">
						<option value="-"> - </option>
						<option value="Non Remunere">Non r&eacute;mun&eacute;r&eacute;</option>
						<option value="Tache">A la t&acirc;che</option>
						<option value="Jour">Par jour</option>
						<option value="Mois">Par mois</option>
						<option value="Campagne">Par campagne</option>
					</select>
				</div>	
				<!-- Trimestres travaillees durant cette annee dans cette entreprise -->	
				<div class="form-group pb-0 pt-0 mt-0 multiple">
					<label for="employee_worked_trimesters" class="font-weight-bold">Trimestres travaill&eacute;es durant l'ann&eacute;e dans cette entreprise</label>
					<input type="text" class="form-control d-none input" data-target="ewt" id="employee_worked_trimesters" name="employee_worked_trimesters[]"
					data-validation="required" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true" />
					<div class="checkboxes_container">
						<div class="form-group"><input type="checkbox" class="multiple-checkbox ewt" value="trim1"><label> TRIM 1</label></div>
						<div class="form-group"><input type="checkbox" class="multiple-checkbox ewt" value="trim2"><label> TRIM 2</label></div>
						<div class="form-group"><input type="checkbox" class="multiple-checkbox ewt" value="trim3"><label> TRIM 3</label></div>
						<div class="form-group"><input type="checkbox" class="multiple-checkbox ewt" value="trim4"><label> TRIM 4</label></div>
					</div>
				</div>		

				<!-- Trimestres travaillees ailleurs cette annee dans l'entreprise -->																
				<div class="form-group pb-0 pt-0 mt-0 multiple">
					<label for="employee_other_worked_trimesters" class="font-weight-bold">Trimestres travaill&eacute;es ailleurs cette ann&eacute;e</label>
					<input type="text" class="form-control d-none input" data-target="eowt" id="employee_other_worked_trimesters" name="employee_other_worked_trimesters[]"
					data-validation="required" data-validation-depends-on="employee_count_mark" data-validation-depends-on-value="true" />
					<div class="checkboxes_container">
						<div class="form-group"><input type="checkbox" class="multiple-checkbox eowt" value="trim1"><label> TRIM 1</label></div>
						<div class="form-group"><input type="checkbox" class="multiple-checkbox eowt" value="trim2"><label> TRIM 2</label></div>
						<div class="form-group"><input type="checkbox" class="multiple-checkbox eowt" value="trim3"><label> TRIM 3</label></div>
						<div class="form-group"><input type="checkbox" class="multiple-checkbox eowt" value="trim4"><label> TRIM 4</label></div>
					</div>
				</div>		
			</div>
		</div>
	</fieldset>
