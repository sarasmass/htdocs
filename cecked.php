<?php
cosa(25);

function cosa($edad)
{
    $guardado = '';
    if ($edad > 17) {
        $guardado = 'mayor de edad';
    } else {
        $guardado = 'menor de edad';
    }
    return $guardado;
}

assert(cosa(17) == 'menor de edad');
assert(cosa(18) == 'mayor de edad');
assert(cosa(-18) == 'numero invalido');
