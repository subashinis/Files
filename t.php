<?php 
session_start();
if(!(isset($_SESSION['login'])&&$_SESSION['login']!=""))
{header("location:t2.php");}
else
echo "Hello";
?>
<html>
<p>
<A HREF="t2.php">logout</A>
</html>