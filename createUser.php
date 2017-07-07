<?php

	$username= $_POST['username'];
	$password= $_POST['password'];
if(empty($username) || empty($password)){
echo "Please enter values in username and password fields";
}
else{
  
	function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1);
}
	
$pg_conn = pg_connect(pg_connection_string_from_database_url());
$pwd= md5($password);

$create = pg_query($pg_conn, "insert into salesforce.Heroku_User__c (username__c, Pass__c) values ('$username', '$pwd') ");

if(!$create){
  echo '<script language="javascript">';
  echo 'alert(\"User could not be created...\")';
  echo '</script>';
}

  else{
  echo '<script language="javascript">';
  echo 'alert(\"User created successfully...\")';
  echo '</script>';
    header('location: login.php');
  }

}
