<?php
include "connexion.php";

$rowTotal = 0;
$search = "%{$_GET["search"]}%";

if (isset($_GET["search"]) && $_GET["search"] != "") {
    $stmt = $pdo->prepare(
        "SELECT films.titre, films.synopsis, sorties.sortie, 
        group_concat(genres.genre) as genre,
        group_concat(DISTINCT realisateurs.realisateur) as realisateur 
        FROM films
        INNER JOIN films_has_genres ON films_has_genres.films_id_film = films.id_film
        INNER JOIN genres ON films_has_genres.genres_id_genres = id_genres

        INNER JOIN films_has_realisateur ON films_has_realisateur.films_id_film = films.id_film
        INNER JOIN realisateurs ON films_has_realisateur.realisateur_id_realisateur = id_realisateur

        INNER JOIN sorties ON films.date_id_date_de_sortie = sorties.id_date_de_sortie
        WHERE titre LIKE :search1 OR realisateur LIKE :search2 OR sorties LIKE :search3 OR genre LIKE :search4  LIMIT 5
        GROUP BY films.titre, films.synopsis, films.date_id_date_de_sortie"
    );
    // Mettre un num pour eviter les erreurs
    $stmt->execute([
        "search1" => $search,
        "search2" => $search,
        "search3" => $search,
        "search4" => $search,
    ]);
    $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $rowTotal = $stmt->rowCount();

    // Afficher la liste si resultat, sinon erreur
    if ($rowTotal > 0) { ?>

        <?php foreach ($movies as $movie): ?>
            <li class="livesearch-item" href="#<?php echo $movie["id"]; ?>">
                <img src="./images/affiche_test.jpg" alt="" />
                <div>
                    <h3><?php echo $movie["titre"]; ?></h3>
                    <h4><?php echo $movie["annee"]; ?></h4>
                </div>
            </li>
        <?php endforeach; ?>

    <?php } else { ?>
        <li class="livesearch-no-results">
                <p class="no-results">Pas de resultats</p>
        </li>
    <?php }
}
?>

<!-- Script pour afficher le modal on click -->
<script>
var modalBtns = document.querySelectorAll(".livesearch-item");
modalBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    // slice pour retirer le #
    id = e.currentTarget.getAttribute("href").slice(1);
    loadModal();
  });
});
</script>