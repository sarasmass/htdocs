<!DOCTYPE html>
<html>
	<head>
		<style>
			table, th, td{
				border:1px solid black;
				text-align:left;
			}
			table{
				border-collapse:collapse;
				width:100%;
			}
			th, td{
				padding:15px;
				margin:0px;
			}
			.colorinchis_blue{
				background-color:blue;
			}
			.colorinchis_green{
				background-color:green;
			}
		</style>
	</head>
	<body>
		
		<table>
			<caption>tabla</caption>
			<?php 
				for($name=10;$name>=0;$name--){
					echo '<tr>';
					for($email=10;$email>=0;$email--){
						echo '<td ';

						echo  '<td>'.$nombre - .$email.'</td>';
					}
					echo '</tr>';
				}
			?>
		</table>
	</body>
</html>