<?php
	function reconstruct_employees($employees, $for_campaign=true){
		$html_employees = "";
		$i = 0;
		foreach($employees as $employee){
			$i++;
			$html_employees .= 
			
			"<div class='base' id='e".$i."'>"
				."<!-- Champ employe id -->"
				."<input type='hidden' id='employee_id' name='employee_id[]' value='".$employee["id"]."'/>"		
				."<label for='employee_count' class='font-weight-bold'>Informations Employ&eacute; <span class='emp_id'>".$i."</span></label>"		
				
				."<!-- Nom -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_name' class='font-weight-bold'>Nom </label>"
					."<input data-validation='required' class='form-control' type='text' id='employee_name' name='employee_name[]' value='".$employee["employee_name"]."'"
					."data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true'/>"   
				."</div>"		
				
				."<!-- Age  -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_age' class='font-weight-bold'>Age</label>"
					."<input data-validation='number length' data-validation-length='max3' "
					."class='form-control' type='text' id='employee_age' name='employee_age[]' maxlength=3 value='".$employee["employee_age"]."'"
					."data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true'/>"       
				."</div>"
				
				."<!-- Sexe -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_sex' class='font-weight-bold'>Sexe</label>"
					."<select class='form-control' id='employee_sex' name='employee_sex[]'"
					."data-validation='non_empty_select' data-validation-depends-on='employee_count_mark'" 
					."data-validation-depends-on-value='true'>"
						."<option value='-'> - </option>"
						."<option value='F' ' ".(($employee["employee_sex"] == "F")? "selected" : "").">Femme</option>"
						."<option value='H' ".(($employee["employee_sex"] == "H")? "selected" : "").">Homme</option>"
					."</select>"
				."</div>"	
				
				."<!--  Migrant de retour-->"																
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_mr' class='font-weight-bold'>Migrant de retour</label>"
					."<select required class='form-control' id='employee_mr' name='employee_mr[]'"
					."data-validation='non_empty_select' data-validation-depends-on='employee_count_mark'" 
					."data-validation-depends-on-value='true'>"
						."<option value='-'> - </option>"
						."<option value='false' ".((getTrueOrFalse($employee["employee_mr"]) == 'false')? "selected" : "").">Non</option>"
						."<option value='true' ".((getTrueOrFalse($employee["employee_mr"]) == 'true')? "selected" : "").">Oui</option>"
					."</select>"
				."</div>"

				."<!--  Migrant dans la localite-->"																
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_mr_local' class='font-weight-bold'>Migrant dans la localit&eacute;</label>"
					."<select required class='form-control' id='employee_mr_local' name='employee_mr_local[]'"
					."data-validation='non_empty_select' data-validation-depends-on='employee_count_mark'" 
					."data-validation-depends-on-value='true'>"
						."<option value='-'> - </option>"
						."<option value='false' ".((getTrueOrFalse($employee["employee_mr_local"]) == 'false')? "selected" : "").">Non</option>"
						."<option value='true' ".((getTrueOrFalse($employee["employee_mr_local"]) == 'true')? "selected" : "").">Oui</option>"
					."</select>"
				."</div>"

				."<!--  Personne vivant avec un handicap-->"																
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_pvh' class='font-weight-bold'>Personne vivant avec handicap</label>"
					."<select required class='form-control' id='employee_pvh' name='employee_pvh[]'"
					."data-validation='non_empty_select' data-validation-depends-on='employee_count_mark'" 
					."data-validation-depends-on-value='true'>"
						."<option value='-'> - </option>"
						."<option value='false' ".((getTrueOrFalse($employee["employee_pvh"]) == 'false')? "selected" : "").">Non</option>"
						."<option value='true' ".((getTrueOrFalse($employee["employee_pvh"]) == 'true')? "selected" : "").">Oui</option>"
					."</select>"
				."</div>"
				
				."<!--  Forme par le PAREBA-->"																
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_trained_by_pareba' class='font-weight-bold'>Form&eacute; par le projet</label>"
					."<select required class='form-control' id='employee_trained_by_pareba' name='employee_trained_by_pareba[]'"
					."data-validation='non_empty_select' data-validation-depends-on='employee_count_mark'" 
					."data-validation-depends-on-value='true'>"
						."<option value='-'> - </option>"
						."<option value='false' ".((getTrueOrFalse($employee["employee_trained_by_pareba"]) == 'false')? "selected" : "").">Non</option>"
						."<option value='true' ".((getTrueOrFalse($employee["employee_trained_by_pareba"]) == 'true')? "selected" : "").">Oui</option>"
					."</select>"
				."</div>"

				."<!-- Relation avec le chef d'exploitation  -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='relationship_with_manager' class='font-weight-bold'>Relation avec le chef d'exploitation</label>"
					."<select class='form-control' id='relationship_with_manager' name='relationship_with_manager[]'"
					."data-validation='non_empty_select' data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true'>"
						."<option value='-'> - </option>"
						."<option value='Aucune' ".(($employee["relationship_with_manager"] == 'Aucune')? "selected" : "").">Aucune</option>"
						."<option value='Conjoint' ".(($employee["relationship_with_manager"] = 'Conjoint')? "selected" : "").">Conjoint(e)</option>"
						."<option value='Enfant/Assimile' ".(($employee["relationship_with_manager"] = 'Enfant/Assimile')? "selected" : "").">Enfant ou assimil&eacute;</option>"
						."<option value='Parent' ".(($employee["relationship_with_manager"] = 'Parent')? "selected" : "").">Parents(p&egrave;re, m&egrave;re ou asssimil&eacute;</option>"
						."<option value='Frere/Soeur' ".(($employee["relationship_with_manager"] = 'Frere/Soeur')? "selected" : "").">Fr&egrave;re/Soeur</option>"
					."</select>"
				."</div>"
				
				."<!-- Statut  -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_status' class='font-weight-bold'>Statut</label>"
					."<select class='form-control' id='employee_status' name='employee_status[]'"
					."data-validation='non_empty_select' data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true'>"
						."<option value='-'> - </option>"
						."<option value='Tacheron' ".(($employee["employee_status"] == 'Tacheron')? "selected" : "").">T&acirc;cheron</option>"
						."<option value='Journalier' ".(($employee["employee_status"] == 'Journalier')? "selected" : "").">Journalier</option>"
						."<option value='Saisonnier' ".(($employee["employee_status"] == 'Saisonnier')? "selected" : "").">Saisonnier</option>"
					."</select>"
				."</div>"
				
				."<!-- Nombre de jours travailles  -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='worked_days' class='font-weight-bold'>Nombre de jours travaill&eacute;s</label>"
					."<input data-validation='number length' data-validation-length='max3' value='".$employee["worked_days"]."'"
					."class='form-control' type='text' id='worked_days' name='worked_days[]' maxlength=3 data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true'/>"       
				."</div>"

				."<!-- Montant percu (nature + espece)-->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='employee_revenue' class='font-weight-bold'>Montant per&ccedil;u (nature + esp&egrave;ce)</label>"
					."<input data-validation='number required' class='form-control' id='employee_revenue' name='employee_revenue[]' value='".$employee["employee_revenue"]."'"
					."placeholder='en CFA' data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true'/>"       
				."</div>"		

				."<!-- Mode de remuneration -->"
				."<div class='form-group pb-0 pt-0 mt-0'>"
					."<label for='payment_mode' class='font-weight-bold'>Mode de r&eacute;mun&eacute;ration</label>"
					."<select class='form-control' id='payment_mode' name='payment_mode[]'"
					."data-validation='non_empty_select' data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true'>"
						."<option value='-'> - </option>"
						."<option value='Tache' ".(($employee["payment_mode"] == 'Tache')? "selected" : "").">A la t&acirc;che</option>"
						."<option value='Jour' ".(($employee["payment_mode"] == 'Jour')? "selected" : "").">Par jour</option>"
						."<option value='Mois' ".(($employee["payment_mode"] == 'Mois')? "selected" : "").">Par mois</option>"
						."<option value='Campagne' ".(($employee["payment_mode"] == 'Campagne')? "selected" : "").">Par campagne</option>"
					."</select>"
				."</div>";

				if($for_campaign){
					$html_employees .= 
					"<!-- Campagnes travaillees durant cette annee dans cette organisation -->"	
					."<div class='form-group pb-0 pt-0 mt-0 multiple'>"
						."<label for='employee_worked_campaigns' class='font-weight-bold'>Campagnes travaill&eacute;es durant l'ann&eacute;e dans cette organisation</label>"
						."<input type='text' class='form-control d-none input' data-target='ect' id='employee_worked_campaigns' name='employee_worked_campaigns[]'"
						."data-validation='required' data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true' value='".$employee['employee_worked_campaigns']."'/>"
						."<div class='checkboxes_container'>"
							."<div class='form-group'><input type='checkbox' class='multiple-checkbox ect' value='CSF' ".(strpos($employee['employee_worked_campaigns'],'CSF') !== false ? 'checked' : '')."><label> CSF</label></div>"
							."<div class='form-group'><input type='checkbox' class='multiple-checkbox ect' value='CSC' ".(strpos($employee['employee_worked_campaigns'],'CSC') !== false ? 'checked' : '')."><label> CSC</label></div>"
							."<div class='form-group'><input type='checkbox' class='multiple-checkbox ect' value='HIV' ".(strpos($employee['employee_worked_campaigns'],'HIV') !== false ? 'checked' : '')."><label> HIV</label></div>"
						."</div>"
					."</div>"		

					."<!-- Campagnes travaillees ailleurs cette annee dans l'exploitation -->"																
					."<div class='form-group pb-0 pt-0 mt-0 multiple'>"
						."<label for='employee_other_worked_campaigns' class='font-weight-bold'>Campagnes travaill&eacute;es ailleurs cette ann&eacute;e</label>"
						."<input type='text' class='form-control d-none input' data-target='eoct' id='employee_other_worked_campaigns' name='employee_other_worked_campaigns[]'"
						."data-validation='required' data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true' value='".$employee['employee_other_worked_campaigns']."'/>"
						."<div class='checkboxes_container'>"
							."<div class='form-group'><input type='checkbox' class='multiple-checkbox eoct' value='CSF' ".(strpos($employee['employee_other_worked_campaigns'],'CSF') !== false ? 'checked' : '')."><label> CSF</label></div>"
							."<div class='form-group'><input type='checkbox' class='multiple-checkbox eoct' value='CSC' ".(strpos($employee['employee_other_worked_campaigns'],'CSC') !== false ? 'checked' : '')."><label> CSC</label></div>"
							."<div class='form-group'><input type='checkbox' class='multiple-checkbox eoct' value='HIV' ".(strpos($employee['employee_other_worked_campaigns'],'HIV') !== false ? 'checked' : '')."><label> HIV</label></div>"
						."</div>"
					."</div>";
				}else{
					$html_employees .= 
					    "<!-- Trimestres travaillees durant cette annee dans cette entreprise -->"	
						."<div class='form-group pb-0 pt-0 mt-0 multiple'>"
							."<label for='employee_worked_trimesters' class='font-weight-bold'>Trimestres travaill&eacute;es durant l'ann&eacute;e dans cette entreprise</label>"
							."<input type='text' class='form-control d-none input' data-target='ewt' id='employee_worked_trimesters' name='employee_worked_trimesters[]'"
							."data-validation='required' data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true' />"
							."<div class='checkboxes_container'>"
								."<div class='form-group'><input type='checkbox' class='multiple-checkbox ewt' value='trim1' ".(strpos($employee['employee_worked_trimesters'],'trim1') !== false ? 'checked' : '')."><label> TRIM 1</label></div>"
								."<div class='form-group'><input type='checkbox' class='multiple-checkbox ewt' value='trim2' ".(strpos($employee['employee_worked_trimesters'],'trim2') !== false ? 'checked' : '')."><label> TRIM 2</label></div>"
								."<div class='form-group'><input type='checkbox' class='multiple-checkbox ewt' value='trim3' ".(strpos($employee['employee_worked_trimesters'],'trim3') !== false ? 'checked' : '')."><label> TRIM 3</label></div>"
								."<div class='form-group'><input type='checkbox' class='multiple-checkbox ewt' value='trim4' ".(strpos($employee['employee_worked_trimesters'],'trim4') !== false ? 'checked' : '')."><label> TRIM 4</label></div>"
							."</div>"
						."</div>"	

						."<!-- Trimestres travaillees ailleurs cette annee dans l'entreprise -->"																
						."<div class='form-group pb-0 pt-0 mt-0 multiple'>"
							."<label for='employee_other_worked_trimesters' class='font-weight-bold'>Trimestres travaill&eacute;es ailleurs cette ann&eacute;e</label>"
							."<input type='text' class='form-control d-none input' data-target='eowt' id='employee_other_worked_trimesters' name='employee_other_worked_trimesters[]'"
							."data-validation='required' data-validation-depends-on='employee_count_mark' data-validation-depends-on-value='true' />"
							."<div class='checkboxes_container'>"
								."<div class='form-group'><input type='checkbox' class='multiple-checkbox eowt' value='trim1' ".(strpos($employee['employee_other_worked_trimesters'],'trim1') !== false ? 'checked' : '')."><label> TRIM 1</label></div>"
								."<div class='form-group'><input type='checkbox' class='multiple-checkbox eowt' value='trim2' ".(strpos($employee['employee_other_worked_trimesters'],'trim2') !== false ? 'checked' : '')."><label> TRIM 2</label></div>"
								."<div class='form-group'><input type='checkbox' class='multiple-checkbox eowt' value='trim3' ".(strpos($employee['employee_other_worked_trimesters'],'trim3') !== false ? 'checked' : '')."><label> TRIM 3</label></div>"
								."<div class='form-group'><input type='checkbox' class='multiple-checkbox eowt' value='trim4' ".(strpos($employee['employee_other_worked_trimesters'],'trim4') !== false ? 'checked' : '')."><label> TRIM 4</label></div>"
							."</div>"
						."</div>";					
				}
			$html_employees .= "</div>";					
		}
		return $html_employees;
	}