<?php
$number = $_GET['number'];
$hola = $_GET['hola'];
if ($_SERVER["REQUEST_METHOD"] == "GET") { {
    if ($number >  $hola) {
      echo "es mayor "  .  $number;
    } else if ($number < $hola) {
      echo "es mayor" . $hola;
    } else if ($number == $hola) {
      echo "son iguales";
    }
  }
}

?>

<div>
  <p><?php echo $number  . "/" . $hola . "=" . $number / $hola; ?></p>
</div>