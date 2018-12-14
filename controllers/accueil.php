<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/header.css" />
    <link rel="stylesheet" href="public/css/index.css" />
    <title>Le Scrap de Monique</title>
</head>
<body>
    <header class="header">
        <section id="header" class="container-fluid">
            <div id="presentation">
                <div class="bubble bubble1"></div>
                <div class="bubble bubble2"></div>
                <h1 class="ml5">
                    <span class="text-wrapper">
                        <span class="line line1"></span>
                        <span class="letters letters-left"><?= TITRE; ?> scrap</span>
                        <span class="letters letters-mid">de</span>
                        <span class="letters letters-right"> Monique</span>
                        <span class="line line2"></span>
                    </span>
                </h1>
                <div class="down">
                    <p><?= VISITE; ?></p>
                    <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                </div>
            </div>
            <nav id="menu" class="navbar navbar-default text-center">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a><?= MENU_ACCUEIL; ?></a></li>
                        <li><a><?= MENU_REALISATIONS; ?></a></li>
                        <li><a><?= MENU_TECHNIQUES; ?></a></li>
                        <li><a><?= MENU_CONTACT; ?></a></li>
                        <li><a href="index.php?lang=fr"><img class="drapeau" id='drapeauFr' src="public/images/Accueil/drapeauFr.jpg" alt="drapeau Francais"></a></li>
                        <li><a href="index.php?lang=es"><img class="drapeau" id='drapeauEs' src="public/images/Accueil/drapeauEs.jpg" alt="drapeau Espagnole"></a></li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    <!-- fin section header -->
    <section id="achievements">
        <div class="contentAchievements container">
            <h1><?= MENU_REALISATIONS; ?></h1>
            <div class="posts">
                <!-- contenu ajouté via php -->
            </div>
        </div>

    </section>
    <script src="public/js/accueil.js"></script>
</body>
</html>
