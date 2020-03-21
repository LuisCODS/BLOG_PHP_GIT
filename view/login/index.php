<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css">     
        <!-- CSS DU MODULE -->
        <link rel="stylesheet" type="text/css" href="css/loginStyle.css"> 
        <title>Blog PHP -Login</title>
  </head>
  <body class="text-center">
        <div class="container">
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
        <!-- Bootstrap js -->
        <script src="../../plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
        <!-- JS DU MODULE-->
        <script type="text/javascript" src="js/loginScript.js"></script> 
        <script type="text/javascript" src="js/loginFunction.js"></script> 
    </body>
</html>