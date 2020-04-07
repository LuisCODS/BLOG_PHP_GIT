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
			alert(jsonData);
		});
});



//Cette fonction est declenchée dès que le button btnAjouter
//...( from ajouter.php) du modal est appuyé.
$('#btnAjouter').click(()=>    
{	
	// Recoit l'attribute name + sa valeur d'entrée 
	//Ex: ProfilNom=Luis | just call echo (formData);  
	var formData   = $("#formProfilAjouter").serialize();
	// Action qui va traiter la requisition
	var actionType = 'action=insert';

	// ___________________ Requisition ___________________
	$.ajax({
		// Format de l'envois
		method: "POST", 
		// Page qui recoit les données
		url:profilController,
		// Envois à l'action les données du form
		data: actionType+'&'+formData
		// Reponse de l'insertion 
	}).done((msg)=>{
		// Shorthand  IF:
		// "(condition) ? (true return value) : (false return value)"
		var retorno = (msg==true) ? "Enregistré avec sucess!" : msg;	
		$.confirm({
			title: 'Attention!',
			content: retorno,
			buttons: {
				Ok: ()=>{}				
			}
		});
	});
}); 