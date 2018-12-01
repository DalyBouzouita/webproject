<!doctype>
<HTML>

<head>
	  <link rel="stylesheet" href="css/style.css" type="text/css">
	<meta charset="utf-8" />
	<title> Connexion </title>
	
</head>

<body background="img\entreprise2">
<div class="beauty">

<h1>Connectez vous<span>Commencez votre nouvelle vie professionnelle</span></h1>
<form action="#" method="post" >
    <div class="section"><span>■</span>Email & Mot de passe</div>
    <div class="inner-wrap">
        <label>Email <input type="text" name="email" /></label>
        <label>Mot de passe <input type="password" name="pass"></input></label>
    </div>
     <div class="button-section">

     <button type="submit" name="Sign Up" value="Connexion" href="newproject/accueil.php"> Connexion </button>
     <span class="memory">
     <input type="checkbox" name="accept">Se mémoriser de mot de passe </input>
     <br> </br>
     <a href="NouveauCompte.php"> <center> Vous n'avez pas un compte ? </center> </a>
     </span>
    </div>
</form>
</div>
<?php
     // if (isset($_POST["button"]))
		
     $fichier=fopen("bd/login.txt",'a+');
     
    // $langue=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
     
    // $_post[$"langue"].
      fputs($fichier,$_POST["email"]."-----".$_POST["pass"]."------------".PHP_EOL);

     // fclose($fichier);)
echo '<pre>';
echo fread($fichier, filesize('bd/login.txt'));
echo '<pre>';
fclose($fichier);


 ?>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</HTML>