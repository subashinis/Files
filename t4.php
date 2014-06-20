<?php
$name=$_POST['name'];
$pd=$_POST['password'];
$add=$_POST['add'];
$pd1=strlen($pd);
$name1=strlen($name);
if($name1>3)
{
if($pd1>2)
{
$d=mysql_connect('127.0.0.1','root','happy');
if(mysql_select_db("account",$d))
{
$SQL = "SELECT First_Name FROM tbl_address_book WHERE (First_Name='$name' )";
$result=mysql_query($SQL);
if($result)
{
if(mysql_num_rows($result)>0)
echo "username already exists";
else
{
$SQL="INSERT INTO tbl_address_book (First_Name,Surname,Address) VALUES ('$name','$pd','$add')";
$result=mysql_query($SQL);
mysql_close($d);
session_start();
$_SESSION['l']="1";
header("location:t2.php");
}
}}}
else
echo "password must be 3 characters long";
}
else 
echo "User name must be 4 characters long";
?>