<!doctype>
<HTML>

<head>
	  <link rel="stylesheet" href="css/style.css" type="text/css">
	<meta charset="utf-8" />
	<title>Informations personnelles</title>
	
</head>

<body background="img\entreprise3">
<div class="beauty">

<h1>Informations personnelles<span>Commencez étape par étape</span></h1>
<form action="#" method="post" >
    <div class="section"><span>1</span>Nom & Prénom</div>
    <div class="inner-wrap">
        <label>Nom <input type="text" name="nom" /></label>
        <label>Prénom <textarea name="prenom"></textarea></label>
    </div>

    <div class="section"><span>2</span>Date de naissance & Adresse</div>
    <div class="inner-wrap">
        <label>Date de naissance <input type="date" name="date" /></label>
        <label>Adresse <textarea name="adresse"></textarea></label>
    </div>

    <div class="section"><span>3</span>Email & Phone</div>
    <div class="inner-wrap">
        <label>Email<input type="email" name="email" /></label>
        <label>Numero Téléphone <input type="text" name="tel" /></label>
    </div>

   

    <div class="section"><span>4</span>Pays et Code Postal </div>
        <div class="inner-wrap">
        <label> Pays  <input type="text" name="pays" /></label>
        <label> Code Postal <input type="text" name="postal" /></label>
    </div>

    <div class="button-section">

     <button type="submit" name="Sign Up" value="Valider"> Valider </button>
     <span class="privacy-policy">
     <input type="checkbox" name="accept">Vous acceptez nos conditions d'utilisation. 
     </span>
    </div>

<?php
     // if (isset($_POST["button"]))
		
     $fichier=fopen("bd/CV.txt",'a+');
     
    // $langue=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
     
    // $_post[$"langue"].
      fputs($fichier,$_POST["nom"]."-----".$_POST["prenom"]."-----".$_POST["date"]."-----".$_POST["adresse"].$_POST["email"]."-----".$_POST["tel"]."-----"."-----".$_POST["pays"]."-----".$_POST["postal"]."------------".PHP_EOL);

     // fclose($fichier);)
echo '<pre>';
echo fread($fichier, filesize('bd/CV.txt'));
echo '<pre>';
fclose($fichier);


 ?>
        
        </form>
      
  </body>
</HTML>