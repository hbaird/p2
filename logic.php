<?php


$words = array('cat', 'dog', 'bird', 'fish',
				'flower','lizard','frog','worm',
				'fly','rock','tree','bush',
				'pond','swan','butterfly','mushroom',
				'leaf','house','broom','deer',);

$rand_keys = array_rand($words, $_POST['number_of_words']);

$password = '';

$i = 0; 

foreach ($rand_keys as $rand_key => $word) {


	if ($i == 0) {
		$password .= "$words[$word]";
	}
	else {
		$password .= "-$words[$word]";
	}


	$i++;
}

$add_number = isset($_POST['add_number']) ? $_POST['add_number'] : '';

if ($add_number == 'on') {
	$number = rand(0,100);
	$password .= "$number";
}

$symbols = array('!', '@', '#', '$', '%', '^', '&', '*');

$rand_symbol = array_rand($symbols, 1);

$add_symbol = isset($_POST['add_symbol']) ? $_POST['add_symbol'] : '';
if ($add_symbol == 'on') {

	$password .= "$symbols[$rand_symbol]";	
}

$uppercase_first = isset($_POST['uppercase_first']) ? $_POST['uppercase_first'] : '';
if ($uppercase_first = 'on'){

	$password = ucfirst($password);
}