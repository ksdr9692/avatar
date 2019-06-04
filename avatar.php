<?php

class Avatar{
	public $endurance, $mastery; 
	private $baseHp, $attack;
	
	function __construct($endurance, $mastery)
	{
		$this->setHp($endurance);
		$this->setDmg($mastery);
	}

	public function setHp(int $endurance) : void
	{
		$hp = 100;
		$this->endurance = $endurance;
		$this->baseHp = $hp + ($endurance * rand(1, $endurance));
	}

	public function displayHp() : int
	{
		return $this->baseHp ;
	}

	public function setDmg(int $mastery) : void
	{
		$this->mastery = $mastery;
		$this->attack = 10 * rand(1, $mastery);
	}
	public function displayDmg() : int
	{
		return $this->attack;
	}

}


class fight extends Avatar{
	public $dp;

	function __construct(int $baseHp, int $attack) {
		parent:: __construct($baseHp, $attack);
		$this->game($baseHp, $attack);
	}

	public function game(int $baseHp, int $attack) : void
	{
		$this->baseHP = $baseHp;
		$this->attack  = $attack;		
		$this->dp =  $baseHp - $attack;
	}

	public function displayFight() :  int
	{
		return $this->dp;
	}
}

// $player_1= new Avatar(3, 8);
// $player_2= new Avatar(4, 9);
// $hp_1= $player_1->displayHp();
// $atk_1= $player_1->displayDmg();
// $test= new fight($hp_1, $atk_1);


// echo $hp_1, ' ' . $atk_1;


// echo $test->displayFight();



// 	function __construct(int $atk) : void
// 	{
// 		$this->atk = $atk;
// 	}

// }
?>