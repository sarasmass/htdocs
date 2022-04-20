
    <?php
    $hola = array();
    foreach (range('a', 'z') as $letra) {
        echo $letra;
        array_push($hola, $letra);
    }
    echo '<br/><br/>';
    print_r($hola);
    echo '<br/>';
    echo '<ul>';
    for ($i = 0; $i < count($hola); $i++) {
        echo '<li>' . $hola[$i] . '</li>';
    }
    echo '</ul>';
    echo '<br/>';
    echo count($hola);
    echo '<br/>';
    echo '<ul>';
    $g = '';
    for ($i = 0; $i < count($hola); $i++) {
        $g = $g . $hola[$i];
        echo '<li>' . $g . '</li>';
    }
    echo '</ul>';
    echo '<br/>';
    echo '<ul>';
    $g = '';
    for ($i = count($hola) - 1; $i > 0; $i--) {
        $g = $g . $hola[$i];
        echo '<li>' . $g . '</li>';
    }
    echo '</ul>';
