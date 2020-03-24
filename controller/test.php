<?php
include '../model/Profil.class.php';
include '../dao/ProfilDAO.class.php';

$profil    = new Profil(null, 'Administrador');
$profilDAO = new ProfilDAO();
$profilDAO->insert($profil);

?>