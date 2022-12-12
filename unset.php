<?php  
    $var1 = 'test';  
    $var2 = 'another test';  
    if (isset($var1) && isset( $var2)) {  
        echo "It will print because variables are set. </br>";  
        var_dump (isset($var1));  
        var_dump (isset($var2));  
    }  
    unset ($var1);  
    unset ($var2);  
    echo "</br> </br>Variables after unset: </br>";  
    var_dump (isset($var1));  
    var_dump (isset($var2));
