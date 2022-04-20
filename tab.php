<!doctype html>
<html lang="es">

<head>
    <style>
        td {
            background-color: red;
            height: 20px;
            width: 20px;
        }
    </style>
</head>


<body>

    <?php

    function foo($relleno, $dias)
    {
        echo '<table>
                <thead>
                    <tr>
                        <th>Lun</th>
                        <th>Mar</th>
                        <th>Mie</th>
                        <th>Jue</th>
                        <th>Vie</th>
                        <th>Sab</th>
                        <th>Dom</th>
                    </tr>';


        $a = 1;
        for ($colum = 2; $colum <= 39; $colum++) {
            if ($colum < 5) {
                echo '<td></td>';
            } elseif ($colum % 8 == 1)
                echo '</tr>';
            else {
                echo '<td>' . $a++ . '</td>';
            }
        }
        echo '</thead>
                </table>';
    }
    foo(1, 15);
    echo '<br />';
    echo '<hr />';
    echo '<br />';
    foo(3, 31);
    /*function foo($relleno, $dias)
            {
                echo '<tr>';
                for ($i = 0; $i < $relleno; $i++) {
                    echo '<td>' .  '</td>';
                }
            }

            foo(3, 31);*/
    ?>



</body>