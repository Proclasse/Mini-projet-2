<?php
session_start();
if (!isset($_SESSION['pseudo'], $_SESSION['mdp'])){
	header('Location: adminCM.php');
}

include 'head.inc.php';
// bloc head + header du doc html

echo '
	<div id="container">';

	include 'menu.inc.php';

echo '
		<section>
			<h1>Bienvenue sur la page des modifications du site!</h1>
		</section>
	</div>
	<a href="essai_log_mdp.php">Se déconnecter</a>
	';

include 'footer.inc.php';
?>
