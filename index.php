<?php
require "config.php";
require 'lib/connection.php';

$connection=connection();
require 'views/header.php';
require 'views/nav.php';
if($connection){
    echo '<div class="success">connection réussie</div>';
}else{
    echo('<div class="error">échec de la tentative de connexion</div>');
}
require 'views/footer.php';