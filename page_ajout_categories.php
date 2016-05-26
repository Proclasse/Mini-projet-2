<?php
session_start();
if (!isset($_SESSION['pseudo'], $_SESSION['mdp'])){
header('Location: adminCM.php');
}

include 'head.inc.php';
// bloc head + header du doc html

echo '
	<div id="container">
	';

	include 'new_menu.inc.php';

echo "
	<section>
	<h1>Voici la liste des catégories (noms et chemin d'accès)</h1>
	";

include 'presentation_categories.inc.php';
		
echo '
		<div>
			<h3>Ajouter une catégorie</h3>
			<form method="post" action="maj_categorie.php?id_as=1">
				<div>
					<label>- Nom de la catégorie</label>
				</div>
				<input type="text" name="noms" required/>
				<br />
				<br />
				<input id="submit_button" type="submit" value="Envoyer"/>
			</form>
		</div>
		<a href="modifs.php">Revenir à la page des modifications</a>
	</section>
</div>
	';

include 'footer.inc.php';
?>