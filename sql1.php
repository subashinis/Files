<?php 
$R=mysql_connect("127.0.0.1","root","happy");
if(mysql_select_db("account",$R))
{
echo "i got u<p>";
$SQL = "INSERT INTO tbl_address_book(First_Name,Surname,Address)
 VALUES('Chris','Joe','World')";
$variable = mysql_query($SQL);
mysql_close($R);
}
else
{
echo "Where the hell is the database<p>";
}
?>