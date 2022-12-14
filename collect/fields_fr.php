<?php
$default_fields_fr = [
"date_creation" => "Date creation",
"date_validation" => "Date validation",
"status" => "Status",
"creator_id" => "Id Facilitateur",
"creator" => "Facilitateur",
"validator_id" => "Id Superviseur",
"validator" => "Superviseur",
"organization" => "Partenaire",
"id" => "Id",
"site_id" => "Id Site",
"site" => "Site",
"region" => "Region",
"department" => "Departement",
"commune" => "Commune",
"campaign" => "Campagne",
"campaign_id" => "Id campagne",
];

$employee_fields_fr = [
"employee_count" => "Nombre Employes",
"employee_id" => "Id employe",
"employee_name" => "Nom employe",
"employee_age" => "Age employe",
"employee_sex" => "Sexe Employe",
"employee_mr" => "Employe Migrant de retour",
"employee_mr_local" => "Employe Migrant vivant dans la localite",
"employee_pvh" => "Employe Personne vivant avec handicap",
"employee_trained_by_pareba" => "Employe forme par le projer",
"relationship_with_manager" => "Relation avec le chef d'exploitation",
"employee_status" => "Statut Employe",
"worked_days" => "Nombre de jours travailles",
"employee_revenue" => "Revenu employe",
"payment_mode" => "Mode de remuneration",
"employee_worked_campaigns" => "Campagnes travaillees",
"employee_other_worked_campaigns" => "Campagnes travaillees ailleurs",
"employee_worked_trimesters" => "Trimestres travaillees",
"employee_other_worked_trimesters" => "Trimestres travailles ailleurs",
];

$speculation_fields_fr = [
"speculation_id" => "Id speculation",
"speculation" => "Speculation",
"planted_area" => "Superficie emblavee",
"harvest_start_date" => "Date debut recolte",
"harvest_end_date_1" => "Date fin recolte 1",
"harvest_end_date_2" => "Date fin recolte 2",
"harvest_end_date_3" => "Date fin recolte 3",
"quantity_selled_without_contract" => "Quantite vendue sans contrat",
"quantity_selled_with_contract" => "Quantite vendue sous contrat",
"selled_amount_without_contract" => "Montant vente sans contrat",
"selled_amount_with_contract" => "Montant vente sous contrat",
"quantity_in_stock" => "Quantite en stock",
"stock_value" => "Valeur stock",
"quantity_consumed" => "Quantite consommee",
"consumed_value" => "valeur consommee",
"quantity_lost" => "Quantite perdue",
"lost_value" => "Valeur perdue",
"other_revenues" => "Autres ventes",
];

$fields_fr_perimeter = array_merge($default_fields_fr, [
"village" => "Village",
"reporting_period" => "Periode de rapportage",
"total_ha" => "Superficie totale",
"total_ha_irrigated" => "Superficie fonctionnelle",
"total_ha_legally_secured" => "Superficie deliberee",
"total_ha_running" => "Superficie en production",
"total_ha_fenced" => "Superficie cloturee",
"men_workers_lt35" => "Exploitants JH",
"men_workers_gt35" => "Exploitants H",
"women_workers_lt35" => "Exploitants JF",
"women_workers_gt35" => "Exploitants F",
"migrant_men_workers_lt35" => "MR Exploitants JH",
"migrant_men_workers_gt35" => "MR Exploitants H",
"migrant_women_workers_lt35" => "MR Exploitants JF",
"migrant_women_workers_gt35" => "MR Exploitants F",
"handicap_men_workers_lt35" => "PVH Exploitants JH",
"handicap_men_workers_gt35" => "PVH Exploitants H",
"handicap_women_workers_lt35" => "PVH Exploitants JF",
"handicap_women_workers_gt35" => "PVH Exploitants F",
"functional_sheds" => "Hangars F",
"non_functional_sheds" => "Hangars NF",
"functional_offices" => "Bureaux F",
"non_functional_offices" => "Bureaux NF",
"functional_deposits" => "Magasins de stockage F",
"non_functional_deposits" => "Magasins de stockage NF",
"functional_locals" => "Locaux Techniques F",
"non_functional_locals" => "Locaux Techniques NF",
"functional_cold_rooms" => "Chambres Froides F",
"non_functional_cold_rooms" => "Chambres Froides NF",
"functional_huskers" => "Decortiqueuses F",
"non_functional_huskers" => "Decortiqueuses NF",
"functional_tractors" => "Tracteurs F",
"non_functional_tractors" => "Tracteurs NF",
"functional_harvesters" => "Batteuses F",
"non_functional_harvesters" => "Batteuses NF",
"functional_ricemils" => "Mini-rizerie F",
"non_functional_ricemils" => "Mini-rizerie NF",
"functional_power_solar" => "Systeme solaire F",
"non_functional_power_solar" => "Systeme solaire NF",
"functional_power_senelec" => "SENELEC F",
"non_functional_power_senelec" => "SENELEC NF",
"functional_power_generator" => "Groupes electrogenes F",
"non_functional_power_generator" => "Groupes electrogenes NF",
"functional_forage" => "Forages F",
"non_functional_forage" => "Forages NF",
"functional_pump" => "Moto Pompes F",
"non_functional_pump" => "Moto Pompes NF",
"functional_hole" => "Puits F",
"non_functional_hole" => "Puits NF",
"functional_water_monitor" => "Compteur d'eau F",
"non_functional_water_monitor" => "Compteur d'eau NF",
"functional_tank" => "Reservoirs F",
"non_functional_tank" => "Reservoirs NF",
"functional_cloture" => "Lineaire cloture F",
"non_functional_cloture" => "Lineaire cloture NF",
"grill_maintenance_cost" => "Cout maintenance cloture",
"hole_maintenance_cost" => "Cout maintenance puits",
"basin_maintenance_cost" => "Cout maintenance bassins",
"solar_maintenance_cost" => "Cout maintenance panneaux solaires",
"tank_maintenance_cost" => "Cout maintenance reservoirs",
"generator_maintenance_cost" => "Cout maintenance Groupe electrogene",
"other_maintenance_cost" => "Autres cout de maintenance",
"other_maintenance_cost_description" => "Precision autre couts",
"plumbing_maintenance_cost" => "Cout maintenance plomberie",
"building_maintenance_cost" => "Cout maintenance batiments",
"agriculture_equipment_maintenance_cost" => "Cout maintenance materiels agricoles",
"animal_maintenance_cost" => "Cout maintenance animaux a usage agricole",
"forage_maintenance_cost" => "Cout maintenance forage",
"maintenance_cost" => "Total cout maintenance",
"irrigation_type" => "Type d'irrigation",
"other_irrigation_type" => "Autres type d'irrigation",
"forages" => "Nombre forages ",
"holes" => "Nombre puits",
"basins" => "Nombre bassins",
"taps" => "Nombre robinets",
"moto_pumps" => "Nombre moto-pompes",
"solar_pumps" => "Nombre pompes solaires",
"water_moy_deep" => "Profondeur moyenne sources d'eau",
"water_debit" => "Debit d'exploitation",
"energy_type" => "Source d'energie d'exhaure",
"energy_powerkw" => "Puissance source energie KW",
"energy_powerkva" => "Puissance source energie KVA",
"length_piping" => "Longueur canalisation",
"length_fences" => "Longueur cloture",
"length_hedges" => "Longueur haie vive",
"plots" => "Nombre de parcelles",
"plot_moy_area" => "Superficie moy/parcelle",
"total_ha_running_men_lt35" => "Superficie en production continue JH",
"total_ha_running_mr_men_lt35" => "Superficie en production continue MR H",
"total_ha_running_pvh_men_lt35" => "Superficie en production continue PVH H",
"total_ha_running_men_gt35" => "Superficie en production continue H",
"total_ha_running_mr_men_gt35" => "Superficie en production continue MR H",
"total_ha_running_pvh_men_gt35" => "Superficie en production continue PVH H",
"total_ha_running_women_lt35" => "Superficie en production continue JF",
"total_ha_running_mr_women_lt35" => "Superficie en production continue MR JF",
"total_ha_running_pvh_women_lt35" => "Superficie en production continue PVH JF",
"total_ha_running_women_gt35" => "Superficie en production continue F",
"total_ha_running_mr_women_gt35" => "Superficie en production continue MR F",
"total_ha_running_pvh_women_gt35" => "Superficie en production continue PVH F",
]);

$fields_fr_exploitation = array_merge($default_fields_fr, $employee_fields_fr, $speculation_fields_fr,
[
"polarized_villages" => "Villages polarises",
"owner_id" => "Id Producteur",
"owner_name" => "Prenom Nom",
"owner_address" => "Adresse producteur",
"parcel_code" => "ID SGBD",
"age" => "Age",
"is_adult" => "Adulte",
"owner_sex" => "Sexe",
"owner_nid" => "Identifiant national",
"owner_phone" => "Telephone",
"owner_experienced_years" => "Annees d'experiences",
"allocated_area" => "Superficie affectee",
"mr" => "Migrant de retour",
"pvh" => "Personne vivant avec handicap",
"parcel_unity" => "Unite parcellaire",
"op_member" => "Membre d'une OP",
"op" => "Description OP",
"created_before_pareba" => "Actif avant le PARERBA",
"trained_by_pareba" => "Exploitant forme par le projet",
"reporting_period" => "Periode de rapportage",
"exploitation_start_date" => "Date debut campagne",
"exploitation_end_date" => "Date fin campagne",
"used_good_practises" => "Applique les bonnes pratiques",
"soil_preparation_amount" => "Depenses pour la preparation sol",
"seeds_amount" => "Depenses pour les semences",
"organic_fertilizer_cost" => "Depenses fertilisants organiques",
"mineral_fertilizer_cost" => "Depenses fertilisants mineraux",
//"fetilizer_cost" => "Cout fertilisants",
"phytosanitizer_cost" => "Depenses produits phytosanitaires",
"agricultural_equipment_cost" => "Depenses achat materiel et machine agricole",
"agricultural_equipment_maintenance_cost" => "Depenses entretien materiel et machine agricole",
"irrigation_network_cost" => "Cout de l'eau",
"royalties_payed" => "Montant redevance",
"salary_payed" => "Montant paye aux employes",
"credit_repayment_amount" => "Montant des interets rembourses",
"cooperative_contribution_amount" => "Montant participation groupements",
"other_amount" => "Autres montant",
"other_amount_description" => "Description autres montant",
"total_expenses" => "Charges d'exploitation",
"total_selled_amount" => "Chiffre d'affaire",
"total_mensual_salary" => "Total employes avec salaires mensuels",
"total_timed_salary" => "Total employes avec salaire par tache",
"total_campaign_salary" => "Total employes avec salaire par campagne",
"total_planted_area" => "Superficie total emblavee",
"harvest_quantity" => "Quantite recoltee",
"credit_request" => "Sollicitation de credit",
"credit_request_ok" => "Obtention de credit",
"credit_id" => "Id credit",
"financial_institution" => "Institution financiere",
"credit_object" => "Objet du credit",
"credit_amount" => "Montant du credit",
"credit_rate" => "Taux",
"credit_duration" => "Duree du credit",
"credit_repayment_type" => "Type de remboursement",
"credit_repayment_mode" => "Mode de remboursement",
"credit_payment_status" => "Etat des remboursements",
"capacity_building" => "Acces Service non financier",
"support_id" => "Id appui",
"provider" => "Fournisseur",
"module" => "Module",
"other_provider" => "Autres fournisseurs",
"other_support" => "Autres appui",
"categorie" => "Categorie",
"type" => "Type de support",
"trained_instances" => "Instances formes",
"men_beneficiary_lt35" => "Beneficiaire HJ",
"men_beneficiary_gt35" => "Beneficiaire H",
"women_beneficiary_lt35" => "Beneficiaire FJ",
"women_beneficiary_gt35" => "Beneficiaire F",
"mr_men_beneficiary_lt35" => "Beneficiaire HJ",
"mr_men_beneficiary_gt35" => "Beneficiaire H",
"mr_women_beneficiary_lt35" => "Beneficiaire FJ",
"mr_women_beneficiary_gt35" => "Beneficiaire F",
"pvh_men_beneficiary_lt35" => "Beneficiaire HJ",
"pvh_men_beneficiary_gt35" => "Beneficiaire H",
"pvh_women_beneficiary_lt35" => "Beneficiaire FJ",
"pvh_women_beneficiary_gt35" => "Beneficiaire F",
"collect_id" => "Id collect",
"etp_permanent_men_lt35" => "ETP permanents HJ",
"etp_permanent_men_gt35" => "ETP permanents H",
"etp_permanent_women_lt35" => "ETP permanents FJ",
"etp_permanent_women_gt35" => "ETP permanents F",
"etp_temporary_men_lt35" => "ETP saisonniers HJ",
"etp_temporary_men_gt35" => "ETP saisonniers H",
"etp_temporary_women_lt35" => "ETP saisonniers FJ",
"etp_temporary_women_gt35" => "ETP saisonniers F",
"etp_other_men_lt35" => "ETP tacherons HJ",
"etp_other_men_gt35" => "ETP tacherons H",
"etp_other_women_lt35" => "ETP tacherons FJ",
"etp_other_women_gt35" => "ETP tacherons F",
"out_of_scope_revenue" => "Recettes hors perimetre",
"manager_revenue" => "Produits d'exploitation",
"worked_campaigns" => "Campagnes travaillees",
"net_revenue" => "Revenue net",
]);

$fields_fr_enterprise = array_merge($default_fields_fr, $employee_fields_fr,
[ 
"name" => "Nom de l'entreprise",
"headquarter" => "Siege",
"created" => "Date de creation",
"legal_status" => "Forme juridique",
"capital" => "capital social",
"ninea" => "NINEA",
"rccm" => "RCCM",
"manager" => "Nom du responsable",
"phone" => "Telephone du responsable",
"address" => "Adresse du responsable",
"age" => "Age",
"is_adult" => "Adulte?",
"manager_position" => "Statut du responsable",
"principal_activity" => "Activite principale",
"other_activites" => "Autres activites",
"sectors" => "Secteurs d'activites",
"other_sector" => "Autres secteurs",
"position_in_value_stream" => "Maillon dans la chaine de valeur",
"created_before_pareba" => "Actif avant le PARERBA",
"trained_by_pareba" => "Responsable forme par le projet",
"ca_before_pareba" => "Chiffre d'affaire T0",
"men_shareholder_lt35" => "Actionnaires HJ",
"men_shareholder_gt35" => "Actionnaires H",
"women_shareholder_lt35" => "Actionnaires FJ",
"women_shareholder_gt35" => "Actionnaires F",	
"mr_men_shareholder_lt35" => "Actionnaires MR HJ",
"mr_men_shareholder_gt35" => "Actionnaires MR H",
"mr_women_shareholder_lt35" => "Actionnaires MR FJ",
"mr_women_shareholder_gt35" => "Actionnaires MR F",	
"pvh_men_shareholder_lt35" => "Actionnaires PVH HJ",
"pvh_men_shareholder_gt35" => "Actionnaires PVH H",
"pvh_women_shareholder_lt35" => "Actionnaires PVH FJ",
"pvh_women_shareholder_gt35" => "Actionnaires PVH F",
"shareholders" => "Actionnaires",	
"total_mensual_salary",
"total_timed_salary",
"ca" => "Chiffre d'affaire",
"salary_expenses" => "Charges salariales",
"other_expenses" => "Autres charges",
"other_expenses_description" => "Description autres charges",
"incomes" => "Produit d'exploitation",
"net_revenues" => "Revenue net d'exploitation",
"net_earnings" => "Marge beneficiaire",
"credit_id" => "Id credit",
"financial_institution" => "Institution financiere",
"credit_request" => "Sollicitation de credit",
"credit_request_ok" => "Obtention du credit",
"credit_object" => "Objet du credit",
"credit_amount" => "Montant du credit",
"credit_rate" => "Taux du credit",
"credit_duration" => "Duree du credit",
"credit_repayment_type" => "Type de remboursement",
"credit_repayment_mode" => "Mode de remboursement",
"credit_payment_status" => "Etat des remboursements",
"capacity_building" => "Acces service non financier",
"support_id" => "Id appui",
"provider" => "Fournisseur",
"other_provider" => "Autre fournisseur",
"other_support" => "Autre appui",
"module" => "Module",
"categorie" => "Categorie",
"type" => "Type",
"trained_instances" => "Instances formes",
"men_beneficiary_lt35" => "Beneficiaire HJ",
"men_beneficiary_gt35" => "Beneficiaire H",
"women_beneficiary_lt35" => "Beneficiaire FJ",
"women_beneficiary_gt35" => "Beneficiaire F",
"mr_men_beneficiary_lt35" => "Beneficiaire MR HJ",
"mr_men_beneficiary_gt35" => "Beneficiaire MR H",
"mr_women_beneficiary_lt35" => "Beneficiaire MR FJ",
"mr_women_beneficiary_gt35" => "Beneficiaire MR F",
"pvh_men_beneficiary_lt35" => "Beneficiaire PVH HJ",
"pvh_men_beneficiary_gt35" => "Beneficiaire PVH H",
"pvh_women_beneficiary_lt35" => "Beneficiaire PVH FJ",
"pvh_women_beneficiary_gt35" => "Beneficiaire PVH F",
"collect_id" => "Id collecte",
"commune_id" => "Id commune",
"commune" => "Commune",
"etp_permanent_men_lt35" => "ETP permanents HJ",
"etp_permanent_men_gt35" => "ETP permanents H",
"etp_permanent_women_lt35" => "ETP permanents FJ",
"etp_permanent_women_gt35" => "ETP permanents F",
"etp_temporary_men_lt35" => "ETP saisonniers HJ",
"etp_temporary_men_gt35" => "ETP saisonniers H",
"etp_temporary_women_lt35" => "ETP saisonniers FJ",
"etp_temporary_women_gt35" => "ETP saisonniers F",
"etp_other_men_lt35" => "ETP tacherons HJ",
"etp_other_men_gt35" => "ETP tacherons H",
"etp_other_women_lt35" => "ETP tacherons FJ",
"etp_other_women_gt35" => "ETP tacherons F",
"manager_revenue" => "Montant total des salaires du responsable durant la periode",
"worked_trimesters" => "Campagnes travaillees",
]);

$fields_fr_cooperative = array_merge($default_fields_fr, $employee_fields_fr,
[
"name" => "Nom organisation",
"polarized_villages" => "Villages polarises",
"created" => "Date de creation",
"legal_status" => "Statut",
"social_part_amount" => "Montant part sociale",
"adhesion_amount" => "Montant droits d'adhesion",
"capital" => "Capital social",
"status_approval_date" => "Date approbation des status",	
"legal_approval_date" => "Date reconnaissance juridique",
"legal_number" => "NINEA",
"agreement_date" => "Date d'agrement",
"agreement_number" => "Numero d'agrement",

"has_manager" => "Presence d'un gerant",
"manager_name" => "Nom gerant",
"manager_address" => "Adresse gerant",
"manager_sex" => "Sexe",
"manager_nid" => "Identifiant national gerant",
"manager_phone" => "Telephone gerant",
"age" => "Age",
"is_adult"=> "Adulte ?",
"mr" => "Migrant de retour",
"pvh" => "Personne vivant avec handicap",
"manager_revenue" => "Revenue gerant",
"worked_campaigns" => "Campagnes travaillees",
"trained_by_pareba" => "Gerant forme par le projet",

"men_member_lt35" => "Membres HJ",
"men_member_gt35" => "Membres H",
"women_member_lt35" => "Membres FJ",
"women_member_gt35" => "Membres F",	
"mr_men_member_lt35" => "Membres MR HJ",
"mr_men_member_gt35" => "Membres MR H",
"mr_women_member_lt35" => "Membres MR FJ",
"mr_women_member_gt35" => "Membres MR F",	
"pvh_men_member_lt35" => "Membres MR HJ",
"pvh_men_member_gt35" => "Membres MR H",
"pvh_women_member_lt35" => "Membres MR FJ",
"pvh_women_member_gt35" => "Membres MR F",
"ca_men_member_lt35" => "Membres CA HJ",
"ca_men_member_gt35" => "Membres CA H",
"ca_women_member_lt35" => "Membres CA FJ",
"ca_women_member_gt35" => "Membres CA F",	
"ca_mr_men_member_lt35" => "Membres CA MR HJ",
"ca_mr_men_member_gt35" => "Membres CA MR H",
"ca_mr_women_member_lt35" => "Membres CA MR FJ",
"ca_mr_women_member_gt35" => "Membres CA MR F",	
"ca_pvh_men_member_lt35" => "Membres CA PVH HJ",
"ca_pvh_men_member_gt35" => "Membres CA PVH H",
"ca_pvh_women_member_lt35" => "Membres CA PVH FJ",
"ca_pvh_women_member_gt35" => "Membres CA PVH J",
"cs_men_member_lt35" => "Membres CS HJ",
"cs_men_member_gt35" => "Membres CS H",
"cs_women_member_lt35" => "Membres CS FJ",
"cs_women_member_gt35" => "Membres CS F",	
"cs_mr_men_member_lt35" => "Membres CS MR HJ",
"cs_mr_men_member_gt35" => "Membres CS MR H",
"cs_mr_women_member_lt35" => "Membres CS MR FJ",
"cs_mr_women_member_gt35" => "Membres CS MR F",	
"cs_pvh_men_member_lt35" => "Membres CS PVH HJ",
"cs_pvh_men_member_gt35" => "Membres CS PVH H",
"cs_pvh_women_member_lt35" => "Membres CS PVH FJ",
"cs_pvh_women_member_gt35" => "Membres CS PVH F",
"be_men_member_lt35" => "Membres CS HJ",
"be_men_member_gt35" => "Membres CS H",
"be_women_member_lt35" => "Membres CS FJ",
"be_women_member_gt35" => "Membres CS F",	
"be_mr_men_member_lt35" => "Membres CS MR HJ",
"be_mr_men_member_gt35" => "Membres CS MR H",
"be_mr_women_member_lt35" => "Membres CS MR FJ",
"be_mr_women_member_gt35" => "Membres CS MR F",	
"be_pvh_men_member_lt35" => "Membres CS PVH HJ",
"be_pvh_men_member_gt35" => "Membres CS PVH H",
"be_pvh_women_member_lt35" => "Membres CS PVH FJ",
"be_pvh_women_member_gt35" => "Membres CS PVH F",
"csp_men_member_lt35" => "Membres CSP HJ",
"csp_men_member_gt35" => "Membres CSP H",
"csp_women_member_lt35" => "Membres CSP FJ",
"csp_women_member_gt35" => "Membres CSP F",	
"csp_mr_men_member_lt35" => "Membres MR CSP HJ",
"csp_mr_men_member_gt35" => "Membres MR CSP H",
"csp_mr_women_member_lt35" => "Membres MR CSP FJ",
"csp_mr_women_member_gt35" => "Membres MR CSP F",
"csp_pvh_men_member_lt35" => "Membres PVH CSP HJ",
"csp_pvh_men_member_gt35" => "Membres PVH CSP H",
"csp_pvh_women_member_lt35" => "Membres PVH CSP FJ",
"csp_pvh_women_member_gt35" => "Membres PVH CSP F",
"cd_men_member_lt35" => "Membres CD HJ",
"cd_men_member_gt35" => "Membres CD H",
"cd_women_member_lt35" => "Membres CD FJ",
"cd_women_member_gt35" => "Membres CD F",	
"cd_mr_men_member_lt35" => "Membres MR CD HJ",
"cd_mr_men_member_gt35" => "Membres MR CD H",
"cd_mr_women_member_lt35" => "Membres MR CD FJ",
"cd_mr_women_member_gt35" => "Membres MR CD F",	
"cd_pvh_men_member_lt35" => "Membres PVH CD HJ",
"cd_pvh_men_member_gt35" => "Membres PVH CD H",
"cd_pvh_women_member_lt35" => "Membres PVH CD FJ",
"cd_pvh_women_member_gt35" => "Membres PVH CD F",
"expected_ag" => "Nombre d'assemblee generale prevu",
"real_ag" => "Nombre d'assemblee generale realise",
"pv_ag" => "Nombre d'assemblee generale avec PV",
"ag_men_participant_lt35" => "Participants AG HJ",
"ag_men_participant_gt35" => "Participants AG H",
"ag_women_participant_lt35" => "Participants AG FJ",
"ag_women_participant_gt35" => "Participants AG F",
"ag_mr_men_participant_lt35" => "Participants AG MR HJ",
"ag_mr_men_participant_gt35" => "Participants AG MR H",
"ag_mr_women_participant_lt35" => "Participants AG MR FJ",
"ag_mr_women_participant_gt35" => "Participants AG MR F",
"ag_pvh_men_participant_lt35" => "Participants AG PVH HJ",
"ag_pvh_men_participant_gt35" => "Participants AG PVH H",
"ag_pvh_women_participant_lt35" => "Participants AG PVH FJ",
"ag_pvh_women_participant_gt35" => "Participants AG PVH F",	
"expected_ca" => "Nombre de comite d'administration",
"real_ca" => "Nombre de comite d'administration realise",
"pv_ca" => "Nombre de comite d'administration avec PV",		
"ca_men_participant_lt35" => "Participants CA HJ",
"ca_men_participant_gt35" => "Participants CA H",
"ca_women_participant_lt35" => "Participants CA FJ",
"ca_women_participant_gt35" => "Participants CA F",	
"ca_mr_men_participant_lt35" => "Participants CA MR HJ",
"ca_mr_men_participant_gt35" => "Participants CA MR H",
"ca_mr_women_participant_lt35" => "Participants CA MR FJ",
"ca_mr_women_participant_gt35" => "Participants CA MR F",	
"ca_pvh_men_participant_lt35" => "Participants CA PVH HJ",
"ca_pvh_men_participant_gt35" => "Participants CA PVH H",
"ca_pvh_women_participant_lt35" => "Participants CA PVH FJ",
"ca_pvh_women_participant_gt35" => "Participants CA PVH F",
"expected_cs" => "Nombre de conseil de surveillance prevu",
"real_cs" => "Nombre de conseil de surveillance realise",
"pv_cs" => "Nombre de conseil de surveillance avec pv",		
"cs_men_participant_lt35" => "Participants CS HJ",
"cs_men_participant_gt35" => "Participants CS H",
"cs_women_participant_lt35" => "Participants CS FJ",
"cs_women_participant_gt35" => "Participants CS F",
"cs_mr_men_participant_lt35" => "Participants CS MR HJ",
"cs_mr_men_participant_gt35" => "Participants CS MR H",
"cs_mr_women_participant_lt35" => "Participants CS MR FJ",
"cs_mr_women_participant_gt35" => "Participants CS MR F",
"cs_pvh_men_participant_lt35" => "Participants CS PVH HJ",
"cs_pvh_men_participant_gt35" => "Participants CS PVH H",
"cs_pvh_women_participant_lt35" => "Participants CS PVH FJ",
"cs_pvh_women_participant_gt35" => "Participants CS PVH F",
"expected_be" => "Nombre de reunion bureau executif prevu",
"real_be" => "Nombre de reunion bureau executif realise",
"pv_be" => "Nombre de reunion bureau executif avec pv",		
"be_men_participant_lt35" => "Participants BE HJ",
"be_men_participant_gt35" => "Participants BE H",
"be_women_participant_lt35" => "Participants BE FJ",
"be_women_participant_gt35" => "Participants BE F",	
"be_mr_men_participant_lt35" => "Participants BE HJ",
"be_mr_men_participant_gt35" => "Participants BE H",
"be_mr_women_participant_lt35" => "Participants BE FJ",
"be_mr_women_participant_gt35" => "Participants BE F",	
"be_pvh_men_participant_lt35" => "Participants BE HJ",
"be_pvh_men_participant_gt35" => "Participants BE F",
"be_pvh_women_participant_lt35" => "Participants BE FJ",
"be_pvh_women_participant_gt35" => "Participants BE F",
"annual_plan_approved_ag" => "Plan d'action approuve en AG",
"annual_activity_report_approved_ag" => "Rapport d'activite  approuve en AG",
"annual_financial_report_approved_ag" => "Rapport financier approuve en AG",
"process_manual_approved_ca" => "Manuel de procedures approuve par CA",
"water_quantity" => "Quantite d'eau distribuee",
"water_cost_m3" => "Prix du m3 d'eau",
"water_total_cost" => "Cout eau",
"grill_maintenance_cost" => "Cout entretien cloture",
"hole_maintenance_cost" => "Cout entretien puits",
"basin_maintenance_cost" => "Cout entretien bassins",
"solar_maintenance_cost" => "Cout entretien systemes solaires",
"tank_maintenance_cost" => "Cout entretien reservoirs",
"generator_maintenance_cost" => "Cout groupe electrogene",
"irrigation_network_cost" => "Cout entretien reseau d'irrigation",
"building_maintenance_cost" => "Cout entretien Tuyauterie, robinet et compteur",
"agriculture_equipment_maintenance_cost" => "Cout entretien Materiel agricole",
"animal_maintenance_cost" => "Cout entretien Animaux a usage agricole",
"other_maintenance_cost" => "Autres couts d'entretien",
"other_maintenance_cost_description" => "Description autres couts",
"maintenance_cost" => "Cout de maintenance",
"have_management_tool" => "Outils de gestion en place",
"is_management_tool_updated" => "Outils de gestion mis a jour",
"is_parcel_assignation_register_updated" => "Registre d'affectation de parcelles a jour par campagne",
"cash_slip" => "Bordereaux d'encaissement",
"disbursment_slip" => "Bordereau de decaissement",
"disbursment_note" => "Note de frais",
"bank_journal" => "Journal de banque",
"expenses_note" => "Fiche d'engagement de depense",
"invoice_note" => "Quittances de facturation redevances",
"cash_journal" => "Journal de caisse",
"payment_note" => "Fiche de paie (personnel de la cooperative ...)",
"budget" => "Budget",
"resources" => "resources",
"planning_tools" => "Outil de planification",
"membership_amount" => "Montant total des adhesions percues",
"social_part_total_amount" => "Montant parts sociales",
"membership_fees" => "Montant total des cotisations percues",
"membership_royalties" => "Montant des redevances recouvres",
"loan" => "Montant des credits recouvres",
"donations" => "Montant des dons",
"subventions" => "Montant des subventions",
"other_revenues" => "Montant des autres ressources",
"other_revenue_description" => "Description autres ressources",
"partnership_commune" => "Partenariat avec commune",
"maintenance_contract" => "Contrat de maintenance",
"other_partnership" => "Autre partenariat",
"part_of_federation" => "Appartenance federation",
"commune_partner" => "Partenaire commune",
"maintenance_partner" => "Partenaire maintenance",
"other_partner" => "Autre partenaire",
"federation_partner" => "Federation",
"bank_account_id" => "Id Compte Bancaire",
"bank" => "Banque",
"bank_account" => "Compte bancaire",
"credit_request" => "Sollicitation de credit",
"credit_request_ok" => "Obtention de credit",
"credit_id" => "Id credit",
"financial_institution" => "Partenaire financier",
"credit_object" => "Objet du credit",
"credit_amount" => "Montant du credit",
"credit_rate" => "Taux du credit",
"credit_duration" => "Duree du credit",
"credit_repayment_type" => "Type de remboursement",
"credit_repayment_mode" => "Mode de remboursement",
"credit_payment_status" => "Etat des remboursements",
"capacity_building" => "Acces au services non financier",
"support_id" => "Id appui",
"provider" => "Fournisseur",
"other_provider" => "Autre fournisseur",
"other_support" => "Autre appui",
"module" => "Module",
"categorie" => "Categorie",
"type" => "Type",
"trained_instances" => "Instances formes",
"men_beneficiary_lt35" => "Beneficiaire HJ",
"men_beneficiary_gt35" => "Beneficiaire H",
"women_beneficiary_lt35" => "Beneficiaire FJ",
"women_beneficiary_gt35" => "Beneficiaire F",
"mr_men_beneficiary_lt35" => "Beneficiaire HJ",
"mr_men_beneficiary_gt35" => "Beneficiaire H",
"mr_women_beneficiary_lt35" => "Beneficiaire FJ",
"mr_women_beneficiary_gt35" => "Beneficiaire F",
"pvh_men_beneficiary_lt35" => "Beneficiaire HJ",
"pvh_men_beneficiary_gt35" => "Beneficiaire H",
"pvh_women_beneficiary_lt35" => "Beneficiaire FJ",
"pvh_women_beneficiary_gt35" => "Beneficiaire F",
"collect_id" => "Id collect",
]);