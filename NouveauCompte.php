 <!doctype>
<HTML>

<head>
	  <link rel="stylesheet" href="css/style.css" type="text/css">
	<meta charset="utf-8" />
	<title>Inscrivez vous</title>
	
</head>

<body background="img\entreprise4">
<div class="beauty">


	<h1>Créez votre compte <span>Commencez à construire votre avenir</span></h1>
<form action="#" method="post" >
    <div class="section"><span>1</span>Email & Mot de passe </div>
    <div class="inner-wrap">
        <label>Email <input type="email" name="email" /></label>
		<label>Mot de passe  <input type="password" name="pass" /></label>
        <label>Confirmer Mot de passe <input type="password" name="pass2" /></label>
    </div>
    <div class="button-section">

     <button type="submit" name="Sign Up" value="Valider" onclick=href="/success.php" > Valider </button>
     <span class="privacy-policy">
     <input type="checkbox" name="accept">Vous acceptez nos conditions d'utilisation. 
     </span>
    </div>


    <?php
     // if (isset($_POST["button"]))
		
     $fichier=fopen("bd/comptes.txt",'a+');
     
    // $langue=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
     
    // $_post[$"langue"].
      fputs($fichier,$_POST["email"]."-----".$_POST["pass"]."-----".$_POST["pass2"]."------------".PHP_EOL);

     // fclose($fichier);)

echo fread($fichier, filesize('bd/comptes.txt'));
fclose($fichier);
//header('location: ../webproject/success.php');


 ?>
          
        </form>
      
  </body>
</HTML>