//  ----------------------------------------------------------------------
//  CETTE PAGE EST RESPONSABLE POUR TRAITER LES DONNÉS(DE FACON ASSICRONNE)
// -----------------------------------------------------------------------

// URL:qui va recevoit les données.
var profilController ='../../controller/profil.php';


// Cette fonction est declenchée dès que la page est rechargée.
$(()=>{
		// Action qui sera exectuée pour chaque case du switch
		var actionType = 'action=getProfil';
		//Requisition assicrone pour recuperer les profils
		$.ajax({
			method:'POST', 
			url: profilController,
			data: actionType
		// Reponse de la requisition(callback):
		// jsonData: tableau des profils en format json
		}).done((jsonData)=>{
			//New requisition pour envoyer le tableau json au template 
			$.ajax({
				method: 'POST', 
				url:'template/table-profil.php',
				//doit être passé par une variable
				data: "obj="+jsonData
				// Reponse de la requisition:
				// template: 
			}).done((template)=>{
				alert(template);
			})
		});
});



//Cette fonction est declenchée dès que le button btnAjouter
//...( from ajouter.php) du modal est appuyé.
$('#btnAjouter').click(()=>    
{	
	// Recoit l'attribute name + sa valeur d'entrée 
	//Ex: ProfilNom=Luis | just call echo (formData);  
	var formData   = $("#formProfilAjouter").serialize();
	// Action destinnée
	var actionType = 'action=insert';

	// ___________________ Requisition ___________________
	$.ajax({
		// Format de l'envois
		method: "POST", 
		// Page qui recoit les données
		url:profilController,
		// L'ACTION ET LES DONNÉES DU FORM À ÊTRE RECUPERÉS
		data: actionType+'&'+formData
		// Reponse de la requisition:
		// msg: true/false
	}).done((msg)=>{
		// SHORT IF:
		// Si la requette = true, la variable recoit la string
		//... Sinon elle recoit l'erreur.
		var reponse = (msg==true) ? "Enregistré avec sucess!" : msg		
		$.confirm({
			title: 'Attention!',
			content: reponse,
			buttons: {
				Ok: ()=>{}				
			}
		});
	});
}); 