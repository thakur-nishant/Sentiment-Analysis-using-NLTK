<html>
<head>
<title>Connecting MySQL Server</title>

 <style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
$q = intval($_GET['q']);
$result=0;
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"senti");
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error($conn));
   }

   echo 'Connected successfully';

$sql="SELECT * FROM review where m_id='100'";
$result = mysqli_query($conn,$sql);
if($result)
{
echo "<table>";
while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>";
echo $row['data'];
echo "</td>";
echo "<td>";
echo $row['date'];
echo "</td>";

echo "<td>".$row['r_id']."</td>";
echo "</tr>";
}
echo"</table>";
}else {
    echo 'Invalid query: ' . mysqli_error() . "\n";
    
}
   mysqli_close($conn);
?>
</body>
</html>
