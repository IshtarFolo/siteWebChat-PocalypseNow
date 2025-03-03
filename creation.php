<?php
/*
Template Name: creation
*/
?>

<?php get_header(); ?>

<div class="wrapper-barres">
  <div class="orange"></div>
  <div class="bleu"></div>
</div>

<div class="texte1 mt-3 pr-3">
  <h1 class="h1-responsive">Chat-Pocalypse Now</h1>
  <p class="crédit-responsive">Un travail par Xavier Arbour</p>
</div>

<div class="wrapper-img-head">
  <div class="flou-top-img"></div>
  <img class="chatHead" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chat2.jpg" alt="image chat">
</div>
<!-- HEADER -->

<!-- CONTENU -->
<div class="wrapper-flou-body px-3">
  <div class="flou-milieu-body">
  </div>
</div>

<div class="contenu texte-intro">
  <h2 class="mb-4 mx-2">Processus de création :</h2>
	<p class="mb-5">La création de ce chat 3D a débuté par une recherche approfondie d’images de référence, permettant de mieux comprendre l’<strong>anatomie</strong> et les <strong>proportions</strong> de l'animal. <br><br>

		Ensuite, le modèle a été sculpté dans <strong>ZBrush</strong> avec un souci du réalisme avant d’être exporté en format <strong>FBX</strong> vers <strong>Maya</strong> pour la suite du processus.<br>

		Dans Maya, j’ai procédé au dépliage des <strong>UVs</strong> afin d’appliquer des textures de base, notamment une texture transparente pour le globe oculaire ainsi qu'une texture simple pour l'iris du chat et une matériel de base pour la peau.<br><br>

		Après cela, j’ai réalisé le squelette/ l'armature (<i>rigging</i>) puis le squelette est attaché et configuré (<i>skinning</i>) sur le modèle pour permettre son animation. Avant d’aller plus loin, j’ai testé l’animation afin de m’assurer de la bonne déformation du modèle.<br><br>

		Une fois ces étapes validées, j’ai utilisé <strong>XGen</strong> pour créer un <strong>grooming</strong> le plus réaliste possible, avec mes limitations graphiques, ajoutant du volume et du détail au pelage du chat.<br><br>

    Enfin, j’ai procédé aux rendus finaux, mettant en valeur le modèle avec un éclairage dynamique et un décor simple.</p>

  <!-- Carousel Bootstrap	 -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/25.02.2025_11.43.51_REC.png" alt="Premiere slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/25.02.2025_11.44.39_REC.png" alt="Deuxieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/25.02.2025_11.45.07_REC.png" alt="Troisieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chatMaya_2.png" alt="Quatrieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chatMaya_1.png" alt="Cinquieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chat_Maya3.png" alt="Sixieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/25.02.2025_11.46.12_REC.png" alt="Septieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chatTestRender.jpg" alt="Huitieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/25.02.2025_11.45.39_REC.png" alt="Neufieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chat_Groom.0002_1.0001.jpg" alt="Dixieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chat_AnimTest1.0006_1.0001.jpg" alt="Onzieme slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chat_Render1.jpg" alt="Douzieme slide">
      </div>
    </div>

    <!-- Boutons précédent/ suivant -->
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Vidéo -->
<div class="contenu bck-film mt-1">
  <div class="video p-3">
	  <video src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/chat_Turntable_1.mp4" controls autoplay></video>
  </div>
</div>
<!-- CONTENU -->

<?php get_footer(); ?>