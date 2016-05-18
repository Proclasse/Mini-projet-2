<?php
   include 'head.inc.php'; // bloc head + header du doc html
?>

<div id="container">
	<?php
	include 'menu.inc.php';
	?>
	
<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','');
	}
	catch(PDOException $e) {
		echo "Problème de connexion à la base de données";
	}

?>	
	
	
	<section>
		<h1>Les doudous</h1>
	</section>
	
</div>
<?php
   include 'footer.inc.php';
?>