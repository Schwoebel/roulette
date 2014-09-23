<?php 

if(isset($_POST['action']) && !empty($_POST['action'])) {
	if($_POST['action'] == 'getRandom'){
		random_number($_POST['number']);die;	
	}
}

function print_roulette_options($array, $count){
	if($count == 0){
		echo '<ul class="selection">';		
	} 

	if($count == count($array)){
		echo '</ul>';
	} else {
		echo '<li ><input type="radio" id="option_' . $array[$count] . '" name="roulette-option" value="' . $array[$count] . '"><label for="option_' . $array[$count] . '"><span class="number">' . $array[$count] . '</span></label></li>';
		$count++;
		print_roulette_options($array, $count);
	}

}

function random_number($selection){
	$random_number_min = 0;
	$random_number_max = isset($_POST['selection_size']) ? $_POST['selection_size'] : 6;
	echo $selection == mt_rand($random_number_min, $random_number_max) ? 1 : 0;
}


?>