<?php include "contenu_protege/pdo/connexion.php";

$rowTotal = 0;
$search = "%{$_GET["search"]}%";

if (isset($_GET["search"]) && $_GET["search"] != "") {
    include 'contenu_protege/model/modelFetch.php';
    
     if ($rowTotal > 0) { 

         foreach ($movies as $movie): 

             include 'contenu_protege/vue/vueFetch.php';
        
         endforeach; 

    } else { 

            include 'contenu_protege/vue/vueFetch_2ndPart.php';

    }
}