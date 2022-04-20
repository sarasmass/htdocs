<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="sara">
		<title></title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<?php
		$name='';
		$email='';
		$password='';
		$anno='';
		$fav_language='';
		$perro=0;
		$gato=0;
		$cumple='';

		$save1=false;
		$save2=false;
		$save3=false;
		$save4=false;
		$save5=false;
		$save6=false;

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if(! empty($_POST['fname'])){
					$name = $_POST['fname'];
					$save1=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['email'])){
					$email = $_POST['email'];
					$save2=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['password'])){
					$password = $_POST['password'];
					$save3=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['anno'])){
					$anno = $_POST['anno'];
					$save4=true;
					//echo $name.'<br />';
				}
		
				if(! empty($_POST['fav_language'])){
					$fav_language = $_POST['fav_language'];
					$save5=true;
					//echo $name.'<br />';
				}
				if(! empty($_POST['perro'])){
					$perro = $_POST['perro'];
					//echo $name.'<br />';
				}
				if(! empty($_POST['gato'])){
					$gato = $_POST['gato'];
					//echo $name.'<br />';
				}
				if(! empty($_POST['cumple'])){
					$cumple = $_POST['cumple'];
					$save6=true;
					//echo $name.'<br />';
				}
			}
		?>
		<?php
            $save=false;
            if ($save1&$save2&$save3&$save4&$save5&$save6){
                $save=true;
            }
        ?>
        <div class="main">
			<div class="asd">
				<p style="background-color: <?php if (! $save1) {echo 'red';} else {echo'green';} ?>" >Nombres:<?php echo $name;?></p>
			</div>
			<div class="asd">	
				<p style="background-color: <?php if (! $save2) {echo 'red';} else {echo'green';} ?>">Email:<?php echo $email;?></p>
			</div>
			<div class="asd">
				<p style="background-color: <?php if (! $save3) {echo 'red';} else {echo'green';} ?>">Password:<?php echo $password;?></p>
			</div>
			<div class="asd">
				<p style="background-color: <?php if (! $save4) {echo 'red';} else {echo'green';} ?>">año:<?php echo $anno;?></p>
			</div>
			<div class="asd">
				<p style="background-color: <?php if (! $save5) {echo 'red';} else {echo'green';} ?>">codigo:<?php echo $fav_language;?></p>
			</div>
			<div class="asd">
				<p>alergia: <?php echo $perro?></p> 
				<p> <?php echo $gato?></p>
			</div>
			
			<div class="asd">
				<p style="background-color: <?php if(! $save6) {echo 'red';} else {echo'green';} ?>">cumple:<?php echo $cumple;?></p>
			</div>
		</div>
		<?php print_r($_POST); ?>
			  <?php print_r($_POST['cumple']); ?>
				<?php print_r(strtotime($_POST['cumple'])); ?>
        <br />
      
		<div class="main center">
            <?php
            if ($save){
            
                $usuarios = new SimpleXMLElement('db.xml', 0, true);
                $nuevoUsuario = $usuarios->addChild('user');
                $nuevoUsuario->addChild('name', $name);
                $nuevoUsuario->addChild('email',$email);
                $nuevoUsuario->addChild('password',$password);
				$nuevoUsuario->addChild('anno', $anno);
				$nuevoUsuario->addChild('fav_language',$fav_language);
				$nuevoUsuario->addChild('perro',$perro);
				$nuevoUsuario->addChild('gato',$gato);
				$nuevoUsuario->addChild('cumple',strtotime($cumple));
                $usuarios->saveXML('db.xml');
                //writ xml
                echo 'Gurdar datos';
                echo '<form method="POST"  action=.\tabla.php>
                <input type="submit" value="Enviar" class="bot1">
                </form>';
                }
                else{
                echo 'Volver al inicio'; 
                echo '<form method="POST" action=.\index.php>
                <input type="submit" value="Enviar" class="bot2">
                <input type="hidden" name="fname" value="'.$name.'">
				<input type="hidden" name="email" value="'.$email.'">
				<input type="hidden" name="password" value="'.$password.'">
				<input type="hidden" name="perro" value="'.$perro.'">
				<input type="hidden" name="gato" value="'.$gato.'">
				</form>';
                }
            ?>
        </div>
	</body>
</html>