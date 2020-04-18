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
	test();
});



//========================================================================
//  ZONE DE RECHERCHE: declenchée dès qu'il y a une entrée par le user.
//========================================================================
$('#txtInput').keyup(()=>    
{
	//Get textBox value by ID.
	strRecherchee = $('#txtInput').val();
	// alert(strRecherchee); //To test
	lister(strRecherchee);
});


//========================================================================
// BOUTON (+) :
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
 BOUTON AJOUTER: Cette fonction est declenchée dès que le button btnAjouter
  ...( from ajouter.php) du modal est appuyé.
========================================================================
*/
$('#btnAjouter').click(()=>    
{		
	// Si true
	if(validerChampsVide() )
	{
		//console.log(validerChampsVide()); //to test

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
						$('#ModalCadastro').modal('toggle');//close modal
				         // Recharge la page actuelle à partir du 
				         //... serveur, sans utiliser le cache.		
						location.reload(true);
						// lister(strRecherchee);						 
					}				
				}
			});		   
		});
	}
	//else{ console.log(validerChampsVide()); //to test	}	
}); 


//========================================================================
// 
//========================================================================
function test()
{
	//For eatch INPUT TEXTBOX with class = estVide
	$(".estVide").each(function()
	{
		//When textbox is empty
		$(this).keyup(function()
		{
			if ($(this).val() == "" )
			 {
				$(this).removeClass("is-valid");
				$(this).addClass("is-invalid");								
			}	
		});
	});
}

function isItEmpty(texte)
{
	if($(texte).val().length >= 0)
	{
		console.log($(texte).val().length);//to test
		 $(texte).removeClass("is-invalid"); 
		 $(texte).addClass("is-valid");
	}
}

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


