<?php

/**
 * A COMPLETER POUR L'EXERCICE
 * Seul ce fichier devra être modifié. 
 * Soyez modulaires : 
 * Vous pouvez créer autant de méthodes que vous le souhaitez.
 * graph.class.php
 */

class Graph extends Image 
{
    protected $vals;
    protected $padding = 5;

	/** 
	 * Calcule les valeurs en X à partir des valeurs fournit par $tabs dans le fichier graph.img.php
	 * @param array $tabs tableau de valeurs
	 * @param int $padding Padding donné à l'image
	 */
	public function valsX($tabs, $padding){
		// Creation d'un tableau vide dans lequel on insère les valeurs en X calculées
		$valsX = array();
		
		// Création d'une variable inialisé à 0 qui va définir notre première valeur en X à 0
		$value = 0;

		// Réalisation d'une boucle qui va calculée la valeur en X de chaque point
		for ($j=0; $j < count($tabs); $j++) { 
			// Si la valeur par défaut est égal à 0, on lui ajoute le padding définit plus haut 
			if ($value === 0) {
				$valX = $value + $padding;
			}
			// Sinon on y touche pas
			else{
				$valX = $value;
			}
			
			// Calcul l'écart en X à ajouter suivant la quantité de nombres entrès dans la variable $tabs dans le fichier graph.img.php
			$value += round(500 / (count($tabs) - 1 ));

			// On vérifie si la valeur est supérieur à 500 (taille du graphique) - le padding, si c'est le cas on soustrait de nouveau le padding à ce nombre
			if ($valX >= (500 - $padding)) {
				$valX = 500 - $padding;
			}
			// Sinon rien
			else {}

			// On ajoute la valeur $valX dans le tableau des valeurs en X
			array_push($valsX, $valX);
		}
		// On retourne ensuite le tableau, puisque c'est ce que l'on voudra récupérer quand on appellera la fonction valsX()
		return $valsX;
	}

	/** 
	 * Calcule les valeurs en Y à partir des valeurs fournit par $tabs dans le fichier graph.img.php
	 * @param array $tabs tableau de valeurs
	 * @param int $padding Padding donné à l'image
	 */
	public function valsY($tabs, $padding){
		// Creation d'un tableau vide dans lequel on insère les valeurs en Y calculées
		$valsY = array();

		$maxNumber = 0;

		for ($m=0; $m < count($tabs) ; $m++) { 
			if ($tabs[$m] > $maxNumber) {
				$maxNumber = $tabs[$m];
			}
			
		}

		// Réalisation d'une boucle qui va calculée la valeur en Y de chaque point
		for ($i=0; $i < count($tabs) ; $i++) { 
			// On définit le facteur pour le calcul de la valeur en Y, où 500 est la taille du graphique et 42 la valeur la plus haute donnée dans le test unique fournit (21,42,35,0). Cette valeur est confirmée par le fait que la valeur 21 aussi fournit est égale à la moitié du graphique et que donc (500 / 2 / 21) = (500 / 42);
			$multiplier = 500 / $maxNumber;

			// La valeur en Y est égale à 500 -(12 * $nombre), où 500 est la taille du graphique , 12 un nombre calculée grâce aux valeurs test qui ont été données dans le test unique (21,42,35,0) et le $nombre qui est la valeur[$i] dans la variable $tabs
			$val[$i] = 500 - ($multiplier * $tabs[$i]);
			
			// Si cette valeur est supérieur ou ègale à 500 on la redéfinis à 500 et on lui soustrait le padding
			if ($val[$i] >= 500) {
				$val[$i] = 500 - $padding;
			}
			// Sinon si cette valeur est inférieur ou ègale à 0 on la redéfinis à 0 et on lui ajoute le padding
			elseif($val[$i] <= 0){
				$val[$i] = 0 + $padding;
			}
			// Sinon rien
			else {}

			// On ajoute la valeur $valY dans le tableau des valeurs en X
			array_push($valsY, $val[$i]);
		}
		// On retourne ensuite le tableau, puisque c'est ce que l'on voudra récupérer quand on appellera la fonction valsY()
		return $valsY;
	}


	/**
	 * Définit les valeurs du graph
	 * @param array $tabs tableau de valeur
	 */
	public function addVals($tabs)
	{

		// Vérifie si les valeurs données dans $tabs sont des valeurs positives sinon retourne une erreur
		foreach ($tabs as $tab) {
			if ($tab < 0) {
				customError('Valeur négative','Une valeur négative à été entrée');
			}
		}

		$padding = $this->padding;

		// Définition des couleurs
		$this->ajouterCouleur(255, 0, 0, 'rouge');
		$this->ajouterCouleur(0,0,0,		'noir');
		$this->ajouterCouleur(200,200,200,'gris');

		// Définition de la couleur du fond
		$this->couleurFond('gris');
		
		// Récupère les valeurs en X des différents points
		$valsX = $this->valsX($tabs,$padding);

		// Récupère les valeurs en Y des différents points
		$valsY = $this->valsY($tabs,$padding);


		// Trace les différents traits dans le graphique grâce aux données contenus dans les tableaux $valsY et $valsX que l'on a appelé ci-dessus
		for ($t=1; $t < count($tabs); $t++) { 
			$this->tracerTrait($valsX[$t - 1], $valsY[$t - 1], $valsX[$t], $valsY[$t], 'rouge');
		}

		// Valeurs de résultats trouvés par juxtaposition du graphique donnée et de manipulations des données manuellement
		
		// $this->tracerTrait(5,250,168,5,'noir');
		// $this->tracerTrait(168,5,332,85,'noir');
		// $this->tracerTrait(332,85,495,495,'noir');
		$this->tracerTrait($padding,$padding,$padding,500 - $padding,'noir');
		$this->tracerTrait($padding, 500 - $padding, 500 - $padding, 500 - $padding,'noir');
	}

	/**
	 * Définit les valeurs du graph
	 * @param array $tabs tableau de valeur
	 */
	public function afficher() {

		/** --------------EXEMPLE-------------- **/

		// Définition des couleurs
		// $this->ajouterCouleur(255,255,255,	'blanc');
		// $this->ajouterCouleur(0,0,0,		'noir');


		// On trace les traits
		
		// $this->tracerTrait(100,200,400,200,'noir');
		// $this->tracerTrait(100,400,400,400,'blanc');

		/** ---------------------------------- **/

		// Affichage de l'image
		parent::afficher();
	}
}
