<?php
include "avatar.php";

if(isset($_GET["submit"])){
	// $connection = mysqli_connect("localhost", "root", "", "");
	$char_name_1 = $_GET["char_name_1"];
	$char_element_1 = $_GET["char_element_1"];
	$char_mastery_1 = $_GET["char_mastery_1"];
	$char_endurance_1 = $_GET["char_endurance_1"];
	var_dump($char_endurance_1);
	$char_name_2 = $_GET["char_name_2"];
	$char_element_2 = $_GET["char_element_2"];
	$char_mastery_2 = $_GET["char_mastery_2"];
	$char_endurance_2 = $_GET["char_endurance_2"];
	
	// $query = 
	// "INSERT INTO character (char_name, char_element, char_mastery, char_endurance) 
	// VALUES ('$char_name', '$char_element', '$char_mastery', '$char_endurance'";

	// $result = mysqli_query($connection, $query);

	// if(!result){
	// 	die("Query Failed" . mysqli_error());
	// }
}

	// $char_attribute_1 = new Avatar($char_endurance_1, $char_mastery_1);
	// $char_attribute_2 = new Avatar($char_endurance_2, $char_mastery_2);	
	// $char_hp_1= $char_attribute_1->displayHp();

	
	// $char_atk_1= $char_attribute_1->displayDmg();
	// $char_hp_2= $char_attribute_2->displayHp();
	// $char_atk_2= $char_attribute_2->displayDmg();
	// $char_dmg_1= new fight($char_hp_1 , $char_atk_2);
	// $char_dmg_2= new fight($char_hp_2 , $char_atk_1);


	// if($char_dmg_1->displayFight() > $char_dmg_2->displayFight()){
	// 	echo $char_name_1 . 'wins!';
	// }
	// else{
	// 	echo $char_name_2 . 'wins!';
	// }
	// if($char_mastery_1 > 0){
	// echo $char_mastery_1;
	// }



?>
<!DOCTYPE html>

<html>
<head>
	<title>Avatar Battle Arena</title>
</head>

<body>
	<h1>AVATAR BATTLE ARENA</h1>
	<form 
	action="index.php"
	method="get" 
	>
	<div id="first">
	<h4>First Character</h4>

	
		<label for="name">Name</label>
		<input 
		type="text" 
		value="<?=isset($_GET['char_name_1']) 
		? $_GET['char_name_1'] 
		: ' ' ?>"
		name="char_name_1"
		placeholder="Enter Character's Name"><br>
		
		<label for="char_element_1">Element</label>
		<select name="char_element_1">
			<?php
				$charElement_1 = ['Air', 'Earth', 'Fire', 'Water'];

				foreach ($charElement_1 as $element_1) 
				{
					if(isset($_GET['char_element_1']) && $element_1 == $_GET['char_element_1']){
						echo '<option selected>' .$element_1. '</option>';
					}
					else{
						echo '<option>' .$element_1. '</option>';
					}
				}
				?>
		</select><br>

		<label for="char_mastery_1">Mastery</label>
		<select name="char_mastery_1">
			<?php
				$charMastery_1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

				foreach ($charMastery_1 as $mastery_1) {
					if(isset($_GET['char_mastery_1']) && $mastery_1 == $_GET['char_mastery_1']){
						echo '<option selected>' .$mastery_1. '</option>';
					}
					else{
						echo '<option>' .$mastery_1. '</option>';
					}
				}
				?>				
		</select><br>

		<label for="char_endurance_1">Endurance</label>
		<select name="char_endurance_1">
			<?php
				$charEndurance_1 = [1, 2, 3, 4, 5];

				foreach ($charEndurance_1 as $endurance_1) {
					if(isset($_GET['char_endurance_1']) && $endurance_1 == $_GET['char_endurance_1']){
						echo '<option selected>' .$endurance_1. '</option>';						
					}
					else{
						echo '<option>' .$endurance_1. '</option>';
					}
				}
			?>
		</select><br>
	</div>
	<div>
		<h4>Second Character</h4>
		<label for="name">Name</label>
		<input 
		type="text" 
		value="<?=isset($_GET['char_name_2']) 
		? $_GET['char_name_2'] 
		: ' ' ?>"
		name="char_name_2"
		placeholder="Enter Character's Name"><br>
		
		<label for="char_element_2">Element</label>
		<select name="char_element_2">
			<?php
				$charElement_2 = ['Air', 'Earth', 'Fire', 'Water'];

				foreach ($charElement_2 as $element_2) 
				{
					if(isset($_GET['char_element_2']) && $element_2 == $_GET['char_element_2']){
						echo '<option selected>' .$element_2. '</option>';
					}
					else{
						echo '<option>' .$element_2. '</option>';
					}
				}
				?>
		</select><br>

		<label for="char_mastery_2">Mastery</label>
		<select name="char_mastery_2">
			<?php
				$charMastery_2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

				foreach ($charMastery_2 as $mastery_2) {
					if(isset($_GET['char_mastery_2']) && $mastery_2 == $_GET['char_mastery_2']){
						echo '<option selected>' .$mastery_2. '</option>';
					}
					else{
						echo '<option>' .$mastery_2. '</option>';
					}
				}
				?>				
		</select><br>

		<label for="char_endurance_2">Endurance</label>
		<select name="char_endurance_2">
			<?php
				$charEndurance_2 = [1, 2, 3, 4, 5];

				foreach ($charEndurance_2 as $endurance_2) {
					if(isset($_GET['char_endurance_2']) && $endurance_2 == $_GET['char_endurance_2']){
						echo '<option selected>' .$endurance_2. '</option>';						
					}
					else{
						echo '<option>' .$endurance_2. '</option>';
					}
				}
			?>
		</select><br>
	</form>

	</div>

		<br><button
		type="submit"
		name="submit"
		value="submit">Fight
			
		</button>
	<?php
	
	?>

	</form>
</body>

</html>