<?php

	$name= $_POST['name'];
	$username= $_POST['email'];
	$password= $_POST['password'];
	$about= $_POST['about'];
	
if(empty($name) || empty($username) || empty($password)){
echo "Please enter values in username and password fields";
}
else{
  
	function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1);
}
	
$pg_conn = pg_connect(pg_connection_string_from_database_url());
$pwd= md5($password);

$create = pg_query($pg_conn, "INSERT INTO salesforce.Heroku_User__c (name, username__c, Pass__c, about__c) VALUES ('$name', '$username', '$password', '$about');");

if(!$create){
  echo "User could not be created...";
}

  else{
  echo "User created successfully...";
  header('location: login.php');
  }

}
