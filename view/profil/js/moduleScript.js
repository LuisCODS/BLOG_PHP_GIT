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
					$('.ModalCadastro').modal("show");				 	
					//convert en json l'attribut du button
					var obj = JSON.parse($(this).attr("obj") );
					$("#ProfilNom").val(obj.ProfilNom);
				});

			})
		});
});


//========================================================================
//   Cette fonction est declenchée dès que le button btnAjouter
//   ...( from ajouter.php) du modal est appuyé.
//========================================================================
$('#btnAjouter').click(()=>    
{	 
	var formData   = $("#formProfilAjouter").serialize();
	var actionType = 'action=insert';

	//  REQUISITION asynchrone 
	$.ajax({
		method: "POST", 
		url:profilController,
		data: actionType+'&'+formData
		//CALLBACK: un tableau json de profil
		}).done((msg)=>
		{
			var reponse = (msg!=null) ? "Enregistré avec sucess!" : msg;	
			$.confirm({
				title: 'Attention!',
				content: reponse,
				buttons: {
					Ok: ()=>{}				
				}
			});
		});
}); 


