<?php

/**
 * A NE PAS MODIFIER
 * graph.img.php
 */

//**GESTION DU DEBUG MODE **//

//Gestion automatisé de l'affichage d'erreurs
error_reporting(E_ALL);
ini_set('display_errors', 'On');
set_error_handler("customError",E_ALL);
function customError($errno, $errstr)
{
	$GLOBALS['debug'] = true;
	echo "<b>Error:</b> [$errno] $errstr<br>";


}

//On peut forcer le debug avec un $_GET['debug'] non vide à l'appel du script
$debug = (!empty($_GET['debug']));


//**INCLUSIONS**//

//La classe Image sur laquelle s'appuiera votre travail (à ne pas modifier)
include 'image.class.php';

//La classe Graph que vous aurez à modifier (elle hérite de la class Image)
include 'graph.class.php';


//**CREATION DU GRAPH**//

//On définit les valeurs
$tab = array(21,42,35,0);

//On instancie un graph
$obj = new Graph(500,500);


//On lui ajoute les valeurs renseignées dans $tab
$obj->addVals($tab);


//**PERSONNALISATION**//

//On ajoute un gris au panel de couleurs du graph
$obj->ajouterCouleur(200,200,200,'gris');

//on applique un fond gris au graph
$obj->couleurFond('gris');


//**IMPRESSION**//

//la constante DEBUG commiquera avec la classe Image
define ('DEBUG',$debug);

//on lance l'affichage du graph
$obj->afficher();


?>
