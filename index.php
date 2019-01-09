<?php 


//on appelle le fichier Personnage.php (moule principal) ici on exécute
require "class/Personnage.php";
require "class/Archer.php"; //héritage on appelle Archer
require "class/Mage.php";
require "class/Guerrier.php";

//création "objet" type personnage (micky et harry) INSTANCIATION
// INSTANCE = objet

$perso1 = new Personnage("Simon"); 
$perso2 = new Personnage("Fabrice"); 
$perso3 = new Archer ("Laurie");
$perso4 = new Mage ("Fabrice");
$perso5 = new Guerrier ("James");

droDump($perso1);
droDump($perso2);
droDump($perso3);
droDump($perso4);
droDump($perso5);

//echo '<pre>' . var_export($perso3, true) . '</pre>';
//echo '<pre>' . var_export($perso4, true) . '</pre>';
//echo '<pre>' . var_export($perso5, true) . '</pre>';


//echo "Vol vie";

	
	//$perso4->volVie($perso3);

//echo '<pre>' . var_export($perso4, true) . '</pre>';
//echo '<pre>' . var_export($perso3, true) . '</pre>';

//NEW permet de créer une instance
//echo '<pre>' . var_export($perso1, true) . '</pre>';
//echo '<pre>' . var_export($perso2, true) . '</pre>';
//echo '<pre>' . var_export($perso3, true) . '</pre>';

//perso2 donne moi ton nom
//echo $perso2->getName() . "a" . $perso2->getVie() . "points de vie <br>";
//echo "Fabrice à" . $perso2->getVie() . "points de vie <br>";

//echo "Heal";
//$perso2->heal(14);
//echo '<pre>' . var_export($perso2, true) . '</pre>';

//for($i = 0; $i < 5; $i++){
	//echo "Fabrice attaque Danielle <br>";
	//$perso2->attaque($perso1);
	//echo "Danielle vie : ". $perso1->getVie(). "<br>";
//}


// créer un paramètre pour aller plus vite
function droDump($var){
	echo '<pre>' . var_export($var, true) . '</pre>';
}