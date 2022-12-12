<!DOCTYPE html>  
<html>  
<body>  
  
<?php  
// PHP code to demonstrate working of empty() function  
$var1 = 0;  
$var2 = 0.0;  
$var3 = "0";  
$var4 = NULL;  
$var5 = false;  
$var6 = array();  
$var7 = "";  
    
// for value 0 as integer  
empty($var1) ? print_r("True\n") : print_r("False\n");  
    
// for value 0.0 as float  
empty($var2) ? print_r("True\n") : print_r("False\n");  
    
// for value 0 as string  
empty($var3) ? print_r("True\n") : print_r("False\n");  
    
// for value Null  
empty($var4) ? print_r("True\n") : print_r("False\n");  
    
// for value false  
empty($var5) ? print_r("True\n") : print_r("False\n");  
    
// for array  
empty($var6) ? print_r("True\n") : print_r("False\n");  
    
// for empty string  
empty($var7) ? print_r("True\n") : print_r("False\n");  
    
// for not declare $var8  
empty($var8) ? print_r("True\n") : print_r("False\n");  
    
?>  
  
  
  
  
</body>  
</html>  