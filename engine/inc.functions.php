<?php
//sitewide functions

function userSuggest($users, $gameData) {
	foreach ($users as $user) {
		$platforms[] = $user['platform'];
	}
	//$platforms now defines the array which contains the user platforms to 
	//search for
	
	$recommendation = array();
	foreach ($gameData as $game) {
		
		if(count(array_intersect($game['platform'], $platforms)) == count($platforms)){
			// all of $platforms is in $game
			$recommendation[] = $game['title'];
		}
	}
	
	//now cleanup the $output
	$output = '';
	if ($recommendation) {
		foreach ($recommendation as $title) {
			$output .= $title . ', ';
		}
		return $output;
	} else 
		return "Cards :-(";
		
}

?>