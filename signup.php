<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "myfile.css" />
</head>
<body><!-- multistep form -->

<form id="msform" method="POST" action="createUser.php">
  
  <fieldset>
    <img src="Wipro_Logo_RGB.png" height="100px" width="150px"></br></br>
    <h1 class="fs-heading" >Sign up</h1></br>
    <input type="text" name="First Name" placeholder=" Enter your first name" required/><br/>
    <input type="text" name="Last Name" placeholder="Enter your last name" required/><br/>
    <input type="text" name="Email" placeholder="Enter your email address" required/><br/>
    <textarea name="About" placeholder="About your self" ></textarea><br/>
    <input type="button" name="Login" class="next action-button" value="submit" /> <br/> <br/>
    <hr>
    <br/> 
   <h3 class="fs-title" >Already a user? <a href="login.php">Login</a></h3>
 
 </fieldset>


</form>
</body>
</html>