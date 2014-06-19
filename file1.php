<?php 
$e=realpath("test.txt");
echo "Absolute path is $e <p>";
$r=dirname("C:\xampp\htdocs\tutorials\test.txt");
echo "Directory is $r <p>";
$b=basename("test.txt");
echo "File name is $b";
?>