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
		$save1=false;
		$save2=false;
		$save3=false;
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
			}
		?>
		<?php
            $save=false;
            if ($save1&$save2&$save3){
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
		</div>
        <br />
      
		<div class="main center">
            <?php
            if ($save){
            
                $usuarios = new SimpleXMLElement('db.xml', 0, true);
                $nuevoUsuario = $usuarios->addChild('user');
                $nuevoUsuario->addChild('name', $name);
                $nuevoUsuario->addChild('email',$email);
                $nuevoUsuario->addChild('password', $password);
                $nuevoUsuario->addChild('time', time());
                //var_dump($usuarios->user[2]);
                //var_dump($usuarios);
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
				</form>';

                }
            ?>
        </div>
	</body>
</html>