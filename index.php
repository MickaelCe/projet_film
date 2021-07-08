<?php include "contenu_protégé/model/modelIndex.php";?>
<?php
$url = '';
if(isset($_SERVER['REQUEST_URI'])){
    $url = explode('/', $_SERVER['REQUEST_URI']);
}
switch ($url) {
    case $url[3] == '' || $url[3] == 'index.php':
        include "contenu_protégé/includes/header.php";
        include 'contenu_protégé/vue/vueIndex.php';
        include "contenu_protégé/includes/footer.php";
    break; 
    case $url[3] !== '':
        http_response_code(404);
        include "contenu_protégé/includes/404.html";
    break;
    case $url[4] !== '':
        http_response_code(404);
        include "contenu_protégé/includes/404.html";
    break;
    default:
        http_response_code(404);
        include "contenu_protégé/includes/404.html";
    break;
    }
?>
