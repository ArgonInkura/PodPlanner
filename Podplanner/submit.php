<?
	include 'stationlist.php';
	$dest = $_POST['dest'];
	$corp = $_POST['corp'];
	
	
	$systemlist = $stationList[$corp];
	foreach($systemlist AS $i => $system){
		
		$json = file_get_contents('http://api.eve-central.com/api/route/from/'.$system.'/to/'.$dest);
		$route = json_decode($json);
		$result[$i] = count($route);
	}
	
	asort($result);
	foreach($result AS $i => $jumps){
		echo $systemlist[$i]." : ".$jumps." Jumps <br />";
	}
	
?>
	