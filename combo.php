<?php 
$link=mysql_connect("localhost","root",""); 
mysql_select_db("blackmonkey",$link); 
echo"<select name=ncombo1 id=combo1>"; 

$sql="SELECT nombre FROM clientes"; 
$result=mysql_query($sql); 
$i=0; 
while ($row=mysql_fetch_row($result)) 
{ 
echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
} 
echo "</select>"; 
?> 