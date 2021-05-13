<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"  lang="fr">
<head>
<meta charset="UTF-8">

	<title>Exercice ACID-Solutions</title>


	<link href="style/style.css" rel="stylesheet" type="text/css"/>

</head>

<body>

<!-- Question subsidiaire : UXVlbCBlc3QgbGUgcGF5cyBkdSBww6hyZSBuw7ZlbCA/ -->

<div id="content">

<header id="header" >
<a href="http://www.acid-solutions.fr"><img src="style/logo.png" alt="logo" title="logo" /></a>
</header>


<div class="intitule">
	
	<h1>Énoncé</h1>
	
	<div class="bloc_enonce">
		<div class="bloc_text">
			<p>Le dossier que vous venez de télécharger contient les fichiers nécessaires à la compréhension et à la réalisation de l'exercice.</p>
			<p>Cette épreuve a pour but de vous faire dessiner un graphique sous forme d'image générée en php.<br />
			Il nous permettra d'observer votre aptitude à utiliser, comprendre puis réadapter le travail d'un autre dans un but particulier.</p>	
			<p>Ici, nous voulons nous réapproprier la classe <b>Image</b> (<span class="filename">image.class.php</span>) en créant une classe enfant <b>Graph</b> (<span class="filename">graph.class.php</span>),
			 qui nous permettra de dessiner la représentation graphique d'un ensemble de points que nous lui communiquerons (nous utiliserons une méthode <b>addVals</b> que nous créerons à cet effet).</p> 
			<p>L'image sera générée par le fichier <span class="filename">graph.img.php</span>. C'est dans ce dernier que nous instancions notre objet <b>Graph</b> et renseignons à notre méthode <b>addVals</b> les points 21,42,35 et 0.</p>
			<p>Nous voulons que notre image dispose d'une marge de 5px (cette valeur doit être <b>paramétrable</b>). Le graphique comportera un axe vertical et un axe horizontal de couleur noire, et les points seront reliés entre eux par une ligne de couleur rouge. 
			L'exercice devra pouvoir fonctionner en utilisant un <b>autre jeu de valeurs positives</b>.</p>
		</div>
		<div class="bloc_legend" >
			
		</div>
	</div>

</div>


<div class="exercice">
	
	<h2>Exercice</h2>
	
	<div class="bloc_text">
	<p>Modifiez le fichier <span class="filename">graph.class.php</span>, et <b>uniquement ce dernier</b>, de sorte à ce que le rendu de l'image de droite soit identique à celui de l'image de gauche.</p>
	<p>Nous regarderons en détail la <b>modularité</b> de votre code. Aussi, vous pourrez y intégrer autant de <b>méthodes</b> que vous le désirez.</p>
	</div>
	
	<div class="clear"></div>
	
	<div class="bloc_resultat site_bloc">
		<div class="bloc_img"><img src="resultat.png" alt="Résultat à obtenir" title="Résultat à obtenir" /></div>
		<div class="bloc_legend" >
			Voici le résultat à obtenir. Les valeurs renseignées au graph sont 21,42,35,0.
		</div>
	</div>

	<div class="bloc_user site_bloc">
		<iframe class="bloc_img" src="graph.img.php?time=<?php echo time(); ?>" style="padding: 5px;"></iframe>
		<div class="bloc_legend" >
			Modifiez le fichier <span class="filename">graph.class.php</span> de sorte à obtenir le même graphique.
		</div>
	</div>
	
	<div class="clear"></div>
	
</div> 

<div class="help">
	
	<h2>Pour vous aider</h2>
	
	<div class="clear"></div>
	
	<div class="bloc_example site_bloc">
		<div class="bloc_text">Un exemple est mis à votre disposition pour vous aider à  comprendre le fonctionnement de la classe Image.</div>
		<div class="bloc_img_sample"><img src="example.img.php" alt="Exemple" title="Sources de l'exemple" /></div>
		<div class="bloc_legend" >
			Consultez le code source du fichier <span class="filename">example.img.php</span>
		</div>
	</div>
	
	
	<div class="clear"></div>
</div>


</div>

<footer id="footer">
</footer>

</body>
</html>
