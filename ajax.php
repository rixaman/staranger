<?php

$points = $_POST['points'];

if (file_exists('score.json')) {
	$score = file_get_contents('score.json');
	$score = json_decode($score, true);
	$score[] = $points;
	$score = json_encode($score, true);
} else {
	$score[] = $points;
	$score = json_encode($score, true);
}
file_put_contents('score.json', $score);

echo 'yeah';




// die();

// if ($p=="record") 
// {
// 	$json = $p;

	// file_put_contents('score.json', $json);

	// if (isset($json)) 
	// {
	// 	for ($i=0; $i<count($json); $i++)
	// 	{
	// 		if ($json[$i][name]==$myjson[name])
	// 		{
	// 			$json[$i][score]=$myjson[score]; 	
	// 			//замена
	// 			$revers = true;
	// 		}
	// 	}
	// }

	// if ($revers==false) 
	// {
	// 	$json[] = $myjson;
	// }

	// asort($json);
	// reset($json);

	// $putjson = json_encode($json);
	// file_put_contents('score.json', $putjson);

	// if (isset($json)) 
	// {
	// 	echo $putjson;
	// } else 
	// {
	// 	echo "error";
	// }
// }
?>