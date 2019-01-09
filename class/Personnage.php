<?php

//les METHODES (ici on déclare)

class Personnage 
//les attributs des personnages

{
 /**
 *@var string  nom du personnage
 */
 protected $name;

/**
*@var int nombre de vie
*/
protected $vie = 80;

 /**
 *@var int nombre d'attaque
*/
protected $attaque = 20;

/**
 *@var int nombre armure
*/

protected $armure = 10;
/**
*@var int point d'armure
*/

protected $pointsMagic = 1; //points de magie

// IMPORTANT : le constructeur 
public function __construct($name)
{
	$this->name = $name;   //le personnage sur lequel j'agis
}

public function getVie()
{ 
// les get et set sont toujours public
	//GET : accéder à un attribut qui n'existe pas ou auquel on n'a pas accès.
return $this->vie;
}

/**
*@param $pv int 
*/
public function setVie($pv){ //set je donne des vies
	$this->vie = $pv;
}

public function getName() //get je prends le nom
{
	return $this ->name;
}

 //heal = régénérer
// rendre toute ses vies à mon personnage

public function heal($pv = null)


{
	if($pv == null){
		$this->vie = 100;

	}else{
		$this->vie += $pv;

	}

  }

  /**
  * permet d'attaquer un autre personnage et de lui retirer des pv
  * @param $cible est un objet personnage
  */
  public function attaque ($cible)
  {
  		if($cible->isDead()){
  			echo $cible->getName() . "est déjà morte <br>";
  		
  		}else{ //si la cible est vivante on peut attaquer
  		$degat = $this->attaque + rand(0,5); //addition de l'attaque + 1 valeur entre 0 et 5)

  		$cible->vie -= ($degat - $cible->armure); // on retire le nombre de points d'attaque
  		$cible->empecherPvNegatif();
  	if($cible->isDead()){
  		echo $this->name . "a tué" . $cible->name . "<br>";
  		
  		}
 
	}
}

	protected function empecherPvNegatif()
	{
		if($this->vie < 0){
			$this->vie = 0;
		}
	}


	protected function isDead()
	{
		if($this->vie <= 0)
		{
			return true;
		}else{
			return false;
		}

		
	

	}
}






















