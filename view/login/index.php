<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="../../plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css"><!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../plugins/icons/fontawesome-free-5.12.1-web/css/all.css"><!-- Pour les Icons -->
        <link rel="stylesheet" type="text/css" href="css/loginStyle.css"><!-- CSS DU MODULE -->       
        <title>Blog PHP -Login</title>
  </head>
  <body class="text-center">
        <div class="container">
               <div class="iconeBlog">
                   <i class="fas fa-glasses"></i>
               </div> 
               <h1 class="mb-4">Blog PHP</h1>            
               <form>
                    <input type="text" placeholder="Nom utilisateur" name="UtilisateurNickName" id="UtilisateurNickName" class="form-control mb-4">       
                    <input type="password" placeholder="Mot de passe" class="form-control mb-4" id="UtilisateurMDP">
                    <button type="button" id="btnLogin" 
                            class="form-control btn btn-primary"  
                            onclick="callRedirection()" >
                            Login
                    </button> 
              </form> 
        </div> 
        <script src="../../plugins/jquery-3.4.1.min.js/"></script>
        <script src="../../plugins/popper.min.js"></script>        
        <script src="../../plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script><!-- Bootstrap js -->        
        <script type="text/javascript" src="js/loginScript.js"></script> <!-- JS DU MODULE-->
    </body>
</html>