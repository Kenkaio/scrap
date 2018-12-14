<?php

if (!isset($_GET['lang'])) {
    header('location:index.php?lang=fr');
}

if (isset($_GET['lang'])) {
    require("views/decide-lang.php");
    require('controllers/accueil.php');
}

