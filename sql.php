<?php
$U=mysql_connect("127.0.0.1","root","happy");
if(mysql_select_db("account",$U))
{
$SQL="SELECT * FROM tbl_address_book";
$db=mysql_query($SQL);
while($db1=mysql_fetch_assoc($db))
{
echo $db1['ID'];
echo $db1['First_Name'];
echo $db1['Surname'];
echo $db1['Address'];echo '<p>';
}

}
else 
echo "Baby!!Where are u baby !! Moms here";
?>