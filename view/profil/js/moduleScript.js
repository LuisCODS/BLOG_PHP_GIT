//  ----------------------------------------------------------
//  CE MODULE EST RESPONSABLE POUR TRAITER LES 
//  DONNÉS(DE FACON ASSICRONNE)PROVENANT DU FICHIER ajouter.php
// ----------------------------------------------------------

// URL:PAGE QUI RECOIT LA REQUISITION 
var profilController ='../../controller/profil.php';


// GET DOM OBJET by id (btnAjouter from ajouter.php)
$('#btnAjouter').click(()=>    
{
	// GET ALL FORM DATE BY ATTRIBUT ID, LIKE: ProfilNom=luis
	var formData   = $("#formProfilAjouter").serialize();
	// LE TYPE D'ACTION
	var actionType = 'action=insert';

	$.ajax({
		// METODO DE L'ENVOIS DU FORM
		method: "POST", 
		// PAGE OÙ SERA ENVOYÉ LES DONNÉS 
		url:profilController,
		// L'ACTION ET LES DONNÉES DU FORM À ÊTRE RECUPERÉS
		data: actionType+'&'+formData
	}).done((msg)=>{
		alert(msg);
	});
});