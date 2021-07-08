    <!--------------------------------------------- HERO -->
    <section class="hero-section">
      <div id="container">
        <div class="vignette"></div>
        <ul id="slides">
          <li class="slide">
            <div class="slide-partial slide-left">
              <img src="contenu_protégé/assets/images/cinema_left.png" />
            </div>
            <div class="slide-partial slide-right">
              <img src="contenu_protégé/assets/images/cinema_right.png" />
            </div>
            <h2 class="title">
              <span class="title-text"
                >Projet <span class="gold">F</span>, le site qui va vous faire
                redécouvrir le cinéma.</span
              >
            </h2>
          </li>
          <li class="slide">
            <div class="slide-partial slide-left">
              <img src="contenu_protégé/assets/images/titanic_left.png" />
            </div>
            <div class="slide-partial slide-right">
              <img src="contenu_protégé/assets/images/titanic_right.png" />
            </div>
            <h2 class="title">
              <span class="title-text"
                >"Trois consonnes, quatre voyelles et un seul sens : PROJET
                <span class="gold">F</span>."
                <p>[ James Cameron - Titanic ]</p></span
              >
            </h2>
          </li>
          <li class="slide">
            <div class="slide-partial slide-left">
              <img src="contenu_protégé/assets/images/clint_eastwood_left.png" />
            </div>
            <div class="slide-partial slide-right">
              <img src="contenu_protégé/assets/images/clint_eastwood_right.png" />
            </div>
            <h2 class="title">
              <span class="title-text"
                >"Tu vois, le monde se divise en deux catégories: PROJET
                <span class="gold">F</span>"
                <p>
                  [ Clint Eastwood - Le bon, la brute et le truand, de Sergio
                  Leone ]
                </p></span
              >
            </h2>
          </li>
          <li class="slide">
            <div class="slide-partial slide-left">
              <img src="contenu_protégé/assets/images/la_cite_de_la_peur_left.png" />
            </div>
            <div class="slide-partial slide-right">
              <img src="contenu_protégé/assets/images/la_cite_de_la_peur_right.png" />
            </div>
            <h2 class="title">
              <span class="title-text"
                >"-Vous voulez un whisky ?<br />
                -PROJET <span class="gold">F</span>.<br />
                -Vous ne voulez pas un whisky d’abord ?
                <p>
                  [ Gérard Darmon et Chantal Aubry - La cité de la peur, d’Alain
                  Berbérian ]
                </p></span
              >
            </h2>
          </li>
        </ul>
        <ul id="slide-select">
          <li class="selector"></li>
          <li class="selector"></li>
          <li class="selector"></li>
          <li class="selector"></li>
        </ul>
      </div>
    </section>

    <!--------------------------------------------- CATEGORIE -->

    <section class="categorie-section">
      <!--------------------------------------------- CATEGORIE 1 -->
      <article class="categorie-article">
        <h2 data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          COMÉDIE
        </h2>

        <!--------------------------------------------- SLICK SLIDER -->
        <div
          class="categorie-slider"
          data-aos="fade-up"
          data-aos-duration="500"
          data-aos-once="true"
        >

        <?php foreach ($movies as $movie): ?>
          <li class="movie-item" href="#<?php echo $movie["id_film"]; ?>">
            <img
              class="movie-item-affiche"
              src="<?php echo $movie["images"]; ?>"
              alt=""
            />
            <div class="movie-item-infos">
              <h3><?php echo $movie["titre"]; ?></h3>
            </div>
          </li>
        <?php endforeach; ?>
          
        </div>
      </article>
      <!--------------------------------------------- CATEGORIE 2 -->
      <article class="categorie-article">
        <h2 data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          DRAME
        </h2>

        <!--------------------------------------------- SLICK SLIDER -->
        <div
          class="categorie-slider"
          data-aos="fade-up"
          data-aos-duration="500"
          data-aos-once="true"
        >

        <?php foreach ($movies2 as $movie): ?>
          <li class="movie-item" href="#<?php echo $movie["id_film"]; ?>">
            <img
              class="movie-item-affiche"
              src="<?php echo $movie["images"]; ?>"
              alt=""
            />
            <div class="movie-item-infos">
              <h3><?php echo $movie["titre"]; ?></h3>
            </div>
          </li>
        <?php endforeach; ?>
          
        </div>
      </article>
      <!--------------------------------------------- CATEGORIE 3 -->
      <article class="categorie-article">
        <h2 data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
          ANIMATION
        </h2>

        <!--------------------------------------------- SLICK SLIDER -->
        <div
          class="categorie-slider"
          data-aos="fade-up"
          data-aos-duration="500"
          data-aos-once="true"
        >

        <?php foreach ($movies3 as $movie): ?>
          <li class="movie-item" href="#<?php echo $movie["id_film"]; ?>">
            <img
              class="movie-item-affiche"
              src="<?php echo $movie["images"]; ?>"
              alt=""
            />
            <div class="movie-item-infos">
              <h3><?php echo $movie["titre"]; ?></h3>
            </div>
          </li>
        <?php endforeach; ?>
          
        </div>
      </article>
    </section>

    <!--------------------------------------------- MODAL -->

    <section class="modal-section"></section>
