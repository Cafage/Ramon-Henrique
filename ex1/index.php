<?php
$location = array();

$location[0]['capital'] = "Brasília";
$location[0]['pais'] = "Brasil";

$location[1]['capital'] = "Washington";
$location[1]['pais'] = "EUA";

$location[2]['capital'] = "Madrid";
$location[2]['pais'] = "Espanha";

$location[3]['capital'] = "Buenos Aires";
$location[3]['pais'] = "Argentina";

$location[4]['capital'] = "Ottawa";
$location[4]['pais'] = "Canada";

sort($location);

foreach ($location as $value)  {
	echo "A capial do(a) ".$value['pais']." e ".$value['capital']."<br/>";
}


