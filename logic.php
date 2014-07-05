 <?php

$words = array('cat', 'dog', 'bird', 'fish',
				'flower','lizard','frog','worm',
				'fly','rock','tree','bush',
				'pond','swan','butterfly','mushroom',
				'leaf','house','broom','deer',);

$rand_keys = array_rand($words, 4);

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




