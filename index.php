<?php
include "connexion.php";

$stmt = $pdo->prepare("SELECT * FROM movie_infos WHERE genre LIKE :genre");
$stmt->execute(["genre" => "%comedie%"]);
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROJET F</title>
    <link rel="shortcut icon" type="" href="" />
    <link rel="stylesheet" href="style.css" />

    <!--------------------------------------------- SLICK SLIDER -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./slick-1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="./slick-1.8.1/slick/slick-theme.css"
    />

    <!--------------------------------------------- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!--------------------------------------------- FONT AWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
  </head>
  <body>
    <!--------------------------------------------- NAV -->

    <nav class="nav">
      <div class="logo">
        <h1>PROJET <span class="gold">F</span></h1>
      </div>
      <input class="search" name="search_text" id="search_text" placeholder="Chercher un film..." autocomplete="off"/>
    </nav>
    <!--------------------------------------------- LIVESEARCH -->

    <section class="livesearch-section"></section>

    <!--------------------------------------------- HERO -->
    <section class="hero-section">
      <div id="container">
        <div class="vignette"></div>
        <ul id="slides">
          <li class="slide">
            <div class="slide-partial slide-left">
              <img src="./images/cinema_left.png" />
            </div>
            <div class="slide-partial slide-right">
              <img src="./images/cinema_right.png" />
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
              <img src="./images/titanic_left.png" />
            </div>
            <div class="slide-partial slide-right">
              <img src="./images/titanic_right.png" />
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
              <img src="./images/clint_eastwood_left.png" />
            </div>
            <div class="slide-partial slide-right">
              <img src="./images/clint_eastwood_right.png" />
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
              <img src="./images/la_cite_de_la_peur_left.png" />
            </div>
            <div class="slide-partial slide-right">
              <img src="./images/la_cite_de_la_peur_right.png" />
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
          <li class="movie-item" href="#<?php echo $movie["id"]; ?>">
            <img
              class="movie-item-affiche"
              src="./images/affiche_test.jpg"
              alt=""
            />
            <div class="movie-item-infos">
              <h3><?php echo $movie["titre"]; ?></h3>
            </div>
          </li>
        <?php endforeach; ?>
          
        </div>
      </article>
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
          <li class="movie-item" href="#<?php echo $movie["id"]; ?>">
            <img
              class="movie-item-affiche"
              src="./images/affiche_test2.jpg"
              alt=""
            />
            <div class="movie-item-infos">
              <h3><?php echo $movie["titre"]; ?></h3>
            </div>
          </li>
        <?php endforeach; ?>
          
        </div>
      </article>
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
          <li class="movie-item" href="#<?php echo $movie["id"]; ?>">
            <img
              class="movie-item-affiche"
              src="./images/affiche_test3.jpg"
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

    <!--------------------------------------------- FOOTER -->

    <footer>
      <div
        class="logo-footer"
        data-aos="fade-up"
        data-aos-duration="500"
        data-aos-dela ="0"
        data-aos-anchor="footer"
      >
        PROJET <span class="gold">F</span>
      </div>
      <div class="footer-grid">
        <article class="admin-article">
          <div
            class="admin"
            data-aos="fade-up"
            data-aos-duration="500"
            data-aos-delay="100"
            data-aos-anchor="footer"
          >
            <h5>Mickael Cecen</h5>
            <a
              class="social-icon"
              href="https://github.com/MickaelCe"
              target="_blank"
            >
            <i class="fab fa-github"></i>
            </a>
            <a
              class="social-icon"
              href="https://www.linkedin.com/inmickaelcecen/"
              target="_blank"
            >
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
          <div
            class="admin"
            data-aos="fade-up"
            data-aos-duration="500"
            data-aos-delay="200"
            data-aos-anchor="footer"
          >
            <h5>Margaux Coppi</h5>
            <a
              class="social-icon"
              href="https://github.com/margauxc25"
              target="_blank"
            >
            <i class="fab fa-github"></i>
            </a>
            <a
              class="social-icon"
              href="https://ww.linkedin.com/in/margaux-llorens-copi-751676210/"
              target="_blank"
            >
            <i class="fab fa-linkedin"></i>
            </a>
          </div>
          <div
            class="admin"
            data-aos="fade-up"
            data-aos-duration="500"
            data-aos-delay="300"
            data-aos-anchor="footer"
          >
            <h5>Raphaël Dorce</h5>
            <a
              class="social-icon"
              href="https://github.com/DorceRaphael"
              target="_blank"
            >
            <i class="fab fa-github"></i>
            </a>
            <a
              class="social-icon"
              href="https://www.linkedin.com/in/raphael-dorce-524a32148/"
              target="_blank"
            >
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </article>
        <article class="seo-article"></article>
        <article class="copyright-article">
          <h6>COPYRIGHT 2021</h6>
        </article>
      </div>
    </footer>

    <!--------------------------------------------- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!--------------------------------------------- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--------------------------------------------- SLICK SLIDER -->
    <script
      type="text/javascript"
      src="./slick-1.8.1/slick/slick.min.js"
    ></script>
    <!--------------------------------------------- SCRIPT -->
    <script src="app.js"></script>
  </body>
</html>
