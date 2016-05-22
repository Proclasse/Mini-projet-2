<?php
include 'head.inc.php';
// bloc head + header du doc html

echo '
	<div id="container">';

include 'menu.inc.php';

echo '
<section>
	<div id="webmaster">
		<script src="contact.js" type="text/javascript"></script> <!-- à prévoir pour la suite : si les valeurs de co sont bonnes, alors la valeur l\'attribut css de l\'id webmaster passe à display: none afin d\'effacer le formulaire -->
		<h2>Page réservée à l\'administrateur du site.</h2>		<!-- certainement et donc plus facilement à faire en php... -->
		<form method="post">
			<label>Pseudo
				<input type="text" name="pseudo"/>
			</label>
			<br />
			<label>Mot de passe
				<input type="password" name="mdp" />
			</label>
			<br />
			<br />
			<input type="submit" value="Be the (web)master!">
	</div>

</section>
</div> <!-- div du container -->
	';

include 'footer.inc.php';
?>