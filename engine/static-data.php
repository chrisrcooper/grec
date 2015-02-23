<?php
//STATIC DATA EXAMPLES BEFORE DB HOOKUP

//build an array of simple game data
//to be retrieved via DB later


$users[] = [
	'name'			=> 'Chris',
	'platform'		=> 'PC',
];
$users[] = [
	'name'			=> 'Grant',
	'platform'		=> 'PC',
];

$gameData[] = [
	'title' 		=> 'Borderlands 2',
	'platform'		=> ['Mac', 'PC'],
	'genre'			=> 'FPS',
];
$gameData[] = [
	'title' 		=> 'DOTA 2',
	'platform'		=> ['Mac', 'PC'],
	'genre'			=> 'Hero',
];
$gameData[] = [
	'title' 		=> 'GoldenEye',
	'platform'		=> ['N64'],
	'genre'			=> 'FPS',
];
$gameData[] = [
	'title' 		=> 'Minecraft',
	'platform'		=> ['PC'],
	'genre'			=> 'Open World',
];
?>