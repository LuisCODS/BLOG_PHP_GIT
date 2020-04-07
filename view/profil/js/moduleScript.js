//  ----------------------------------------------------------------------
//  PAGE  RESPONSABLE POUR TRAITER LES DONNÉS(DE FACON ASSICRONNE)
// -----------------------------------------------------------------------

// URL:qui va recevoit les données.
var profilController ='../../controller/profil.php';


// Cette fonction est declenchée dès que la page est rechargée.
$(()=>{
		var actionType = 'action=getProfil';
		$.ajax({
			method:'POST', 
			url: profilController,
			data: actionType
		}).done((jsonData)=>{
			//alert(jsonData);
			$.ajax({
				method:'POST', 
				url: 'template/table-profil.php',
				data: "obj="+jsonData
			}).done((template)=>{
				alert(template);
			})
		});
});

//Cette fonction est declenchée dès que le button btnAjouter
//...( from ajouter.php) du modal est appuyé.
$('#btnAjouter').click(()=>    
{	 
	var formData   = $("#formProfilAjouter").serialize();
	var actionType = 'action=insert';

	// ___________________ Requisition ___________________
	$.ajax({
		method: "POST", 
		url:profilController,
		data: actionType+'&'+formData
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