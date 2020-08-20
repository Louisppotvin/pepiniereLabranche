
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="../public/js/script.js" defer></script>
	<link href="../public/css/Style.css"" rel="stylesheet" type="text/css">


</head>
<body>

	<! – NAVIGATION BAR –>
	<nav class="myNav" id="navB" >
		
			<div class="logoBox">
				<img class="logo" src="public/images/logo.png">
				<p  class="companyName">La Pépinière Labranche</p>
			</div>
		
		
		<ul class="uLinks">
			<li class ="uLinksList"><a class = "uLinksListElement" href="index.php">Produit</a></li>
			<li class ="uLinksList"><a class = "uLinksListElement" href="index.php?action=contact">Contact</a></li>
			<li class ="uLinksList"><a class = "uLinksListElement" href	="index.php?action=livre">Livre d'or</a></li>
			<li class ="uLinksList"><a id="connect" class = "uLinksListElement" href	="index.php?action=logout">Déconnexion</a></li>
			<a href	="#" onclick="changeFont()" class="button">Changer Thème</a>
		</ul>

		<a href="#" class="burger">
			<div class="line1"></div>
			<div class="line1"></div>
			<div class="line1"></div>
		</a>
	</nav>

<script>
function connecter(){
document.getElementById("connect").innerHTML = "Connexion" ;
document.getElementById("connect").href = "index.php?action=contact";

}

</script>

<?php

if(!isset($_SESSION['user'])) {
	session_start();
	
	if(!isset($_SESSION['user'])) {
	echo '<script type="text/javascript">',
				'connecter();', 
				'</script>';		
	} else {
		
	}
}
?>
	
</body>
</html>