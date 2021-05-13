<?php 
/**
 * A NE PAS MODIFIER
 * example.img.php
 */


//**INCLUSIONS**//

//La classe Image sur laquelle s'appuiera votre travail (à ne pas modifier)
include 'image.class.php';

//**CREATION DE L'IMAGE**//

//On instancie une image de 300 * 120 
$mon_obj = new Image(300,120);

//**PERSONNALISATION**//

//On ajoute un bleu au panel de couleurs du graph
$mon_obj->ajouterCouleur(0,0,255,'bleu');
//On ajoute un vert au panel de couleurs du graph
$mon_obj->ajouterCouleur(0,255,0,'vert');
//On ajoute un rouge au panel de couleurs du graph
$mon_obj->ajouterCouleur(255,0,0,'rouge');
//On ajoute un jaune au panel de couleurs du graph
$mon_obj->ajouterCouleur(255,200,0,'orange');
//On ajoute un rose au panel de couleurs du graph
$mon_obj->ajouterCouleur(255,0,255,'rose');
//On ajoute un noir au panel de couleurs du graph
$mon_obj->ajouterCouleur(0,0,0,'noir');
//On ajoute un blanc au panel de couleurs du graph
$mon_obj->ajouterCouleur(255,255,255,'blanc');
//On ajoute un gris au panel de couleurs du graph
$mon_obj->ajouterCouleur(100,100,100,'gris');


//on applique un fond gris au graph
$mon_obj->couleurFond('gris');

//on trace des rectanges 
$mon_obj->tracerRectangle(10,10,110,110,'blanc');
$mon_obj->tracerRectangle(140,10,290,110,'noir');
$mon_obj->tracerRectangle(150,20,280,100,'blanc');

//on dessine plusieurs traits de couleur différente
$mon_obj->tracerTrait(20,50,100,50,'bleu');
$mon_obj->tracerTrait(100,50,20,100,'vert');
$mon_obj->tracerTrait(20,100,60,20,'rouge');
$mon_obj->tracerTrait(60,20,100,100,'orange');
$mon_obj->tracerTrait(100,100,20,50,'rose');

//**IMPRESSION**//

//on lance l'affichage du graph
$mon_obj->afficher();
