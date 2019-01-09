<?php
//CLASS ARCHER

class Archer extends Personnage
{

//CONSTRUCTEUR

public function __construct($name)
{
	parent::__construct($name);// "::"permet initialiser le personnage
	$this->vie /= 2; // 2 fois moons de vie ET 2 fois plus d'attaque;
}












}