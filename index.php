<!DOCTYPE html>
<html lang="en">
	
<script type="text/javascript">
	var templateUrl = '<?= get_bloginfo("template_url"); ?>';
	console.log('url = ' + templateUrl);
</script>
	
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-Pocalypse Now</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Style du site -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

</head>

<body class="container-fluid px-0">
    <!-- HEADER -->
    <header class="px-3">
        <!-- Menu -->
        <div class="menu">
            <div class="demoR boutonNav"><a href="<?php echo home_url(); ?>"></a></div>

            <div class="aPropos boutonNav">
                <a href="aPropos.html">?</a>
            </div>

            <div class="creation boutonNav"><a href="creation.html"></a></div>
        </div>
        <!-- Menu -->
    </header>

    <div class="wrapper-barres">
        <div class="orange"></div>
        <div class="bleu"></div>
    </div>

    <div class="texte1 mt-3 pr-3">
        <h1 class="h1-responsive">Chat-Pocalypse Now</h1>
        <p class="crédit-responsive">Un Demo Reel par Xavier Arbour</p>
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
        <h2 class="mb-4 mx-2">Le concept :</h2>
        <!-- Style de l'image temporaire!!! -->
        <img src="https://chatpocalypsenow.com/wp-content/uploads/2025/02/Artboard-1.png" alt="" class="float-right imgshadow me-3 mb-3">
        <p>Pour mon projet final en intégration multimédia, j’ai modélisé et groomé un chat en 3D en visant une représentation la plus fidèle possible.
			<br>

J’ai sculpté la base dans ZBrush, optimisé la topologie et les UVs dans Maya, puis utilisé XGen pour le grooming. J’ai ajusté la densité, la longueur et l’orientation des poils pour un rendu cohérent.

Ce projet m’a permis d’approfondir mes compétences en modélisation organique et en grooming, tout en respectant les contraintes techniques d’un pipeline 3D.

</p>
    </div>

    <div class="contenu bck-film">
        <div class="video p-3">
            <iframe src="https://www.youtube.com/embed/6H8ZJNFKcec?si=E_DaEXMLn23P34Lq" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
    <!-- CONTENU -->

    <!-- FOOTER -->
    <footer class="px-3">
                <a href="https://github.com/IshtarFolo"><img src="<?php echo get_template_directory_uri(); ?>/images/github-logo.png" alt="icone Github"></a>
        <a href="https://www.artstation.com/xavierarbour9"><img src="<?php echo get_template_directory_uri(); ?>/images/artstation_Edit.png"
                alt="icone Artstation"></a>
    </footer>
    <!-- FOOTER -->

    <!-- Script pour Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
</body>

</html>