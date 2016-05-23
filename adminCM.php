<?php
include 'head.inc.php';
// bloc head + header du doc html

echo '
	<div id="container">';

include 'menu.inc.php';

echo '
<section>
	<div id="webmaster">
		<script src="contact.js" type="text/javascript"></script> 
		<h2>Page réservée à l\'administrateur du site.</h2>
		<form method="post">
			<div>
			<label>Pseudo</label>
			<br />
			</div>
				<input type="text" name="pseudo" required/>
			<br />
			<br />
			<div>
			<label>Mot de passe</label>
			</div>
				<input type="password" name="mdp" required/>
			<br />
			<br />
			<input type="submit" value="Be the (web)master!">
	</div>

</section>
</div> <!-- div du container -->
	';

$pseudo =  htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);

if (isset($pseudo) && isset($mdp)) {

	// Connexion à la bdd
		try {
		$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','My.1.SQL.');
		// gestion du niveau d'erreur
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
		$sqladmin = 'SELECT login, mot_de_passe FROM admin';
		$reqadmin = $bdd -> query($sqladmin);
		
		$reqadmin -> setFetchMode(PDO::FETCH_ASSOC);
		
			foreach ($reqadmin as $u) {
				$login = $u['login'];
				$mot_de_passe = $u['mot_de_passe'];
				echo "login : ".$login." et mot de passe : ".$mot_de_passe;
			}
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
		die();
		}
}

include 'footer.inc.php';
?>