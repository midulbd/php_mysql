<!doctype html>
<html>
<head>
<title>course entry</title>
</head>
<body>
<div>
	<?php
		$name = $_POST['name'];
		$connect = mysql_connect('localhost','root','');
		$db = mysql_select_db('ftfl',$connect);
		mysql_query("insert into teacher (name) values ('$name')");
		$result = mysql_query("select id from teacher where name = '$name' ");
		$teacher_id = mysql_fetch_array($result);
		$a = $student_id['s_id'];
		foreach($_REQUEST['title'] as $course_title)
		{
		$result = mysql_query("select c_id from courses where title = '$course_title' ");
		$course_id = mysql_fetch_array($result);
		$b = $course_id['c_id'];
		$query = "insert into mapping (student_id,course_id) values ('$a','$b')";
		$result = mysql_query($query);
		}
		if($result)
		{
		echo "Data inserted, thank you<br/>";
		}
		else
		{
		echo "Data already exists<br/>";
		}
    ?>
<br/><br/>
<a href="student.html">Student Entry</a><br/>
<a href="index.html">Home</a>
</div>
</body>
</html>