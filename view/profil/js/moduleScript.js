//  ----------------------------------------------------------
//  CE MODULE EST RESPONSABLE POUR TRAITER LES 
//  DONNÉS(DE FACON ASSICRONNE)PROVENANT DU FICHIER ajouter.php
// ----------------------------------------------------------

// URL:PAGE QUI VA RECEVOIT LA REQUISITION 
var profilController ='../../controller/profil.php';

// $(()=>{
// 	alert("TESTE");
// });

// $(function(){
// 	alert("TESTE");
//  });

//Cette fonction est declenchée dès que le button
//...(btnAjouter from ajouter.php) du modal est pesé.
$('#btnAjouter').click(()=>    
{	
	// Recoit tous les champs du formulaire  serialisés
	var formData   = $("#formProfilAjouter").serialize();

	//echo (formData);

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
		$.confirm({
			title: 'Attention!',
			content: msg,
			buttons: {
				Ok: ()=>{}				
			}
		});
	});
});