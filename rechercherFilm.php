<!DOCTYPE html>
<html lang="fr">
    <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >


	</head>

    <body>
		
		<?php
		
		$recherche = $_GET['recherche']
		
		?>
		
		<?php
		$found = FALSE;
		$lines = file("data/vod.csv");
		foreach($lines as $n => $line){
		if (stripos($line , $recherche) !== FALSE) {
		$found = TRUE;
		echo $line ;
		}
		}
		if ($found === FALSE){
			echo "not found";
		}
		
		
		
		?>
		
		
	</body>
</html>
