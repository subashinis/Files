<?php 
$file=fopen("C:\Users\God\Documents\Book1.csv","r");
while(!feof($file))
{
$file1=fgetcsv($file);
echo "<p> $file1[0]";
echo "  $file1[1]";
echo "  $file1[2]";
}fclose("C:\Users\God\Documents\Book1.csv");
?>