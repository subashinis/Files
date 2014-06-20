<?php
$name=$_POST['name'];
$password=$_POST['password'];
$d=mysql_connect('127.0.0.1','root','happy');
if(mysql_select_db("account",$d))
{
echo "found db<P>";
$SQL = "SELECT First_Name,Surname FROM tbl_address_book WHERE (First_Name='$name' AND Surname='$password')";
$result=mysql_query($SQL);
if($result)
{
echo "i am in<P>";
$rows=	mysql_num_rows($result);
if($rows>0)
echo "hai<P>";
else
echo "error<P>";
}
else 
echo "  error ;";
}
else 
echo "db not found";
?>