<html>
<body>
    <?php
        /*function juan (){}*
        function cosa ($x,$y){
        return $x+$y;
        }
        echo cosa(3,1);
        echo '<br />';
        echo
        cosa(5,1);
        echo 'juan';*/
        $token='0123'; /* todos */
        $date='22-03-28';/* comprobacion porlinea */
        function encrypt ($txt,$token){
            $t=date ('y.m.d');
            $tokenizer=$token.$txt.$t;
            $hash=hash('gost',$token.$txt.$t, false);
            return $hash;
        }
        echo encrypt('enrique@gmail.com',$token, date('y.m.d')).' enrique@gmail.com';
        echo '<br />';
        echo encrypt('enrique@gmail.com',$token, $date). 'enrique@gmail.com';
        echo '<br />';
        echo encrypt('holo',$token,date('y.m.d')).'holo';
            ?>
</body>
</html>