<?php include_once 'includes/header.php' ?>

<?php
var_dump($_SERVER);

$url = '';
if(isset($_SERVER['REQUEST_URI'])){
    $url = explode('/', $_SERVER['REQUEST_URI']);
}

var_dump($url);

// if($url == ''){
//     echo 'Home page';
// } elseif($url[0] == 'film' AND !empty($url[1])){
//     echo 'Film numéro '.$url[1];
// }else {
//     http_response_code(404);
//     echo '404';
// }

switch ($url) {
    case $url[2] == '':   
        echo 'Home page';
    break;    
    case $url[2] == 'film' AND !empty($url[3]):
        echo 'Film numéro '.$url[3];
    break;
    case $url[2] == 'film':
        echo 'LA page des films';
    break;
    default:
    http_response_code(404);
    echo "404";
    break;
    }

?>






<?php include_once 'includes/footer.php' ?>