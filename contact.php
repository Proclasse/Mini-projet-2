<?php
include 'head.inc.php';
// bloc head + header du doc html
?>

<div id="container">
	<?php
	include 'menu.inc.php';
	?>

	<form method="post" action="traitement.php" id="myForm">

		<div>
			<span title="Nom 3 caractères mini requis."><label class="form_col">NOM prénom : </label></span>
			<input class="form_col" name="nom" title="Nom 3 caractères mini requis." placeholder="3 caractères mini." type="text" size="20" maxlength="25" onkeypress="return noNumeric(event);" onblur="myUpperCase(id);" required autofocus/>
			<!--span class="tooltip"> 3 caractères minimum</span-->
		</div>
		<br />
		<br />

		<div>
			<span title="Adresse mail requise"><label class="form_col" for="mail">Adresse mail : </label></span>
			<input class="form_col" name="mail" title="Adresse mail requise." placeholder="Adresse mail requise" type="text" size="20" maxlength="100" required />
			<!--span class="tooltip"> Adresse invalide</span-->
		</div>

		</fieldset>
		<br/>
		<fieldset>
			<legend>
				Votre demande...
			</legend>
			<div>
				<label  class="form_col" for="sujet">Sujet du message :</label>
				<select  name="sujet">
					<option value="none">Sélectionnez le sujet :</option>
					<option value="dc">Demande de contact</option>
					<option value="di">Demande d'information</option>
					<option value="si">Suggestion d'amélioration</option>
				</select>

			</div>

			<div>
				<textarea  id="message" name="message" title="Message 5 carctères mini requis." rows="6" cols="50" placeholder="Ecrire ici votre message..." required></textarea>
			</div>
		</fieldset>

		<span class="form_col"></span>
		<input type="submit" value="Envoyer" />
		<input type="reset" value="Annuler" />

	</form>
	<script src="contact.js" type="text/javascript"></script>
</div>

<?php
include 'footer.inc.php';
?>
