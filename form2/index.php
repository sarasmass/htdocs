<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Profe">
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
		$cumple='';
		$perro='0';
		$gato='0';
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
					$gato = $_POST['cumple'];
					//echo $name.'<br />';
				}
		
		
			}
		?>

		<div class="main">
			<form method="post" action="save.php">
				<div class="center">
					<label for="fname">Name:</label>
					<input type="text" name="fname" placeholder="Your name.." class="input_text" value="<?php echo $name;?>">
				</div>
				<div class="center">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Your email..." class="input_text" value="<?php echo $email;?>">
				</div>
				<div class="center">
					<label for="password">Password:</label>
					<input type="password" name="password" placeholder="Your password.."  class="input_text" value="<?php echo $password;?>">
				</div>

				<div class="center">
					<label for="anno">Años</label>
					<select id="anno" name="anno">
						<option value="0">1950-1980</option>
						<option value="1">1981-2000</option>
						<option value="2">2001-2020</option><br /><br /><br /><br />
						<option disabled selected value=""></option>
					</select>
				</div>
	
				<div class="center">
				<p> preguntaaaaa</p>
				  <input type="radio" id="html" name="fav_language" value="HTML">
				  <label for="html">HTML</label><br>
				  <input type="radio" id="css" name="fav_language" value="CSS">
				  <label for="css">CSS</label><br>
				<input type="radio" id="javas" name="fav_language" value="JAVAS">
				 <label for="javas">JAVAS</label><br>
				</div> 

				<div class="center">
					<p>alergia</p>
				<input type="checkbox" id="perro" name="perro" value="1" <?php if($perro==1) {echo'checked';}?>>
					<label for="perro"> perro </label><br>
					<input type="checkbox" id="gato" name="gato" value="1" <?php if($gato==1) {echo'checked';}?>>
					<label for="gato"> gato</label><br><br>
				
			<label for="cumple">Birthday:</label>
  			<input type="date" id="cumple" name="cumple" min="2022-01-01" max="2022-12-31"><br /><br /><br /><br />

				<input type="reset"><br /><br />
				<input type="submit">
				</div>
			</form>
		</div>

	</body>
</html>