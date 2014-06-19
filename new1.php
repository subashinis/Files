<?php
$file=fopen("test.txt","w");
$in ="Let me enter sth to u .I am subashini  ";
fwrite($file,$in);
fclose($file);
echo "file entered & written to";
?>