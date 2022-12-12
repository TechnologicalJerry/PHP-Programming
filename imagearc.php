<!DOCTYPEhtml>  
<html lang= "en ">  
<head>  
  <meta charse t= " UTF - 8 ">  
  <meta http - equiv= " X - UA - Compatible " content = " IE = edge ">  
  <meta name = " viewport " content = " width = device - width, initial - scale = 1 .0">  
  <title> PHP </title>  
</head>  
<body>  
<? php  
// to define the size of the image  
$image = imagecreatetruecolor(200, 200);  
// to define thecolor of the image  
$image-color-white = imagecolorallocate( $image, 255 , 255, 255 );  
$image-color-red = imagecolorallocate( $image, 255, 1, 1 );  
$image-color-green = imagecolorallocate( $image, 1, 255, 1 );  
$image-color-blue = imagecolorallocate( $image, 1, 1 , 255 );  
// imagearc function to display an arc inside a circle  
// head using arc   
Imagearc( $image, 101, 101, 201, 210, 0, 360, $image-color-white );  
//mouth using arc  
Imagearc( $image, 101, 101, 151 , 151 , 25, 155, $image-color-red );  
// eyes using arc  
Imagearc( $image, 61 , 76 , 51 , 51 ,  0 , 360 , $image-color-green );  
Imagearc( $image, 141 , 76 , 51 , 51 ,  0 , 360 , $image-color-blue );  
// to output the image in the browser  
header ( ' Content - type : image / png ');  
imagepng( $image);    
// to free the stored memory  
imagedestroy( $image);   
?>  
</body>  
</html>  