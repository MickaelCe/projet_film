<?php include "contenu_protégé/model/pdo.php";

$rowTotal = 0;
$search = "%{$_GET["search"]}%";

if (isset($_GET["search"]) && $_GET["search"] != "") {
    include 'contenu_protégé/model/modelFetch.php';
    
     if ($rowTotal > 0) { 

         foreach ($movies as $movie): 

             include 'contenu_protégé/vue/vueFetch.php';
        
         endforeach; 

    } else { 

            include 'contenu_protégé/vue/vueFetch_2ndPart.php';

    }
}