<!DOCTYPE html>
<html lang="fr">
    <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
		<link rel="stylesheet" href="style/vod.css" />

	</head>

    <body>
		
		<table>
			<td>
		<?php
		
		
		$film = $_GET['film'];
		$date = $_GET['date'];
		$realisateur = $_GET['realisateur'];
		
		
		$file = "data/vod.csv" ;
		
		$current = file_get_contents($file);
		
		$current .= $film . ":" . $date . ":" . $realisateur  ;
		
		file_put_contents($file , $current) ;
		
		
		echo $current ;
		
		?>
			</td>
		</table>
		
	</body	
</html>	
