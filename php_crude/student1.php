
<?php 

$name = $_POST["name"];
$course = $_POST["course"];

echo $name.' '.$course;

mysql_connect('localhost','root','');
$conn = mysql_select_db('ftfl');

$sql = mysql_query("INSERT into studen1(name,course) values('$name','$course')");

if($sql){
echo 'data inserted';
}

?>