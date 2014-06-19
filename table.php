<?php
$database=mysql_connect('127.0.0.1','root','happy');
$db = mysql_select_db("account",$database);
if ($db) {

$SQL = "INSERT INTO tbl_address_book (First_Name, Surname, Address) VALUES ('susan', 'gates', 'james colony')";

$result = mysql_query($SQL);

mysql_close($database);

print "Records added to the database";

}
else {

print "Database NOT Found ";
mysql_close($database);

}

?>