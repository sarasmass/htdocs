<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET['number'])) {
        $number = $_GET['number'];

        if ($number > 0 && $number < 16) {
            echo "<H3> Edad: "  .  $number . "<br /> es menor de edad";
        } else if ($number >= 18 && $number < 180) {
            echo "<H3> Edad: " . $number . "<br /> es mayor de edad";
        } else if ($number >= 16 & $number <= 17) {
            echo "<H2> Tiene algunos derecho <br />" . "Edad:" . $number;
        } else if ($number > 180 || $number < -1) {
            echo "<H2> no valido";
        }
    } else {
        echo "<H2> vacio";
    }
}

/*<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (!empty($_GET['number'])) {
    $number = $_GET['number'];
    if ($number < 150 && $number > 0) {
      if ($number < 16) {
        echo "<h1> es menor de edad";
      } else if ($number > 16 && $number < 18) {
        echo "<h1> tiene algunos derechos";
      } else {
        echo "<h1> es mayor de edad";
      }
    } else {
      echo "no valido";
    }
  } else {
    echo "<h1> no puedes dejarlo vacio";
  }
}
 */