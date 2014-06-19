<?php
$file=fopen("test.txt","r");
while(!feof($file))
{$r=fgets($file);
echo $r;
}
fclose($file);
?>