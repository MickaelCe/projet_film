<?php include "contenu_protege/model/modelIndex.php";?>
<?php
$url = '';
if(isset($_SERVER['REQUEST_URI'])){
    $url = explode('/', $_SERVER['REQUEST_URI']);
}
switch ($url) {
    case $url[3] == '' || $url[3] == 'index.php':
        include 'contenu_protege/controleur/controleurIndex.php';
    break; 
    case $url[3] !== '':
        http_response_code(404);
        include "contenu_protege/includes/404.html";
    break;
    case $url[4] !== '':
        http_response_code(404);
        include "contenu_protege/includes/404.html";
    break;
    case $url[3] !== '' && $url[4] !== '':
        http_response_code(404);
        include "contenu_protege/includes/404.html";
    break;
    default:
        http_response_code(404);
        include "contenu_protege/includes/404.html";
    break;
    }
?>
