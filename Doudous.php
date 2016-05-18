<?php
   include 'head.inc.php'; // bloc head + header du doc html
?>

<div id="container">
	<?php
	include 'menu.inc.php';
	?>

	<!-- Connexion à la bdd -->
	<?php 
	
		try {
			$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','');
		// gestion du niveau d'erreur
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
		$sql = 'SELECT liens FROM categories WHERE id=1';
		$req = $bdd -> query($sql);
		
		$req -> setFetchMode(PDO::FETCH_ASSOC);
		
			foreach ($req as $u) {
				echo "
						<section>
						<h1>Les doudous</h1>
						<img src=".$u." />
						</section>
	
					</div>
				";
				
				
				print_r($u);
			}
					
		}
		
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
		}

	?>

<?php
   include 'footer.inc.php';
?>