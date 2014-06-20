<?php
$database=mysql_connect('localhost','root','happy');
$db=mysql_select_db('account',$database);
if($db)
{
echo "found";
$SQL="CREATE TABLE contacts
(
ID int(7) NOT NULL auto_increment,
First-Name VARCHAR(30) NOT NULL,
Last_Name VARCHAR(30) NOT NULL,
Phone-No. INT(11) NOT NULL,
PRIMARY KEY(ID)
)";
$variable = mysql_query($SQL);
ECHO "CREATED";
mysql_close($database);
}
ELSE 
{
ECHO "DB not found";
mysql_close($database);
}
?>