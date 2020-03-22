<!-- XXXXXXXXXX  HEAD - LAYOUT  XXXXXXXXXX-->
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
    
    <!--  ---------------------------- NAVBAR ---------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5" >          

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../principal/index.php"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Gestion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../utilisateur/index.php">Utilisateur</a>
                        <a class="dropdown-item" href="../profil/index.php">Profil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../post/index.php">Post</a>
                        <a class="dropdown-item" href="../categorie/index.php">Categorie</a>
                    </div>
                </li>
            </ul>
            <a href="../../view/login/index.php"><i class="fas fa-sign-out-alt"></i>Quitter</a>
        </div>
    </nav> 