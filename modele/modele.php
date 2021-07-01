<?php
include_once 'pdo.php'
?>
<?php
$search = $_POST['s'];
$sth = $filmdb->prepare("SELECT films.titre, films.synopsis, films.date_id_date_de_sortie , 
group_concat(genres.genre) as genre
FROM  films  
INNER JOIN films_has_genres ON films_has_genres.films_id_film = films.id_film
INNER JOIN genres ON films_has_genres.genres_id_genres = id_genres
WHERE titre LIKE '%$search%'
GROUP BY films.titre, films.synopsis, films.date_id_date_de_sortie
");
$sth->execute();


$test = $sth->fetchAll(PDO::FETCH_NUM);
// echo JSON_encode($test);

