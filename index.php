<?php

if (!isset($_GET['lang'])) {
    header('location:index.php?lang=fr');
}

if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'fr') {
        $lang = "Fr";
    }
    else{
        $lang = "Es";
    }
    require('models/modelCoBdd.php');
    require('models/modelBdd.php');
    require("models/decide-lang.php");
    require('controllers/accueil.php');
}

