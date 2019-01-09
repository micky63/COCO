<?php
//GUERRIER


class Guerrier extends personnage
{
public function __construct($name)
{
	parent::__construct($name);// "::"permet initialiser le personnage
	
	$this->attaque =25;
	$this->vie = 200;
	$this->armure = 15;
	

	}
}