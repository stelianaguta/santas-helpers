<?php
 include_once('common.php');	
 $first_name = mysql_real_escape_string($_POST['first_name']);
 $last_name = mysql_real_escape_string($_POST['first_name']);
 $username = mysql_real_escape_string($_POST['username']);
 $birth_day = mysql_real_escape_string($_POST['birth_day']);
 $skills = mysql_real_escape_string($_POST['skills']);
 $password = mysql_real_escape_string($_POST['password_first']);
 $password = md5($password);

 $full_name = $username;
 
 $query = "INSERT into users(first_name, last_name, username, birth_day, skills, password) values('$first_name', '$last_name', '$username', '$birth_day', '$skills', '$password')";
 $result = mysql_query($query);
 header('location:thanks.php?full_name='.$full_name);
		
?>