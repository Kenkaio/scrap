<?php
	if ($_GET['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
		include('public/assets/lang/fr-lang.php');
	}

	else if ($_GET['lang']=='es') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
	 	include('public/assets/lang/es-lang.php');
	}

	else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
	 	include('public/assets/lang/fr-lang.php');
	}
