<?php
include 'head.inc.php';
// bloc head + header du doc html
?>

<div id="container">
	<?php
	include 'new_menu.inc.php';
	?>

	<section>

	<form method="post" action="traitement.php">

		<div>
			<label class="form_col">NOM Prénom : </label>
			<input id="champ_nom" class="form_col" name="nom" placeholder="3 caractères minimum" type="text" size="20" maxlength="25" onkeyup="test_nom(); test_submit();" required autofocus/>
			<span id="verificateur_nom" class="tooltip"> 3 caractères minimum <span id="check_nom">&#10004;</span><span id="uncheck_nom">&#10008;</span></span>
		</div>
		<br />
		<br />

		<div>
			<label class="form_col" for="mail">Adresse mail : </label>
			<input id="champ_mail" class="form_col" name="mail" placeholder="Adresse mail requise" type="email" size="20" maxlength="100" onkeyup="test_mail(); test_submit();" required />
			<span id="verificateur_mail" class="tooltip"> Adresse valide <span id="check_mail">&#10004;</span><span id="uncheck_mail">&#10008;</span></span>
		</div>

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
		<input id="submit_button" type="submit" value="Envoyer" disabled="true"/>
		<input type="reset" value="Annuler" />

	</form>
	<script src="contact.js" type="text/javascript"></script>

</section>
</div>

<?php
include 'footer.inc.php';
?>
