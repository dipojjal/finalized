<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "myfile.css" />
</head>
<body><!-- multistep form -->

<form id="msform" method="POST" action="loginProcess.php">
  
  <?php
  session_start();
  if(isset($_SESSION['is_logged_in'])){
  header('location: mainPage.php');
  }
  ?>
  
  <fieldset>
    <img src="Wipro_Logo_RGB.png" height="100px" width="150px"></br></br>
    <h1 class="fs-heading" >Login to your account</h1></br>
    <input type="text" name="username" placeholder=" Username"/><br/>
    <input type="password" name="password" placeholder="Password" /><br/>
    <input type="submit" name="Login" class="next action-button" value="Submit" /> <br/> <br/>
    <hr>
    <br/> 
    <h3 class="fs-title" >New User? <a href="signup.php">Sign Up</a></h3>
    <h3 class="fs-title" >Forgot Password? <a href="forgot.php">Click Here</a></h3>
 
 </fieldset>


</form>
</body>
</html>
