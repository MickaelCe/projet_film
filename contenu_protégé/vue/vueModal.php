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