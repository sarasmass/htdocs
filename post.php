<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Profe">
		<title></title>
		<style>
			body{
				background-color:#848484;
			}
			.main{
				background-color: #f2f2f2;
				margin: 5%;
				padding:5px;
				border-radius: 5px;
			}
			.center{
				margin: auto;
				width:30%;
				padding:10px;
				text-align:center;
			}
			label{
				text-align:left;
				display:block;
			}
			.input_text{
				width:99%;
			}

			table {
				border-collapse: collapse;
				width: 100%;
			}

			td, th {
				border: 1px solid gray;
				text-align: left;
				padding: 8px;
			}
			
		</style>
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
		<div class="main">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<div class="center">
					<label for="fname">Name:</label>
					<input type="text" name="fname" placeholder="Your name.." class="input_text">
				</div>
				<div class="center">
					<label for="email">Email:</label>
					<input type="text" name="email" class="input_text">
				</div>
				<div class="center">
					<label for="password">Password:</label>
					<input type="password" name="password" class="input_text">
				</div>
				<div class="center">
					<input type="submit">
				</div>
			</form>
		</div>
		<style>
			.asd{
				margin-left:20px;
			}
		</style>
		
		<div class="main">
			<div class="asd">
				<p>Nombres:<?php echo $name;?></p>
			</div>
			<div class="asd">	
				<p>Email:<?php echo $email;?></p>
			</div>
			<div class="asd">
				<p>Password:<?php echo $password;?></p>
			</div>
		
		</div>
			<?php print_r($_POST);?>
		<div class="main">
		<table>
			<caption>tabla</caption>
		
		</table>
		</div>
		<div class="main">
		<table>
			<thead>
				<tr>
					<th>nombre</th>
					<th>email</th>
					<th>contraseña</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				for($name='';$name='';$name--){
					echo '<tr>';
					for($email='';$email>='';$email--){
						
						echo '<td >'; 
					}
					echo '</tr>';
				}
			?>
			</table>
		</div>
	</body>
</html>