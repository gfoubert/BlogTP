<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>BLOG</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"> </script>
</head>

<body>
<form action="TP.php" method="POST">
<h1><center>BLOG</center></h1>
<p>


</p>
</form>

	<footer>
	<form action="TP.php" method="POST">

		<h2><center>FORMULAIRE</center></h2>   <!-- Formulaire situé dans le footer en bas de page -->
	<div>
	<p>

		<center><label for="pseudo"><strong>Pseudo : </strong></label><input type="text" name="pseudo" /></center>  <!--- Boite pseudo -->
		<br/>
		<br/>
		<center><label for="titre"><strong>Titre : </label><input type="text" name="titre" /></center> <!--- Titre boite -->
		<br/>
		<br/>
	
		<center><textarea name="message" for="message"  placeholder="Message ici!" rows="4" cols="20"></textarea></center>   <!--- BOX MESSAGE -->
	
		<br/>
		<br/>
		<center><input type="submit" value="Envoyer" /></center>  <!--- Bouton pour valider et envoyer. -->

	

	</p>
	</form>
	</div>
	</footer>
	</body>
	</html>




	 
	
	<div>
	<div class="scroll">
<?php

	date_default_timezone_set('Europe/Paris'); 		//Ici on règle le fuseau horaire.
	$today = date("F j, Y, g:i a");    		//Jour et date.

	if(isset($_POST['pseudo']) AND isset($_POST['titre']) AND isset($_POST['message']) )
	{
		$file = fopen("tp.txt", "a+");		//ouverture d'un fichier texte 
		echo '<br/>';
		
		fwrite($file,"Pseudo : ".$_POST['Pseudo']."<br/>"."<br/>");     //Pseudo
		echo '<br/>';
		
		fwrite($file,"Titre : ".$_POST['Titre']."<br/>"."<br/>");		//Titre
		echo '<br/>';
		
		fwrite($file,"Message : ".$_POST['Message']."<br/>"."<br/>");	//Message
		echo '<br/>';
		
		fwrite($file,"Date : ".$today."<br/>"."<br/>");                 //Date
		echo '<br/>';
		
		fwrite($file,"----------------------------------------------------------------------"."<br/>");  //Écriture de la séparation
		 echo '<br/>';
		 
		$lines = file("tp.txt");		
		foreach($lines as $n => $line)   //Afficher le fichier texte.
		{
		echo $line . "<br/>";
		}
	}
	
	
	
	
	
	
	
	 
	 
	
?>