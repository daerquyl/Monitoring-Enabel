
	$(document).ready(function(){
		var idfStart, idfEnd;
		initForms();
		
		//Initilialize les differents composantes du formulaire
		function initForms(){
			//Initialisation debut et fin des partitions du formulaire
			setformPart($(".record-card").get(0));		
			//Affiche la premiere partie du formulaire
			showFieldset(1);
			//Mettre a jour le titre de la premiere partie du formulaire
			setTitle(1);

			//Handler pour le bouton suivant
			$(".next").on("click",function(e){
				e.preventDefault();
				var next = parseInt($(".record-card fieldset.active").attr("id")) + 1;
				//Affiche la partie suivante
				showFieldset(next);
				//Mettre a jour le titre du formulaire
				setTitle(next);
			});
			//Handler pour le bouton precedent
			$(".previous").on("click",function(e){
				e.preventDefault();
				var previous = parseInt($(".record-card fieldset.active").attr("id")) - 1;
				//Affiche la partie suivante
				showFieldset(previous);
				//Mettre a jour le titre du formulaire
				setTitle(previous);
			});
		}
		
		//Identifie le nombre de partie du formulaire (Debut - Fin)
		function setformPart(ref){
			idfStart = parseInt($(ref).attr("data-minPart"));
			idfEnd = parseInt($(ref).attr("data-maxPart"));
		}
		
		//Met a jour le titre de la partie courante du formulaire
		function setTitle(idf){
			var title;
			var formId = $(".record-card").attr("id").replace("-form", "");
			if(formId == "perimeter"){
				title = "Perimetre - "+getFieldsetDescForPerimeter(idf);
			}
			if(formId == "enterprise"){
				title = "Entreprise - "+getFieldsetDescForEnterprise(idf);
			}
			if(formId == "exploitation"){
				title = "Exploitation - "+getFieldsetDescForExploitation(idf);
			}
			if(formId == "cooperative"){
				title = "Organisation - "+getFieldsetDescForCooperative(idf);
			}
			$(".record-card .modal-title").text(title);
		}
		
		//Affiche une partie du formulaire en fonction du numero de la partie
		function showFieldset(idf){
			$(".record-card fieldset").hide();
			$(".record-card fieldset#"+idf).show();
			$(".record-card fieldset").removeClass("active");
			$(".record-card fieldset#"+idf).addClass("active");

			$(".record-card .previous").hide();
			$(".record-card .end").hide();
			$(".record-card .next").hide();

			if((idf == idfStart) || (idf != idfStart && idf != idfEnd))
				$(".record-card .next").show();
			if((idf == idfEnd)  || (idf != idfStart && idf != idfEnd))
				$(".record-card .previous").show();	
			if(idf == idfEnd){
				$(".record-card .next").hide();
				$(".record-card .previous").show();	
				$(".record-card .end").show();
			}
		}
		
		function getFieldsetDescForPerimeter(idf){
			switch(idf){
			case 1 : 
				return "Identification du site";
			case 2 : 
				return "Amenagements hydroagricoles";
			case 3 : 
				return "Details de l'exploitation - 1";
			case 4 : 
				return "Details de l'exploitation - 2";
			case 5 : 
				return "Etat infrastructure - 1";
			case 6 : 
				return "Etat infrastructure - 2";
			case 7 : 
				return "Couts entretien & maintenance";
			}
		}
		
		//Retourne les titres des differentes parties pour la fiche perimeter
		function getFieldsetDescForCooperative(idf){
			switch(idf){
			case 1 : 
				return "Localisation geograpique";
			case 2 : 
				return "Identification";
			case 3 : 
				return "Comptes bancaires";
			case 4 : 
				return "Membres";
			case 5 : 
				return "Membres CS / BE";
			case 6 : 
				return "Membres CSP / CD";
			case 7 : 
				return "Informations sur les employes";
			case 8 : 
				return "Gouvernance AG / CA";
			case 9 : 
				return "Gouvernance CS / BE";
			case 10 : 
				return "Gouvernance controle";
			case 11 : 
				return "Activites / Entretiens";
			case 12 : 
				return "Outils de gestion";
			case 13 : 
				return "Gestion financiere";
			case 14 : 
				return "Acces aux services financiers";
			case 15 : 
				return "Acces aux services non financiers";
			case 16 : 
				return "Partenariats";
			}
		}
		
		function getFieldsetDescForEnterprise(idf){
			switch(idf){
			case 1 : 
				return "Localisation geograpique";
			case 2 : 
				return "Identification entreprise";
			case 3 : 
				return "Actionnariat";
			case 4 : 
				return "Informations sur les employes";
			case 5 : 
				return "Compte d'exploitation";
			case 6 : 
				return "Acces aux services financiers";
			case 7 : 
				return "Acces aux services non financiers";
			}
		}
		
		function getFieldsetDescForExploitation(idf){
			switch(idf){
			case 1 : 
				return "Localisation geograpique";
			case 2 : 
				return "Identification du producteur";
			case 3 : 
				return "Compte d'exploitation de la parcelle par campagne";
			case 4 : 
				return "Suivi recoltes et commercialisation";
			case 5 : 
				return "Informations sur les employes";
			case 6 : 
				return "Acces aux services financiers";
			case 7 : 
				return "Acces aux services non financiers";
			}
		}

	});
	