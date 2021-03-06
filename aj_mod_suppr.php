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


$id_ams = (int) $_GET['id_ams'];
$id_procat = (int) $_GET['id_procat'];

if ($id_procat == 1) {

	echo "
		<section>
		<h2>Voici la liste des catégories (noms et chemin d'accès)</h2>
		";

	include 'presentation_categories.inc.php';

	if ($id_ams == 1) {
	
	echo '
		<div>
			<h3>Ajouter une catégorie</h3>
			<form method="post" action="maj_pro_cat.php?id_as=1">
				<div>
					<label>- Nom de la catégorie</label>
				</div>
				<input class="pres_form" type="text" name="noms" required/>
				<input id="submit_button" type="submit" value="Envoyer"/>
			</form>
		</div>
		<a href="modifs.php">Revenir à la page des modifications</a>
	</section>
</div>
	';
}

elseif ($id_ams == 2) {
	
	echo '
		<div>
			<h3>Modifier une catégorie</h3>
			<form method="post" action="maj_pro_cat.php?id_as=2">
				<div>
					<label>- Nouveau nom de la catégorie</label>
				</div>
				<input class="pres_form" type="text" name="noms" required/>
				<div>
					<label>- Choisir le numéro de la catégorie à modifier</label>
				</div>
				<input class="pres_form" type="text" name="id" required/>
				<input id="submit_button" type="submit" value="Envoyer"/>
			</form>
		</div>
		<a href="modifs.php">Revenir à la page des modifications</a>
	</section>
</div>
	';
}

elseif ($id_ams == 3) {
	
	echo '
		<div>
			<h3>Supprimer une catégorie</h3>
			<form method="post" action="maj_pro_cat.php?id_as=3">
				<div>
					<label>- Entrer le numéro associé à la catégorie pour la supprimer</label>
				</div>
				<input class="pres_form" type="text" name="id" required/>
				<input id="submit_button" type="submit" value="Envoyer"/>
			</form>
		<a href="modifs.php">Revenir à la page des modifications</a>
		</div>
	</section>
</div>
	';
	}
}

elseif ($id_procat == 2) {

	echo "
		<section>
		<h2>Voici la liste des produits</h2>
		";
	
	include 'presentation_produits.inc.php';

	if ($id_ams == 4) {

		echo "<h3>Pour rappel :</h3>";
		include 'presentation_categories.inc.php';
		
		echo'
			<div>
				<h3>Ajouter un produit</h3>
				<form method="post" action="maj_pro_cat.php?id_as=4">
					<p>Veuillez remplir les champs suivants</p>
					<div>
						<label>Entrer le numéro de l\'id correspondant à la catégorie (1 pour Customs, 6 pour Jupes etc.)</label>
					</div>
					<input class="pres_form" type="text" name="categorie_id" required/>
					<div>
						<label>Préciser le chemin (correspond au nom du fichier de la photo du produit, sans .JPG)</label> <!-- à améliorer avec un "parcourir" -->
					</div>
					<input class="pres_form" type="text" name="chemin" required/>
					<div>
						<label>Donner un nom au produit</label>
					</div>
					<input class="pres_form" type="text" name="nom" required/>
					<div>
						<label>Enfin, entrer l\'URL vers le site alittlemarket (facultatif, peut être renseigné ultérieurement)</label>
					</div>
					<input class="pres_form" type="text" name="lien_alm" />
					<input id="submit_button" type="submit" value="Envoyer"/>
				</form>
			</div>
			<a href="modifs.php">Revenir à la page des modifications</a>
		</section>
	</div>
				';
	}

	elseif ($id_ams == 5) {
		
	echo "<h3>Pour rappel :</h3>";
	include 'presentation_categories.inc.php';
	
		echo '
			<div>
				<h3>Modifier un produit</h3>
				<form method="post" action="maj_pro_cat.php?id_as=5">
				<div>
					<label>Modification du numéro de la catégorie du produit</label>
				</div>
				<input class="pres_form" type="text" name="categorie_id" />
				<div>
					<label>Modification du chemin (nom de fichier  photo) du produit</label>
				</div>
				<input class="pres_form" type="text" name="chemin" />
				<div>
					<label>Modification du nom du produit</label>
				</div>
				<input class="pres_form" type="text" name="nom" />
				<div>
					<label>Modification de l\'adresse vers alittlemarket.com</label>
				</div>
				<input class="pres_form" type="text" name="lien_aml" />
				<div>
					<label>(obligatoire!) Préciser l\'id (numéro unique) du produit à modifier </label>
				</div>
				<input class="pres_form" type="text" name="id" required/>
				<input id="submit_button" type="submit" value="Envoyer"/>
			</form>
		<a href="modifs.php">Revenir à la page des modifications</a>
		</div>
	</section>
</div>
		';
	}

	elseif ($id_ams == 6) {
	
	echo '
		<div>
			<h3>Supprimer un produit</h3>
			<form method="post" action="maj_pro_cat.php?id_as=6">
			<div>
				<label>Indiquer le numéro du produit à supprimer</label>
			</div>
			<input class="pres_form" type="text" name="id" required/>
			<input id="submit_button" type="submit" value="Envoyer"/>
			</form>
		<a href="modifs.php">Revenir à la page des modifications</a>
		</div>
	</section>
</div>
	';
	}

}

include 'footer.inc.php';

?>