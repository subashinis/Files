<?php
$database=mysql_connect('localhost','root','happy');
$db=mysql_select_db('account',$database);
$SQL="UPDATE  tbl_address_book SET Address='home' WHERE First_Name="Test" AND Surname="Name"";
$variable = mysql_query($SQL);
mysql_close($database);
?>