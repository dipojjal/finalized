 <html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css" href = "myf.css" />
<style>

</style>
</head>
<body><!-- multistep form -->

<form id="msform" action="forgotPass.php">
  
  <fieldset>
    <img src="Wipro_Logo_RGB.png" height="100px" width="150px"></br></br>
    <h1 class="fs-heading" >Forgot Password?</h1></br>
    <h4 class="fs-heading">We are here to help you</h4><br/>
     <div class="form-group">
    <div class="form-group">
  <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue" ></i></span>
                        <!-- <input id="email" name="email" placeholder="email address" class="form-control"  type="email"> -->
           <input   style="width:250px;"  id="emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')"          onchange="try{setCustomValidity('')}catch(e){}" required="">

                        </div>
                      </div>
  </div>
 <div class="form-group">
                      
   <input  name="recover-submit" class="next action-button" value="Reset Password" type="submit"/> <br/>


                      </div>
                      
                    
  
    <hr>
    <br/> 
 
 </fieldset>


</form>
</body>
</html>
