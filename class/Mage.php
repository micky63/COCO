<?php
//CLASS MAGE

class Mage extends Personnage
{

	
//CONSTRUCTEUR

public function __construct($name)
{
	parent::__construct($name);// "::"permet initialiser le personnage
	$this->name = "Magic" . $this->name;
	$this->attaque =10;
	$this->vie = 60;
	$this->pointsMagic = 15;
	 
}

/**
*permet de voler des points de vie à l'adversaire
*@param $cible objet personnage ou enfant
*/

 public function volVie ($cible) //voler des vies
{
 	$cible->vie -= $this->attaque;
 	$this->vie += $this->attaque;
 	
 	}

 	public function healTarget($cible)//regener points magic
 	{
 	$cible->vie += $this-> pointsMagic;

 	}

 	}
