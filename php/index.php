<?php
    // phpinfo();
	 
	 $mon_entier=10;
	 $mon_r=10.2;
	 $mon_car='a';
	 $multi=(10+2)*2;
	 $modulo=10 % 3;
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 echo"<h1>Hello world</h1>";
	 
	 echo $mon_entier."<br/>";
	 echo "La va de mon reel :" .$mon_r."<br/>";
	 echo "La val de mon caractère : $mon_car<br/>";
	 
	 $a=5;
	 $b=20;
	 if($a==5 || $b==10){  // on peut écrire or à la place de ||
	 echo "true";
 }else{
	 echo "false";
 }
 
 
 //Structure condition switch
 
 echo "<br/>";
 $choix=0;
 
 switch($choix){
	 case 0: echo "choix 0 <br/>";break;
	 case 1:echo "choix 1 <br/>";break;
	 default : echo "cas par defaut<br/>";break;
	 
 }
	 //operateur ternaire
	 
		$val=($choix==6) ? true : false;
		echo "val de retour".$val;
		echo"<br/>";
		
	//PREMIER EXERCICE	
		echo "<h1>Exo 1:</h1>";
		$prixHT=100;
		$TVA1=5.5;
		$TVA2=10;
		$TVA3=20;
		
		$ResTTC=$prixHT+($prixHT*$TVA1)/100;
		echo"<table border=1><tr><td>".$ResTTC."</td></tr></table>";
		$ResTTC=$prixHT+($prixHT*TVA2)/100;
		echo"<table border=1><tr><td>".$ResTTC."</td></tr></table>";
		$ResTTC=$prixHT+($prixHT*TVA3)/100;
		echo"<table border=1><tr><td>".$ResTTC."</td></tr></table>";
		
		//BOUCLE FOR
		
			echo "<h1>Boucle pour</h1>";
			for($i=0;$i<10;$i++){//i++ -> i=i+1
			//i++
			//i=i+1
			//i+=1
			//++i
			echo "Hello world".$i;
			echo "<br/>";
			}
	 //faire tq
	 echo "<h1>Boucle faire tq</h1>";
	 $i=0;
	 do{
		 
		 echo "Hello world".$i;
		 echo "<br/>";
		 $i++;
	 }while($i<10);
	 
	 //Les fonctions et procédures
	 /*Programme principal*/
	 
	 $val1=100;
	 $val2=30;
	 
	 $somme=somme($val1,$val2);
	 echo "le res de la somme :".$somme."<br/>";
	 echo "le res de la somme :".somme($val1,$val2);
	 
	 
	 //focntion qui retourne une somme
	 function somme($val1,$val2){
		 
		 /*$res=$val1+$val2;
		 return $res;*/
		 return $val1+$val2;
		 
	 }
	 
	 //fonction qui mélange la chaine
	 
	 function MelChaine($chaine){
		 
		 return str_shuffle($chaine);
	 }
	 
	 //fonction qui écrit en minuscules
	 function lower($chaine);
	 
		return strtolower($chaine);
		
	 //tableau associatif
	 $coordonnees
	 )
	 
	 //recherche dans tableau
	 
	 if (in_array('Francois', $prenoms)
	 {
		 echo 'La valeur "Francois" se trouve dans le tableau prénoms!';
	 }
	 
	 echo '<br/>';
	 echo '<br/>';
	 echo '<br/>';
	 echo '<br/>';
	 
	 $key = array_search('Paris', $coordonees);
	 
	 echo 'cle :'.$key;
	 
	 echo '<br/>';
	 echo '<br/>';
	 echo '<br/>';
	 echo '<br/>';
	 echo '<br/>';
	 echo '<br/>';
	 
	 // maintenant, on efface tous les elements mais on conserve le tableau;
	 
	 foreach ($coordonees as $cle => $element) {
		 
		 unset($coordonees[$cle]);
	 }
	 
	 print_r($coordonnees); //affichage tableau vide
	 
	 echo '<br/>';
	 echo '<br/>';
	 echo '<br/>';
	 
	 $coordonees['prenom']='Nicolas';
	 
	 echo '<br/>';
	 echo '<br/>';
	 echo '<br/>';
	 
	 echo $coordonnees['prenom'];
	 
	 
?>