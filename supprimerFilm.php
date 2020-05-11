<!DOCTYPE html>
<html lang="fr">
    <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >


	</head>

    <body>
		
		<?php
		
		$supprimer = $_GET['supprimer']
		
		?>
		
		<?php
		$found = TRUE;
		$lines = file("data/vod.csv");
		foreach($lines as $n => $line){
		if (stripos($line , $supprimer) !== FALSE) {
		$found = FALSE;
		echo "supprimer" ;
		}
		}
		if ($found === TRUE){
			echo "Film non recensé";
		}
		
		
		
		?>
		
		
	</body>
</html>

