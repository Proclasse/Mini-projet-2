<?php
session_start();

if (!isset($_SESSION['pseudo'], $_SESSION['mdp'])){
header('Location: adminCM.php');
}

// récupération de l'id pour choisir entre l'ajout, la modification ou la suppression
$id_as = (int) $_GET['id_as'];

include 'var_co_bdd.inc.php'; //inclusion des valeurs de connection à la bdd

if ($id_as == 1 ) {
	// ajout d'une catégorie	
	if (isset($_POST['noms'])){
		$noms = htmlspecialchars($_POST['noms']);

		try {
			$bdd = new PDO(serveur, user, mdp);
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "INSERT INTO `categories` (`noms`, `liens`) VALUES ('".$noms."', 'photos/".$noms."/')";
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: aj_mod_suppr.php?id_ams=1&id_procat=1');
	}
	else {
		header('Location: aj_mod_suppr.php?id_ams=1&id_procat=1');
	}
}

elseif ($id_as == 2) {
	//modification d'une catégorie
	if (isset($_POST['id'], $_POST['noms'])){
		$id = (int) $_POST['id'];
		$noms = htmlspecialchars($_POST['noms']);
		
		try {
			$bdd = new PDO(serveur, user, mdp);
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "UPDATE `categories` SET `noms` = '".$noms."', `liens` = 'photos/".$noms."/' WHERE `categories`.`id` =".$id;
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: aj_mod_suppr.php?id_ams=2&id_procat=1');
	}
	else {
		header('Location: aj_mod_suppr.php?id_ams=2&id_procat=1');
	}
}

elseif ($id_as == 3) {
	// suppression d'une catégorie	
	if (isset($_POST['id'])){
		$id = (int) $_POST['id'];

		try {
			$bdd = new PDO(serveur, user, mdp);
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "DELETE FROM `categories` WHERE `categories`.`id` = ".$id;
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: aj_mod_suppr.php?id_ams=3&id_procat=1');
	}
	else {
		header('Location: aj_mod_suppr.php?id_ams=3&id_procat=1');
	}
}

elseif ($id_as == 4) {
	// ajout d'un produit
	if (isset($_POST['categorie_id'], $_POST['chemin'], $_POST['nom'])) {
		$categorie_id = (int) $_POST['categorie_id'];
		$chemin = htmlspecialchars($_POST['chemin']);
		$nom = htmlspecialchars($_POST['nom']);
		$lien_alm = htmlspecialchars($_POST['lien_alm']);
		
		try{
			$bdd = new PDO(serveur, user, mdp);
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "INSERT INTO `produits` (`categorie_id`, `chemin`, `nom`, `lien_alm`) VALUES ('".$categorie_id."', '".$chemin.".JPG', '".$nom."','".$lien_alm."')";
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: aj_mod_suppr.php?id_ams=4&id_procat=2');
	}
	else {
		header('Location: aj_mod_suppr.php?id_ams=4&id_procat=2');
	}
}

elseif ($id_as == 5) {
	//modification d'un produit
	if (isset($_POST['id'])){ //seul l'id est important, les autres champs peuvent être facultatifs si on veut modifier que le nom par exemple
		$id = (int) $_POST['id'];
		$categorie_id = (int) $_POST['categorie_id'];
		$chemin = htmlspecialchars($_POST['chemin']);
		$nom = htmlspecialchars($_POST['nom']);
		$lien_alm = htmlspecialchars($_POST['lien_alm']);
		
		try {
			$bdd = new PDO(serveur, user, mdp);
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "UPDATE `produits` SET  `categorie_id` = '".$categorie_id."', `chemin` = '".$chemin."',`nom` = '".$nom."', `lien_alm` = '".$lien_alm."' WHERE `id` =".$id;
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: aj_mod_suppr.php?id_ams=5&id_procat=2');
	}
	else {
		header('Location: aj_mod_suppr.php?id_ams=5&id_procat=2');
	}
}

elseif ($id_as == 6) {
	//modification d'un produit
	if (isset($_POST['id'])){ 
		$id = (int) $_POST['id'];
		
		try {
			$bdd = new PDO(serveur, user, mdp);
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = "DELETE FROM `produits` WHERE `id` = ".$id;
			$req = $bdd -> query($sql);
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}
		header('Location: aj_mod_suppr.php?id_ams=6&id_procat=2');
	}
	else {
		header('Location: aj_mod_suppr.php?id_ams=6&id_procat=2');
	}
}

?>
