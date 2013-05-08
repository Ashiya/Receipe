<?php
class AddReceipe
{ 
function insert($title,$name,$ingridents,$procedure,$givenby)
{
$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$x=0;
$sql="insert into receipe(receipetitle,receipename,receipeingridents,receipeprocedure,receipegivenby,likereceipe) values('$title','$name','$ingridents','$procedure','$givenby','$x')";
mysql_query($sql,$con);
}
function  searchreceipes()
{
$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$sql="select * from receipe";
$result=mysql_query($sql,$con);
if(mysql_num_rows($result)==0)
{
echo "there is no  recipe";
}
else
{
echo "<table border><tr><th>Receipe Title</th><th>Receipe Name</th><th>Details</th>
</tr>";
while($row = mysql_fetch_array($result))
{ 
echo "<tr>";
echo "<td>" . $row['receipetitle'] . "</td>";
echo "<td>" . $row['receipename'] . "</td>";
echo "<td><a href='showdetails.php?id=$row[id]'>Details</a></td>";
echo "</tr>";
}
echo "</table>";
}
}

function specificreceipe($id)
{
$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$sql="select * from receipe where id='$id'";
$result=mysql_query($sql,$con);

echo "<table border='1'>";
$row = mysql_fetch_array($result);
echo "<tr><th>Receipe Title</th>";
echo "<td>" . $row['receipetitle'] . "</td></tr>";
echo "<tr><th>Receipe Name</th><td>" . $row['receipename'] . "</td></tr>";
echo "<tr><th>Receipe Ingridents</th><td>" . $row['receipeingridents'] . "</td></tr>";
echo "<tr><th>Receipe Procedure</th><td>" . $row['receipeprocedure'] . "</td></tr>";
echo "<tr><th>Receipe Given By</th><td>" . $row['receipegivenby'] . "</td></tr>";
echo "<tr><th>Delete</th><td><a  href='deletereceipe.php?id=$row[id]' name='delete'>Delete</a></td></tr>";
echo "<tr><th>Like</th><td><a  href='likereceipe.php?id=$row[id]' name='delete'>Like</a></td></tr>";
echo "<tr><th>Share</th><td><a href='http://www.facebook.com/sharer.php?u=http://localhost:8080/ashiya/receipe/showdetails.php?id=$row[id]'>share </a></td>";
echo "</tr>";
echo "</table>";
}
function deletereceipe($id)
{
$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$sql="select receipename  from receipe where id='$id'";
$row=mysql_query($sql,$con);
$result=mysql_fetch_array($row);
$name=$result['receipename'];
$sql="delete  from receipe where id='$id'";
mysql_query($sql,$con);
 echo " you have deleted ".$name."";
echo "<br>";
echo"<a href='index.php'>Go Back</a>";

}
function likereceipe($id)
{

$con=mysql_connect("localhost","root","admin");
mysql_select_db("db_receipe",$con);
$sql="select receipename, likereceipe from receipe where id='$id'";

$result=mysql_query($sql,$con);
$row=mysql_fetch_array($result);
echo " you and ".$row['likereceipe']." people like ".$row['receipename']." recipe";
$x=$row['likereceipe'];
$x=$x+1;
$sql1="update receipe set likereceipe='$x' where id='$id'";
mysql_query($sql1,$con);
echo "<br>";
echo"<a href='index.php'>Go Back</a>";

}
}
?>

 
