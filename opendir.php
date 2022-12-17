<?php
$dir = "/images/";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename:" . $file . "<br>";
        }
        closedir($dh);
    }
}
