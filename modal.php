<?php
include "connexion.php";

$stmt = $pdo->prepare("SELECT films.id_film, films.titre, films.synopsis, sorties.sortie, films.images,
group_concat(DISTINCT genres.genre) as genre,
group_concat(DISTINCT realisateurs.realisateur) as realisateur 

FROM films 

INNER JOIN films_has_genres ON films_has_genres.films_id_film = films.id_film
INNER JOIN genres ON films_has_genres.genres_id_genres = id_genres

INNER JOIN films_has_realisateur ON films_has_realisateur.films_id_film = films.id_film
INNER JOIN realisateurs ON films_has_realisateur.realisateur_id_realisateur = id_realisateur
INNER JOIN sorties ON films.date_id_date_de_sortie = sorties.id_date_de_sortie
WHERE id_film=:id
GROUP BY films.titre, films.synopsis, films.date_id_date_de_sortie, films.id_film, films.images");
$stmt->execute(["id" => $_GET["id"]]);
$movie = $stmt->fetch();
?>


<!-- ------------------------------------------- LOAD MODAL  -->

<div class="modal-overlay" id="<?php echo $movie->id_film; ?>">
    <div class="modal-container">
        <article class="modal-movie">
        <h2><?php echo $movie->titre; ?></h2>
        <h6><?php echo $movie->genre; ?></h6>
        <h3><?php echo $movie->sortie; ?></h3>
        <img src="<?php echo $movie->images; ?>" alt="" />
        <p><?php echo $movie->synopsis; ?></p>
        <h4><?php echo $movie->realisateur; ?></h4>
        <button class="close-btn"><i class="fas fa-times"></i></button>
        </article>
    </div>
</div>

<!-- ------------------------------------------- CLOSE MODAL  -->

<script>
var closeBtn = document.querySelector(".close-btn");
  try {
    closeBtn.addEventListener("click", () => {
      document.querySelector(".modal-section").textContent = "";
    });
  } catch (error) {
    console.log(error);
  }
</script>