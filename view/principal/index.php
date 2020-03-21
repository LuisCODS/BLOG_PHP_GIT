<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <link rel="stylesheet" href="../../plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css">  <!-- Bootstrap CSS --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- Dropdowns --> 
        <link rel="stylesheet" href="../../plugins/fontawesome-free-5.12.1-web/css/all.css"><!-- Pour le Icon -->        
        <link rel="stylesheet" type="text/css" href="css/loginStyle.css"><!-- CSS DU MODULE --> 
        <title>Blog PHP -Login</title>
  </head>
  <body> <!--essa classe alinha o texto no centro class="text-center" -->
        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX    NAVBAR    XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5" >            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Utilisateur</a>
                            <a class="dropdown-item" href="#">Profil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Post</a>
                            <a class="dropdown-item" href="#">Categorie</a>
                        </div>
                    </li>
                </ul>
                <a href="#"><i class="fas fa-sign-out-alt"></i>Quitter</a>
            </div>            
        </nav> 
        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
        <div class="container">
          <div class="jumbotron">
              <h1 class="display-4">Bienvenu au Blog</h1>
              <p class="lead">Page d'administration.</p>
              <hr class="my-4">
              <p>Le menu en haut vous permet de gerer votre blog.</p>
         </div>
        </div>
        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
        <script src="../../plugins/jquery-3.4.1.min.js/"></script>
        <script src="../../plugins/popper.min.js"></script>        
        <script src="../../plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script><!-- Bootstrap js -->  
        <script type="text/javascript" src="js/loginScript.js"></script><!-- JS DU MODULE--> 
        <script type="text/javascript" src="js/loginFunction.js"></script> 
    </body>
</html>