<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title> Titulo Pagina</title>
		<meta name="author" content="Sara Secall">
		<meta name="description" content="free Web tutorials">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
	</head>
	<body>
		<h1>¡Start!</h1>
		<?php
		/*
		$a=1; INT
		$a1=2;
		$a2=2.3; FLOAT
		$b='hola';STRING
		$c='hola'; 
		echo $b.$c;
		*/
		/*
		echo '<ul>';
		$num1=1;
		$num2=1; 
		while($num2<=10) {
			echo'<li>'.$num1+$num2++.'</li>';
			} 
		echo '</ul>';
		echo'<p>hola</p>';
		?>
		*/
				echo'<ul>';
				for ($i = 1; $i < 10; $i++) {
					if($i>4){
					echo'<li>'.$i.'</li>';
					}
				}
				echo '</ul>';
					
		?>
		<h1>¡Finish!</h1>
		
	</body>
</html>