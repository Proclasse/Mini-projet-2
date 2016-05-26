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
			<h2><a href="page_ajout_categories.php">Ajouter des catégories</a></h2>
			<br />
			<br />
			<h2><a href="page_suppression_categories.php">Supprimer des catégories</a></h2>
			<br />
			<br />
			<a href="essai_log_mdp.php">Se déconnecter</a>
		</section>
	</div>
	';

include 'footer.inc.php';
?>
