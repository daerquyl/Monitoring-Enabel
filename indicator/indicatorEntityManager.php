<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/db.php");
require_once($_SERVER['DOCUMENT_ROOT']."/monitoring/commons/entityManager.php");

/*
* LISTE TOUTES LES COLLECTES DE LA CAMPAGNE PASSE EN PARAMETRE
*/
function findAll($table, $campaign_id){
	$query = "SELECT distinct t.*,'".$table ."' as type,". 
				(($table == 'enterprise') ? "''"
										  : "s.name")." as site, 
				c.name as commune, 
				d.name as department,
				r.name as region,
				o.name as ong,
				'Enabel' as project
				FROM ".$table." t, site s, 
				commune c, department d, region r, 
				organization o, puser p
				WHERE ".
				(($table == 'enterprise') 
					? 'c.id = t.commune_id'
					: 's.id = t.site_id')
				." AND c.id = s.commune_id
				AND campaign_id = ".$campaign_id."
				AND d.id = s.department_id
				AND r.id = s.region_id
				AND o.id = p.organization_id
				AND p.id = t.creator_id
				AND t.status = 'SENT'";
				
//	echo "CURRENT  : ".$query."<br /><br />";
	return getEntityQueryBase($query);
}

/*
* LISTE TOUTES LES COLLECTES DE LA CAMPAGNE PRECEDANT CELLE PASSE EN PARAMETRE
*/
function findAllPrevious($table, $campaign_id){
	$query = "SELECT distinct t.*,'".$table ."' as type,". 
				(($table == 'enterprise') ? "''"
										  : "s.name")." as site, 
				c.name as commune,
				d.name as department,
				r.name as region,
				o.name as ong, 
				'Enabel' as project
				FROM ".$table." t, 
				site s, commune c, department d, region r, 
				organization o, puser p
				WHERE ".
				(($table == 'enterprise') 
					? 'c.id = t.commune_id'
					: 's.id = t.site_id')
				." AND c.id = s.commune_id
				AND campaign_id = (select id from campaign where id < ".$campaign_id." order by id desc limit 1)
				AND d.id = s.department_id
				AND r.id = s.region_id
				AND o.id = p.organization_id
				AND p.id = t.creator_id
				AND t.status = 'SENT'";
//	echo "PREVIOUS  : ".$query."<br /><br />";
	return getEntityQueryBase($query);
}

function set_child(&$collect, $table){
	$query = "SELECT *
				FROM ".$table."
				WHERE collect_id = '".$collect['type'].$collect['id']."'";			
	$elements = getEntityQueryBase($query);
	if($elements != null){
		$collect[$table] = $elements;
	}
}

function speculation_total_selled_amount($speculation){
	return $speculation['selled_amount_with_contract'] + $speculation['selled_amount_without_contract'] +
		   $speculation['lost_value'] + $speculation['consumed_value'];
}

function speculation_revenue($collect, $speculation){
	return speculation_total_selled_amount($speculation) - $collect['total_expenses'];
}

function employee_count($collect){
	$count = 0;
	set_child($collect, 'employee');
	
	if(isset($collect['employee'])){
		$employees = $collect['employee'];
		foreach($employees as $employee){
			if($employee['employee_revenue'] >= 500000){
				$count++;
			}
		}
	}

	$manager_case_value = ($collect['manager_revenue'] >= 500000)? 1 : 0;
	return $count + $manager_case_value;
}

function etp_count($collect){
	$count = 0;
	set_child($collect, 'employee');
	if(isset($collect['employee'])){
		$employees = $collect['employee'];
		foreach($employees as $employee){
			$count += ($employee['worked_days'] != 0) 
						? $employee['worked_days'] / 365
						: 0;
		}
	}
	
	$manager_case_value = 1;
	return $count + $manager_case_value;
}

function young_employee_count($collect){
	$count = 0;
	set_child($collect, 'employee');
	if(isset($collect['employee'])){
		$employees = $collect['employee'];
		foreach($employees as $employee){
			if($employee['employee_revenue']>=500000 && $employee['employee_age'] < 35){
				$count++;
			}
		}
	}
	
	$manager_case_value = ((!$collect['is_adult']) && ($collect['manager_revenue'] >= 500000)) 
							? 1
							: 0;
	return $count + $manager_case_value;
}

function young_revenue_total($collect){
	$total = 0;
	set_child($collect, 'employee');
	if(isset($collect['employee'])){
		$employees = $collect['employee'];
		foreach($employees as $employee){
			if($employee['employee_age'] < 35){
				$total += $employee['employee_revenue'];
			}
		}	
	}
	
	$manager_case_value = ((!$collect['is_adult'])) 
							? $collect['manager_revenue']
							: 0;
	return $total + $manager_case_value;
}

function trained_young_total($collect){
	$total = 0;
	set_child($collect, 'employee');
	
	if(isset($collect['employee'])){
		$employees = $collect['employee'];
		foreach($employees as $employee){
			if($employee['employee_age'] < 35 && $employee['employee_trained_by_pareba']){
				$total++;
			}
		}	
	}
	$manager_case_value = ((!$collect['is_adult']) && $collect['trained_by_pareba']) 
					? 1
					: 0;
				
	return $total + $manager_case_value;
}

