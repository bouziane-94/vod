<!DOCTYPE html>
<html lang="fr">
    <head>
		
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 
	 <link rel="stylesheet" href="style/vod.css" />
	 
    </head>
    
    <body>
		
		<strong>Liste des films </strong>  
		
		<table>
			
			<td>
				
			
		<?php
		
		$lines = file("data/vod.csv");
		
		foreach($lines as $l => $line){
			
			echo $line . "<br/>" ;
			
		}
		
		?>
				
			</td>
			
		</table>
    
    
    </body>
</html>
