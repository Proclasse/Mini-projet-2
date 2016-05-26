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
			<h3>Supprimer une catégorie</h3>
			<form method="post" action="ajout_suppr_categorie.php?id_as=2">
				<div>
					<label>- Entrer le numéro associé à la catégorie pour la supprimer</label>
				</div>
				<input type="text" name="id" required/>
				<br />
				<br />
				<input id="submit_button" type="submit" value="Envoyer"/>
			</form>
		<a href="modifs.php">Revenir à la page des modifications</a>
		</div>
	</section>
</div>
	';

include 'footer.inc.php';
?>