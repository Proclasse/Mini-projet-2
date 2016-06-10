<?php
session_start();
if (!isset($_SESSION['pseudo'], $_SESSION['mdp'])){
	header('Location: adminCM.php');
}

include 'head.inc.php';
// bloc head + header du doc html

echo '
	<div id="container">';

	include 'new_menu.inc.php';

echo '
		<section>
			<h1>Bienvenue sur la page des modifications du site!</h1>
			<br />
			<br />
			<div id="webmaster">
				<h3><a href="aj_mod_suppr.php?id_ams=1&amp;id_procat=1">Ajouter des catégories</a></h3>
				<br />
				<br />
				<h3><a href="aj_mod_suppr.php?id_ams=2&amp;id_procat=1">Modifier des catégories</a></h3>
				<br />
				<br />
				<h3><a href="aj_mod_suppr.php?id_ams=3&amp;id_procat=1">Supprimer des catégories</a></h3>
				<br />
				<br />
			</div>
			<div id="webmaster">
				<h3><a href="aj_mod_suppr.php?id_ams=4&amp;id_procat=2">Ajouter des produits</a></h3>
				<br />
				<br />
				<h3><a href="aj_mod_suppr.php?id_ams=5&amp;id_procat=2">Modifier des produits</a></h3>
				<br />
				<br />
				<h3><a href="aj_mod_suppr.php?id_ams=6&amp;id_procat=2">Supprimer des produits</a></h3>
				<br />
				<br />
			</div>
			<p>Rappel : pour les catégories, n\'oubliez pas de modifier le nom de vos dossiers en conséquence.</p> 
			<a href="essai_log_mdp.php">Se déconnecter</a>
		</section>
	</div>
	';

include 'footer.inc.php';
?>
