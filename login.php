<html>
	<head><title>Login- Wipro Product Management Sysem</title>
	<link rel = "stylesheet" type = "text/css" href = "myfile.css" />
	</head>
	
	<body>
	
<?php

session_start();

if(isset($_SESSION['user_email'])){

header('location: index.php');

}

else{

}

if(isset($_POST['login'])){

	$username= $_POST['username'];
	$password= $_POST['password'];

if(empty($username) || empty($password)){

echo "Please enter values in username and password fields";

}

else{

  $password= sha1($password);

	function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1);
}
$pg_conn = pg_connect(pg_connection_string_from_database_url());
$result = pg_query($pg_conn, "SELECT email__c, password__c FROM salesforce.Heroku_User__c where email__c= '$username' AND password__c= '$password' ");

if (!$result) {
  echo "An error occurred.\n";
  exit;
}

$rows = pg_num_rows($result);

if($rows > 0){

$_SESSION['is_logged_in']= true;
$_SESSION['user_email']= $username;

header('location: mainPage.php')

}

else{
echo'Username or password is wrong';
}

}

}

echo'<form name=\"login_form\" method=\"POST\" action=\"\">
  
  <fieldset>
    <img src=\"Wipro_Logo_RGB.png\" height=\"100px\" width=\"150px\"></br></br>
    <h1 class=\"fs-heading\">Login to your account</h1></br>
    <input type=\"text\" name=\"username\" placeholder=\"Username\"/><br/>
    <input type=\"password\" name=\"password\" placeholder=\"Password\" /><br/>
    <input type=\"submit\" name=\"login\" class=\"next action-button\" value=\"Submit\" /> <br/> <br/>
    <hr>
    <br/> 
    <h3 class=\"fs-title\" >New User? <a href=\"signup.html\">Sign Up</a></h3>
 
 </fieldset>

</form>
?>
</body>
</html>
