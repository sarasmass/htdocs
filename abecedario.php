
    <?php

    $hola = array();
    foreach (range('a', 'z') as $letra) {
        echo $letra;
        array_push($hola, $letra);
    }
    echo '<br/><br/>';
    print_r($hola);
    echo '<br/><br/>';
    //echo count($hola);
    echo '<ul>';
    for ($i = 0; $i < count($hola); $i++) {
        //echo $i;

        echo '<li>' . $hola[$i] . '</li>';
    }
    echo '</ul>';
    echo '<br/><br/>';
    echo '<ul>';
    $guardar = '';
    for ($i = 0; $i < count($hola); $i++) {
        //echo $i;
        $guardar = $guardar . $hola[$i];
        echo '<li>' . $guardar . '</li>';
    }
    echo '</ul>';
    echo '<br/><br/>';
    echo '<ul>';
    $guardar = '';
    for ($i = count($hola) - 1; $i > 0; $i--) {
        //echo $i;
        $guardar = $guardar . $hola[$i];
        echo '<li>' . $guardar . '</li>';
    }
    echo '</ul>';
    

    
/*
    echo "<ul>";
    echo count($letra)

    foreach (range('a', 'z') as $letra) {
        echo "<li> " . $letra . "</li>";
    }
    echo '<br/><br/>';
    for ($letra = 'a';; $letra++) {
        if ($letra > 'z') {
            break;
        }
        echo "<ul>";
        echo "<li>" . $letra . "</li>";
    }
*/