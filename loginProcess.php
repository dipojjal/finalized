<?php

session_start();



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
$pwd= sha1($password);
$result = pg_query($pg_conn, "SELECT username__c, password__c FROM salesforce.Heroku_User__c where sha1(password__c)= '$pwd' ");

$rows = pg_num_rows($result);

if($rows > 0){

$_SESSION['is_logged_in']= true;
$_SESSION['user_email']= $username;

header('location: mainPage.php');

}

else{
echo'Username or password is wrong';
}

}
