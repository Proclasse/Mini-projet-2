<?php
include 'head.inc.php';
// bloc head + header du doc html
?>

<div id="container">
	<?php
	include 'new_menu.inc.php';
	?>
	<style> /* ce bout de css concerne seulement le lien pour alittlemarket situé dans la présentation de Cécile */
		a:link {
			text-decoration: none;
			color: rgb(254, 41, 61);
		}
		a:hover {
			text-decoration: none;
			color: rgb(254, 77, 95);
		}
	</style>
	<section>
		<h1>Qui suis-je?</h1>
		<img id="image_presentation" src="image_fond/s-couverture.jpg" />
		<p class="alinea"> Passionnée par la création depuis toute petite, je me suis dirigée naturellement vers la couture. Autodidacte, j'ai commencé par retoucher mes propres vêtements puis à confectionner des pièces à partir de patrons.</p>
		<p class="alinea">Plus tard, j'ai eu envie de créer mes propres modèles, essentiellement des sarouels, me laissant plein de possibilités pour mes futures réalisations.</p>
 		<p class="alinea">Depuis 2002, acquisition de ma première machine, j'ai agrandi mon parc personnel d'outils, ustensiles et machines en tout genre afin de varier les styles et de proposer des finitions de meilleure qualité.</p>
		<p class="alinea">Auto-entrepreneuse depuis 2011, je suis à l'écoute de vos désirs et commandes, je vous proposerai des ouvrages de qualité, de fabrication artisanale, chaque pièce étant unique et originale. </p>
		<p class="alinea">Ce site est destiné à vous montrer mes différentes créations, certaines sont en vente directement sur le site <a href="https://www.alittlemarket.com/boutique/laplokpik-2771637.html">alittlemarket</a>, et toutes peuvent être réalisées de nouveau sur commande, n'hésitez pas à me contacter !</p>
	</section>

</div>

<?php
include 'footer.inc.php';
?>
