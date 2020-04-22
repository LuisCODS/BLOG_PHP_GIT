

// Methode qui retourn 2 champs(proprieté) du Profil.
function lister(txtInput)
{
	//Set la valeur à recuperer par(extract($_POST);) au controlleur(profil.php).
	var actionType = 'action=getProfil';
	//La valeur contenant dans txtInput sera recuperée  
	//...par (extract($_POST);) dans le controlleur (profil.php).
	var champs  = "txtInput="+txtInput;

	//REQUISITION asynchrone 
	$.ajax({
		method:'POST', 
		url: profilController,
		data: actionType+'&'+champs
		//CALLBACK: un array de profil en format json.
	}).done((jsonData)=>{			
		//  REQUISITION asynchrone
		$.ajax({
			method:'POST', 
			url: 'template/table-profil.php',
			//le callback jsonData est envoyée par la variable obj
			data: "obj="+jsonData
		//CALLBACK: tout le contenu du fichier table-profil.php	
		}).done((template)=>{
			//Charge le template, provenant du callback, dans la div 
			//... listTemplate avec son id,  dans (index.php) du profil.
			$("#listTemplate").html(template);
			// declenche dès que le button btnEditer(table-profil.php) est appuyé
			//...ele é pego pela class.
			$('.btnEditer').click(function() 
			{
				//Open the modal windows
				$('.ModalCadastro').modal("show");				 	
				//convert en json l'objet du button
				var obj = JSON.parse($(this).attr("obj") );
				//Show object propertys on form input
				$("#Profil_ID").val(obj.Profil_ID);
				$("#ProfilNom").val(obj.ProfilNom);	
				//Show le boutton Supprimer par son ID: btnSupprimer
				//on javascript sintax:  document.getElementById("btnSupprimer").hidden = false;
				$("#btnSupprimer").css("display", "block");	
				//Ajoute la valeur du title h5 du modal
				$("#ModalTitle").html("Editer Pofil");		
			});

		})
	});
}


function validerTextboxInput()
{
	var reponse = true;
	//pour chaque INPUT qui a la class "estVide"
	$(".estVide").each(function()
	{
		//Si l'input n'est pas vide
		if ($(this).val() != "" ){
			//$(entree).addClass("is-valid");	
	    	reponse = true;
		}else{
			$(this).addClass("is-invalid");
			reponse = false;
		}	
	});
	return reponse;
}

//========================================================================
// Methode qui valide l'entrée de l'utilisateur.
// Si le champs est vide, la couleur autours du textbox est à rouge.
// Outrement, il est à vert.
//========================================================================
function validerTextbox()
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

//========================================================================
// Methode qui 
//========================================================================
function isItEmpty(texte)
{
	if($(texte).val().length >= 0)
	{
		 //console.log($(texte).val().length);//to test
		 $(texte).removeClass("is-invalid"); 
		 $(texte).addClass("is-valid");
	}
}