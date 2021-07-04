<?php
include "connexion.php";

$rowTotal = 0;
$search = "%{$_GET["search"]}%";

if (isset($_GET["search"]) && $_GET["search"] != "") {
    $stmt = $pdo->prepare(
        "SELECT * FROM movie_infos WHERE titre LIKE :search1 OR realisateur LIKE :search2 OR annee LIKE :search3 OR genre LIKE :search4  LIMIT 5"
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