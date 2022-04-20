
    <?php
    $name='';
	$email='';
	$password='';
    $save1=false;
	$save2=false;
	$save3=false;
			if ($_SERVER["REQUEST_METHOD"] == "GET") {
				if(! empty($_GET['nombre'])){
					$name = $_GET['nombre'];
					$save1=true;
					//echo $name.'<br />';
				}
				if(! empty($_GET['email'])){
					$email = $_GET['email'];
					$save2=true;
					//echo $name.'<br />';
				}
				if(! empty($_GET['password'])){
					$password = $_GET['password'];
					$save3=true;}
            }
					//echo $name.'<br />';
     ?>
    <?php
            $save=false;
            if ($save1&$save2&$save3){
                $save=true;
            }
    ?>
        <div >
			<div>
				<p> Nombre:<?php echo $name;?></p>
			</div>
			<div>	
				<p>Email:<?php echo $email;?></p>
			</div>
			<div>
				<p>Password:<?php echo $password;?></p>
			</div>
            <?php print_r($_GET); ?>
            <?php
                 $token = 'mytoken';
                 $datexml='date';
                function encrypt($txt, $token1, $t)
                {
                $tokenizer = $token1 . $txt . $t;
                $hash = hash('gost', $tokenizer, false);
                return $hash;
                }
                ?>
            <?php
            if ($save){
                $usuarios = new SimpleXMLElement('tt.xml', 0, true);
                $nuevoUsuario = $usuarios->addChild('user');
                $nuevoUsuario->addChild('name', $name);
                $nuevoUsuario->addChild('email',encrypt($email, $token, $datexml));
                $nuevoUsuario->addChild('password',encrypt($password, $token, $datexml));
                $usuarios->saveXML('tt.xml');
                echo 'Guardar datos';
            
                }
                else{
                    echo 'Volver al inicio'; 
                }      
                ?>
            
         <!--   $token = 'mytoken';

function encrypt($txt, $token1, $t)
{
  $tokenizer = $token1 . $txt . $t;
  $hash = hash('gost', $tokenizer, false);
  return $hash;
}
encrypt($password, $token,)-->
