<?php 
$name=$_POST['name'];
$pd=$_POST['password'];
$d=mysql_connect('127.0.0.1','root','happy');
if(mysql_select_db("account",$d))
{
$SQL = "SELECT First_Name,Surname FROM tbl_address_book WHERE (First_Name='$name' AND Surname='$pd')";
$result=mysql_query($SQL);
if($result)
{
if(mysql_num_rows($result)>0)
{
session_start();
$_SESSION['login']="1";
header("location:t.php");
}
else
{
session_start();
$_SESSION['login']="";
header("location:t2.php");
}
}}?>
