<!DOCTYPE html>  
<html>  
<body>  
  
<?php  
$path = "D:\software\Autoplay\langdata\en_US/myfirstPHPfile.php";  
echo " a ) ";  
echo basename($path, ".php");  
  
$path = "D:\software\Autoplay\langdata\en_US/mySecondPHPfile.php";  
echo " b ) ";  
echo basename($path);  
  
$path = "software/Autoplay/langdata/en_US";  
echo " c ) ";  
echo basename($path);  
  
$path = "software/Autoplay/langdata";  
echo " d ) ";  
echo basename($path, ".php");  
  
$path = "software/Autoplay";  
echo " f ) ";  
echo basename($path, ".php");  
  
$path = "software";  
echo " g ) ";  
echo basename($path, ".php");  
  
$path = "D:";  
echo " h ) ";  
echo basename($path, ".php");  
  
$path = ".";  
echo " i ) ";  
echo basename($path, ".php");  
  
$path = "/";  
echo " j ) ";  
echo basename($path, ".php");  
  
  
$path = "D:\software\Autoplay\langdata\en_US/mySecondPHPfile.php";  
echo " k ) ";  
print_r(pathinfo($path));  
  
?>  
  
</body>  
</html>  