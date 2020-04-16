//  ------------------------------------------------------------------
//  PAGE  RESPONSABLE POUR ELABORER LES REQUISITIONS AJAX ASYNCHRONES.
// -------------------------------------------------------------------

//  PORTÉE GLOBAL 
var profilController ='../../controller/profil.php';
var strRecherchee = "";


//========================================================================
// Cette fonction est declenchée dès que la page est chargée.
//========================================================================
$(()=>{
	// Appel le fichier moduleFunction.js
	lister(strRecherchee);
});


//========================================================================
//  ZONE DE RECHERCHE: declenchée dès qu'il y a une entrée dans InputBusca.
//========================================================================
$('#txtInput').keyup(()=>    
{
	//Get textBox value by ID.
	strRecherchee = $('#txtInput').val();
	// alert(strRecherchee); //To test
	lister(strRecherchee);
});


//========================================================================
// Bouton pour ajouter un nouveau Profil. Cette fonction est declenchée 
// ... dès que le button btnPlus from index.php est appuyé.
//========================================================================
$('#btnPlus').click(()=>    
{
	//Open the modal windows
	$('.ModalCadastro').modal("show");	

	//Cache le boutton Supprimer par son ID: btnSupprimer
	//on javascript sintax:  document.getElementById("btnSupprimer").hidden = true;
	$("#btnSupprimer").css("display", "none");
	//Ajoute la valeur du title h5 du modal
	$("#ModalTitle").html("Nouveau Pofil");

	//Clean input from form
	$("#Profil_ID").val("");
	$("#ProfilNom").val("");
});


/*
========================================================================
 Cette fonction est declenchée dès que le button btnAjouter
  ...( from ajouter.php) du modal est appuyé.
========================================================================
*/
$('#btnAjouter').click(()=>    
{	
	var inputFild = document.getElementById("ProfilNom").value;

	if (inputFild != "") 
	{
		//get all form inputs  
		var champs   = $("#formProfilAjouter").serialize();
		//Get ID from profil
		var Profil_ID = $("#Profil_ID").val();	
		//Si le champ est vide, action = insert, sinon action = update
		var actionType = (Profil_ID=="") ?'action=insert' : 'action=update';
		//console.log(actionType); //to test!

		// REQUISITION asynchrone 
		$.ajax({
			method: "POST", 
			url:profilController,
			data: actionType+'&'+champs
			//CALLBACK: Si l'insertion ou update a été fait, msg = 1
			}).done((msg)=>	{
				var reponse = (msg == 1) ? "Enregistré avec sucess!" : msg;
				//console.log(msg); to test

				//Windos popup	
				$.confirm({
					title: 'Attention!',
					content: reponse,
					buttons: {
						Ok: ()=>{
					         // Recharge la page actuelle à partir du 
					         //... serveur, sans utiliser le cache.
							 location.reload(true);
						}				
					}
				});		   
			});
	}else{
		alert("Champ vide!");
	}
}); 


//========================================================================
//   Cette fonction est declenchée dès que le button btnSupprimer
//   ...( from ajouter.php) du modal est appuyé.
//========================================================================
$('#btnSupprimer').click(()=>    
{	
	//get all inputs from form (Profil_ID et ProfilNom )
	var champs   = $("#formProfilAjouter").serialize();
	var actionType = 'action=delete';

	// REQUISITION asynchrone 
	$.ajax({
		method: "POST", 
		url:profilController,
		data: actionType+'&'+champs
		
		}).done((callBack)=>
		{
			var reponse = (callBack == 1) ? "Supprimé avec sucess!" : callBack;
			//Windos popup du plugin	
			$.confirm({
				title: 'Attention!',
				content: reponse,
				buttons: {
					Ok: ()=>{
				         // Recharge la page actuelle à partir du 
				         //... serveur, sans utiliser le cache.
						 location.reload(true);
					}				
				}
			});
		});
}); 


