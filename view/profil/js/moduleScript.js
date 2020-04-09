//  ------------------------------------------------------------------
//  PAGE  RESPONSABLE POUR ELABORER LES REQUISITIONS AJAX ASYNCHRONES.
// -------------------------------------------------------------------

// Var global: URL qui va recevoit les données.
var profilController ='../../controller/profil.php';



//========================================================================
//  Cette fonction est declenchée dès que la page est rechargée.
//========================================================================
$(()=>{
		var actionType = 'action=getProfil';

		//  REQUISITION asynchrone 
		$.ajax({
			method:'POST', 
			url: profilController,
			data: actionType
			//CALLBACK: un array json du profil
		}).done((jsonData)=>{			
			//  REQUISITION asynchrone
			$.ajax({
				method:'POST', 
				url: 'template/table-profil.php',
				//le callback jsonData est envoyée par la variable obj
				data: "obj="+jsonData
			//CALLBACK: tout le contenu du fichier table-profil.php	
			}).done((template)=>{
				// Charge le template dans la div de l'index.php du profil
				$("#listTemplate").html(template);
				// declenche dès que le button btnEditer(table-profil.php) est appuyé
				$('.btnEditer').click(function() 
				{
					//Open the modal windows
					$('.ModalCadastro').modal("show");				 	
					//convert en json l'attribut du button
					var obj = JSON.parse($(this).attr("obj") );
					//Pega as propriedade do objeto
					$("#Profil_ID").val(obj.Profil_ID);
					$("#ProfilNom").val(obj.ProfilNom);					
				});

			})
		});
});


//========================================================================
//   Cette fonction est declenchée dès que le button btnPlus
//   ...( from index.php)  est appuyé.
//========================================================================
$('#btnPlus').click(()=>    
{
	//Open the modal windows
	$('.ModalCadastro').modal("show");	
	//Clean input from form
	$("#Profil_ID").val("");
	$("#ProfilNom").val("");
	//data-toggle="modal" data-target=".ModalCadastro"
});




//========================================================================
//   Cette fonction est declenchée dès que le button btnAjouter
//   ...( from ajouter.php) du modal est appuyé.
//========================================================================
$('#btnAjouter').click(()=>    
{	 

	var isFildVide = document.getElementById("ProfilNom").value;

	if (isFildVide != "") 
	{
		//get all inputs from form 
		var champs   = $("#formProfilAjouter").serialize();
		//Get ID from input
		var Profil_ID = $("#Profil_ID").value;	
		//Si le champ est vide, action = insert, sinon action = update
		var actionType = (Profil_ID == "") ?'action=insert' : 'action=update';

		//  REQUISITION asynchrone 
		$.ajax({
			method: "POST", 
			url:profilController,
			data: actionType+'&'+champs
			//CALLBACK: un tableau json de profil
			}).done((msg)=>
			{
				var reponse = (msg!=null) ? "Enregistré avec sucess!" : msg;
				//Windos popup	
				$.confirm({
					title: 'Attention!',
					content: reponse,
					buttons: {
						Ok: ()=>{}				
					}
				});
			});
	}else{
		alert("Champ vide! ");
	}


}); 


