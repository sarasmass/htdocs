<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Profe">
		<title> </title>
        <link rel="stylesheet" href="style.css">
			
	</head>
    <body>
       <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Año</th>
                    <th>LLenguaje</th>
                    <th>Alergia</th>
                    <th>Alergia</th>
                    <th>Cumple</th>
                </tr>
            </thead>

             <?php
    
			if(!$xml = simplexml_load_file('db.xml')){
				echo "No se ha podido cargar el archivo";
			} else {
				foreach ($xml as $user){
					echo '<tr>';
					echo '<td>' .$user->name.'</td>';
					echo '<td>' .$user->email.'</td>';
                    echo '<td>' .$user->password.'</td>';
                    echo '<td>' .$user->anno.'</td>';
                    echo '<td>' .$user->fav_language.'</td>';
                    echo '<td>' .$user->perro.'</td>';
                    echo '<td>' .$user->gato.'</td>';
                    echo '<td>' .date('d-m-Y',intval($user->cumple)).'</td>';
                    echo '</tr>';
                    
				}
			}
            ?>

         </table>
     </body>
 </html>