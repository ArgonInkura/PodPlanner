<?
	$json = file_get_contents('http://api.eve-central.com/api/route/from/Jita/to/Rens');
	$route = json_decode($json);
	echo count($route);
	
?>