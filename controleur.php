<?php
require('modele.php');


if(isset($_POST['s']) AND !empty($_POST['s'])){
    echo JSON_encode($test);
    
}
else{
    echo 'Erreur';
}



