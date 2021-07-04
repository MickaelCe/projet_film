<?php
include "connexion.php";

$stmt = $pdo->prepare("SELECT * FROM movie_infos WHERE id=:id");
$stmt->execute(["id" => $_GET["id"]]);
$movie = $stmt->fetch();
?>


<!-- ------------------------------------------- LOAD MODAL  -->

<div class="modal-overlay" id="<?php echo $movie->id; ?>">
    <div class="modal-container">
        <article class="modal-movie">
        <h2><?php echo $movie->titre; ?></h2>
        <h3><?php echo $movie->annee; ?></h3>
        <img src="./images/affiche_test.jpg" alt="" />
        <p><?php echo $movie->description; ?></p>
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