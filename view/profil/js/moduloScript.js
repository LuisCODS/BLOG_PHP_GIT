<<<<<<< HEAD
//  ----------------------------------------------------------
//  CE MODULE EST RESPONSABLE POUR TRAITER LES 
//  DONNÉS(DE FACON ASSICRONNE)PROVENANT DU FICHIER ajouter.php
// ----------------------------------------------------------


// GET OBJET(BUTTON) OF THE DOM TO EXECUTE THE FUNCTION
//  (btnAjouter from ajouter.php)
$('#btnAjouter').click(function()
{
	// URL:PAGE QUI RECOIT LA REQUISITION 
	var profilController ='../../controller/profil.php';
	// GET ALL FORM DATE
	var formData   = $("#formProfilAjouter").serialize();
	var actionType = 'action=insert';// LE TYPE D'ACTION
	//alert(formData);
	$.ajax({
		// METODO DE L'ENVOIS DU FORM
		method: "POST", 
		// PAGE OÙ SERA ENVOYÉ LES DONNÉS 
		url:profilController,
		// L'ACTION ET LES DONNÉES À ÊTRE ENVOYÉS
		data: actionType+'&'+formData

	// EXIBE ALGO QUANDO TERMINAD0
	}).done(function(msg){
		//var msnRetorno;
		alert(msg);
		// if(msg==true){
		// 	msnSucess = "Enregistré avec sucess!";
		// }else{
		// 	msnSucess = msg;
		// }		
		// var msnRetorno = (msg==true) ? "Enregistré avec sucess!" : msg;
		// $.confim({
		// 	title:'Attention',
		// 	content: msnRetorno,
		// 	buttons: {
		// 		Ok: ()=>{}

		// 		}
		// });
	  });
});




=======
// Alcanca os objetos no HTML (butao ajouter du modal)
$('#btnAjouter')
>>>>>>> parent of 18bfef9... Projeto Completo PHP 28
