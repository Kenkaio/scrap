</!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" href="../css/admin.css" />	
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>

	<!------- Connexion -------->
	<form action="admin.php" method="POST" id="formCo">
		<img src="../images/logoCo.png" id="logoCo" alt="logo connexion">
		<h1>Sign in</h1>
		<label for="pseudo" name="pseudo" id="pseudo">Nom : </label><input type="text" name="pseudo">
		<label for="mdp" name="mdp" id="mdp">Mot de passe : </label><input type="password" name="mdp">
		<input type="submit" value="Confirmer" id="valider">
	</form>

	

	<?php
		/* ------- Vérification Connexion -------- */
		if (!isset($_POST['pseudo']) AND !isset($_POST['mdp'])) {
			
		}
		elseif (empty($_POST['pseudo']) OR empty($_POST['mdp'])) {
			echo "<div id='erreur'>Veuillez remplir tous les champs !</div>";
		}
		else{		
			$bdd = new PDO('mysql:host=localhost;dbname=scrapmonique;charset=utf8', 'root', '');
            $bdd = new PDO('mysql:host=db761051409.hosting-data.io;dbname=db761051409;charset=utf8', 'dbo761051409', 'amelie33');
			$req = $bdd->prepare('SELECT * FROM admin WHERE pseudo= :pseudo');
			$req->execute(array(':pseudo' => $_POST['pseudo']));
			$result = $req->fetch();
			$Verif_Pass = password_verify($_POST["mdp"], $result["mdp"]);
			if (!$result) {
				echo "<div id='erreur'>Pseudo ou mdp incorrect !!! </div>";
			}
			else
			{
				if ($Verif_Pass) {
					?>				
					<script type="text/javascript">
						$('#formCo').css({
							"display": "none"
						});
					</script>
					<a href="destroy_session.php"><button id="deco"></button></a>
					<?php
					session_start();				 
					$_SESSION['id'] = $result['id'];
					$_SESSION['pseudo'] = $result['pseudo'];
					$_SESSION['mail'] = $result['mail'];
					?>
					<div id="sommaire">
						<div id="addArticle" class="lienAdmin">
							<h2>Ajouter un article</h2>
						</div>
						<div id="adminArtCom" class="lienAdmin">
							<h2>Gérer les articles / commentaires</h2>
						</div>
						<div id="message" class="lienAdmin">
							<h2>Mes messages</h2>
						</div>
						<div id="profil" class="lienAdmin">
							<h2>Modifier mon profil</h2>
						</div>
					</div>

					<!-------- formulaire d'envoi de fichiers  --------->
					<form action="reception_fichier.php" method="post" enctype="multipart/form-data" id="formArticle">
						<h2> Ajouter un article </h2>
						<div class="titreArticle">
							<label for="nomArticleFr" name="nomArticleFr" id="nomArticleFr">Titre article Francais: </label><input type="text" name="nomArticleFr" required>
							<label for="nomArticleEs" name="nomArticleEs" id="nomArticleEs">Titre article Espagnole: </label><input type="text" name="nomArticleEs" required >
						</div>
						<div class="zoneArticle">
							<textarea for="contenuFr" name="contenuFr" id="contenuFr" class="ckeditor"></textarea>						
							<textarea for="contenuEs" name="contenuEs" id="contenuEs" class="ckeditor"></textarea>
						</div>
				            <input type="submit" id="validerArticle"/>		
					</form>
					<?php

					/* ---- Affichage message d'erreur ou si ok ------- */
					if (isset($_GET['message'])) {
						switch ($_GET['message']) {
							case '1':
								echo "L'envoi a bien été effectué !";
								break;

							case '2':
								echo "Veuillez choisir un format de type : jpg, jpeg, gif ou png";
								break;

							case '3':
								echo 'Votre fichier est trop gros, veuillez ne pas dépasser 10Mo';
								break;

							case '4':
								echo  "Veuillez ne pas dépasser les 100 Mo";
								break;

							case '5':
								echo "Veuillez ajouter un fichier";
								break;
							
							default:
								echo "";
								break;
						}
					}			
				}
				else{
					echo "<font color='#D30A0A'>pseudo ou mdp incorrect</font>";
				}
			}
		}

	?>
<script src="../js/index.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>