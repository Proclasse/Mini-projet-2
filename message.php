<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Page de verification de récupération données en php</title>
	<!--link rel="stylesheet" type="text/css" href="contact.css"/-->
  <!--script src="js/envoiform.js" type="text/javascript"></script-->
</head>
        <!--Page "message.php" de confirmation "Message reçu"
Affichage données du formulaire de Contact (PHP) +
Affichage Heure de soumission du formulaire (JS)
Affichage information de la largeur de la page (JS)
Redirection vers page accueil (après 3 secondes)
-->
<body onload="redirect();"> <!--redirection x sec aprés chargement-->
 <h1>Les données émises</h1>
 <p>cette page simule l'enregistrement du formulaire</p>

 	<div>
    <!--début php-->
   <?php
   //déclaration des variables et affectation
   $nom = $_POST['nom'];
   $mail = $_POST['mail'];
   $sujet = $_POST['sujet'];
   $mess = $_POST['message'];
   $heureCl = $_POST['heureClient'];
   $resolecran = $_POST['resolecran'];
   $taillefenetre = $_POST['taillefenetre'];
   $taillezoneAff = $_POST['taillezoneAff'];

 
   //echo "".$nom;
   //la balise span (inline) est placée dans la string. En php le point sert à concaténer
   echo "Votre nom est : ".$nom.'</br></br>';

      echo "Votre mail : ".$mail.'</br></br>';

   
    echo "Votre message porte sur ce sujet : ".$sujet."</br>";
    echo $mess."</br></br>";
    //heure obtenue depuis champ de formulaire cachée
    echo "L'heure du client indique : ".$heureCl."</br>";
    echo "La resolution de l'ecran est (en pix): ".$resolecran."</br>";
    echo "La taille de la fenetre (en pix): ".$taillefenetre."</br>";
    echo "La taille de la zone d'affichage est (en pix) : ".$taillezoneAff."</br>";
    echo "C'est fini";
   ?>
    <!--fin php-->

  </div>

  <script src="js/envoiform.js" type="text/javascript"></script>
</body>
</html>