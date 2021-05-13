<?php

/**
 * A NE PAS MODIFIER
 * image.class.php
 */

class Image
{
        protected $img;
        protected $couleurs;
        protected $w,$h;

        
       /**
       * Constructeur 
       * @param int $w largeur
       * @param int $h hauteur
       */
        public function __construct($w,$h)
        {
            $this->w = $w;
            $this->h = $h;
            $this->img=imagecreate($w,$h);
            imagecolorallocate($this->img, 255,255,255);

            $this->couleurs = array();
        }
        
        /**
         * Affiche l'image lorsqu'on est pas en mode DEBUG
         */
        public function afficher() 
        {
			// if (!constant('DEBUG')) {
				header("Content-type: image/png");
				imagepng($this->img);
				imagedestroy($this->img);
			// } else {
			// 	echo '<hr/>DEBUG MODE<hr/>';
			// }
        }
        

		/**
		 * Ajoute une couleur au panel de l'image sous le nom saisi en entrée
		 * @param int $r composante r
		 * @param int $v composante v
		 * @param int $b composante b
		 * @param string $nom le nom de la couleur
		 */
        public function ajouterCouleur($r,$v,$b,$nom) 
        {
                $this->couleurs[$nom] = imagecolorallocate($this->img, $r,$v,$b);
        }
        

        /**
         * Définit la couleur de fond de l'image (la couleur doit être présente dans le panel de l'image)
         * @param string $couleur nom de la couleur dans le panel
         */
        public function couleurFond($couleur) {
                imagefill($this->img,0,0,$this->couleurs[$couleur]);
        }
        
      
        /**
         * Dessine un trait sur l'image (la couleur doit être présente dans le panelde l'image)
         * @param int $x1 abscisse du point premier point
         * @param int $y1 ordonnée du premier point
         * @param int $x2 abscisse du point second point
         * @param int $y2 ordonnée du second point
         * @param string $couleur nom de la couleur dans le panel
         */
        public function tracerTrait($x1,$y1,$x2,$y2,$couleur) {
                imageline($this->img,$x1,$y1,$x2,$y2,$this->couleurs[$couleur]);
        }
        
        //
        /**
         * Ecrit un texte sur l'image (la couleur doit être présente dans le panel de l'image)
         * @param int $x coordonnée X du coin en haut, à gauche
         * @param int $y coordonnée Y du coin en haut, à gauche.
         * @param int $font 1, 2, 3, 4, 5 pour les polices internes (+ d'info sur la doc de imagestring )
         * @param string $texte la chaîne de caractères à écrire. 
         * @param string $couleur
         */
        public function ecrireTexte($x,$y,$font,$texte,$couleur)
        {
                imagestring($this->img,$font,$x,$y,$texte,$this->couleurs[$couleur]);
        }
        
        /**
         * Dessine un rectangle sur l'image (la couleur doit être présente dans le panel de l'image)
         * @param int $x1 abscisse du point haut, à gauche
         * @param int $y1 ordonnée du haut, à gauche
         * @param int $x2 abscisse du point bas, à droite
         * @param int $y2 ordonnée du point bas, à droite
         * @param string $couleur nom de la couleur dans le panel
         */
        public function tracerRectangle($x1,$y1,$x2,$y2,$couleur)
        {
                imagefilledrectangle($this->img,$x1,$y1,$x2,$y2,$this->couleurs[$couleur]);
        }
        
}


?>
