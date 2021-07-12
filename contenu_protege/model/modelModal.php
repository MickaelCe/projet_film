<?php include "contenu_protege/pdo/connexion.php";?>
<?php

$stmt = $pdo->prepare("SELECT films.id_film, films.titre, films.synopsis, sorties.sortie, films.images,
group_concat(DISTINCT genres.genre) as genre,
group_concat(DISTINCT realisateurs.realisateur) as realisateur 

FROM films 

INNER JOIN films_has_genres ON films_has_genres.films_id_film = films.id_film
INNER JOIN genres ON films_has_genres.genres_id_genres = id_genres

INNER JOIN films_has_realisateur ON films_has_realisateur.films_id_film = films.id_film
INNER JOIN realisateurs ON films_has_realisateur.realisateur_id_realisateur = id_realisateur
INNER JOIN sorties ON films.date_id_date_de_sortie = sorties.id_date_de_sortie
GROUP BY films.titre, films.synopsis, films.date_id_date_de_sortie, films.id_film, films.images");

$stmt ->execute();
$totalmovie = $stmt->rowCount();
$getid =  $_GET["id"];

if ( $getid > 0 && $getid <= $totalmovie){
    $stmt = $pdo->prepare("SELECT films.id_film, films.titre, films.synopsis, sorties.sortie, films.images,
    group_concat(DISTINCT genres.genre SEPARATOR ' ' ) as genre,
    group_concat(DISTINCT realisateurs.realisateur SEPARATOR ' ' ) as realisateur 
    
    FROM films 
    
    INNER JOIN films_has_genres ON films_has_genres.films_id_film = films.id_film
    INNER JOIN genres ON films_has_genres.genres_id_genres = id_genres
    
    INNER JOIN films_has_realisateur ON films_has_realisateur.films_id_film = films.id_film
    INNER JOIN realisateurs ON films_has_realisateur.realisateur_id_realisateur = id_realisateur

    INNER JOIN sorties ON films.date_id_date_de_sortie = sorties.id_date_de_sortie
    WHERE id_film=:id
    GROUP BY films.titre, films.synopsis, films.date_id_date_de_sortie, films.id_film, films.images");
    
    $stmt->execute(["id" => $getid]);
    $movie = $stmt->fetch(); 
}
else{
    header('Location: http://localhost/projet_13_film/projet_film/');
    exit();
}



?>