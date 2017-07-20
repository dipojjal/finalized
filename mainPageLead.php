<html lang="en">

<head>

	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wipro Lead Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">


    <!-- Custom fonts for this template -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="agency.css" rel="stylesheet">
    <link href="prod-cust.css" rel="stylesheet" type="text/css">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }


    </style>

		</head>

<body id="page-top">
	
	<?php
	session_start();
	
	if(!isset($_SESSION['is_logged_in'])){
	header('location: index.php');
	}
	
	?>
	
<!-- Bootstrap core JavaScript -->		
    <script src="jquery.min.js"></script>		
    <script src="tether.min.js"></script>		
    <script src="bootstrap.min.js"></script>		
    
    <!-- Plugin JavaScript -->		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>		
    <!-- Contact form JavaScript -->		
    <script src="jqBootstrapValidation.js"></script>		
    <script src="contact_me.js"></script>		

    <!-- Navigation -->
	
	<?php include 'header.php';?>
	
    <!-- Services -->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Salient Features</h2>
                    <h3 class="section-subheading text-muted">Have a look at our salient features</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Mobile Friendly</h4>
                    <p class="text-muted"> All of the design is mobile friendly and can we used with any type of device. Be it a desktop, laptop, tablet, or a mobile phone. Our service uses bootstrap technology to adapt to the screen size rendering the perfect UI every time.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"> </i>
                        <i class="fa fa-window-close fa-stack-1x fa-inverse"> </i>
                    </span>
                    <h4 class="service-heading">No Nitty Gritty</h4>
                    <p class="text-muted">It is a service that uses pure Salesforce+Heroku. Here we have utlised pure PHP, Salesforce, Heroku Postgres and Heroku Connect which run on the Heroku platform. No CMS like wordpress has been used here.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Security</h4>
                    <p class="text-muted">All data is kept secure in multiple databases in multiple servers. So, if anything happens with one server, you can always get the data from another server.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu -->
    <section class="bg-faded" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Menu</h2>
                    <h3 class="section-subheading text-muted">Manage your products...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-5x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/create.png" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Create Lead</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-retweet fa-5x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/update.png" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Update Lead</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-trash fa-5x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/delete.png" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Delete Lead</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-5x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/search.png" alt="">
                    </div>
                    <div class="portfolio-caption">
                        <h4>Search Lead</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-th-list fa-5x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/all_prods.png" alt="">
                    </div>
                    <div class="portfolio-caption">
			    <h4>All Leads</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <div class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-usd fa-5x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/catalog.png" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Process</h2>
                    <h3 class="section-subheading text-muted">How Lead Management System can be utlized</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/create-products.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Step 1</h4>
                                    <h4 class="subheading">Create Lead</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">You can start by creating leads and this way you have all your product offerings in your database.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/update-products.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Step 2</h4>
                                    <h4 class="subheading">Update Leads</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">You can change or update your leads if you need to because the products are already kept in the database.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/view-products.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Step 3</h4>
                                    <h4 class="subheading">View Leads</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">You will be able to view all your leads in a simple table list view or you can see your whole product catalog</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about/manage-products.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Step 4</h4>
                                    <h4 class="subheading">Manage your leads</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Now you can track, manage, view, create, update delete or do anything with the database of products</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Share your catalog with everyone!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-faded" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
                        <h4>Sunil Patwal</h4>
                        <p class="text-muted">Project Manager</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/sunil.patwal.54"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
                        <h4>Nikhil Sharma</h4>
                        <p class="text-muted">Admin</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/dNikSTheGreat"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
                        <h4>Dipojjal Chakrabarti</h4>
                        <p class="text-muted">SPOC</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/dipojjal"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="col-sm-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/4.jpg" alt="">
                        <h4>Anu Goyal</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/anu.goyal.359"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/5.jpg" alt="">
                        <h4>Pooja Bhimrav Kanse</h4>
                        <p class="text-muted">Developer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/pooja.kanse2"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/6.jpg" alt="">
                        <h4>Aditya Kalra</h4>
                        <p class="text-muted">UI Designer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/adikalra3"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/7.jpg" alt="">
                        <h4>Surabhi Rastogi</h4>
                        <p class="text-muted">UI Designer</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/surabhi.rastogi1"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help & Support -->
    <section id="help">

<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Help & Support</h2>
                    <h3 class="section-subheading text-muted">Let us know what you're interested in...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                <form action="https://webto.salesforce.com/servlet/servlet.WebToCase?encoding=UTF-8" method="POST">

                <div class="row">
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <input  id="first_name" class="form-control" maxlength="40" name="first_name" size="20" type="text" placeholder="Your First Name *" required data-validation-required-message="Please enter your first name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                </div>
</div>

				<input type=hidden name="orgid" value="00D6A000000sm1O">
				<input type=hidden name="retURL" value="http://www.prod-mgmt.com/case_thankyou.php">


				<div class="row">
                            <div class="col-md-6">

                <div class="form-group">
                <input id="last_name" class="form-control" maxlength="40" name="last_name" size="20" type="text" placeholder="Your Last Name *" required data-validation-required-message="Please enter your first name."/>
                </div>
                </div>
                </div>

				<div class="row">
                            <div class="col-md-6">

                <div class="form-group">
                <input id="email" class="form-control" maxlength="40" name="email" size="20" type="text" placeholder="Email" />
                </div>
                </div>
                </div>

				<div class="row">
                            <div class="col-md-6">
                <div class="form-group">
                <input id="phone" class="form-control" maxlength="40" name="phone" size="20" type="text" placeholder="Phone" />
                </div>
                </div>
                </div>

                <div class="row">
                            <div class="col-md-6">
                <div class="form-group">
				<input id="subject" class="form-control" maxlength="40" name="subject" size="20" type="text" placeholder="Subject" />
                </div>
                </div>
                </div>  

                <div class="row">
                            <div class="col-md-6">
                <div class="form-group">
				<textarea name="description" class="form-control" placeholder="Description"></textarea>
                </div>
                </div>
                </div>



<input type="hidden" id="external" name="external" value="1" />

<button type="submit" name="submit" class="btn btn-xl">Submit Query</button>

</form>

        </div>
    </section>

    <!-- Contact -->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Let us know what you're interested in...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    <form id="contactForm" name="sentMessage" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" novalidate>

                    <input type=hidden name="oid" value="00D6A000000sm1O">
					<input type=hidden name="retURL" value="http://prod-mgmt.com/thankyou.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input  id="first_name" class="form-control" maxlength="40" name="first_name" size="20" type="text" placeholder="Your First Name *" required data-validation-required-message="Please enter your first name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                                <div class="form-group">
                                    <input  id="last_name" class="form-control" maxlength="80" name="last_name" size="20" type="text" placeholder="Your Last Name *" required data-validation-required-message="Please enter your last name." />
                                </div>

                                <div class="form-group">
                                	<input id="email" class="form-control" maxlength="80" name="email" size="20" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <input id="company" class="form-control" maxlength="40" name="company" size="20" type="text" placeholder="Your Company Name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                
                                <div class="form-group">
                                    <input id="mobile" class="form-control" maxlength="40" name="mobile" size="20" type="text" placeholder="Your mobile *" required data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>

                            </div>
                            
                            <div class="col-md-6">

                            	

                                <div class="form-group">

                                    <select  id="industry" class="form-control" name="industry">
                                    <option value="">--Select Industry--</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Apparel">Apparel</option>
									<option value="Banking">Banking</option>
									<option value="Biotechnology">Biotechnology</option>
									<option value="Chemicals">Chemicals</option>
									<option value="Communications">Communications</option>
									<option value="Construction">Construction</option>
									<option value="Consulting">Consulting</option>
									<option value="Education">Education</option>
									<option value="Electronics">Electronics</option>
									<option value="Energy">Energy</option>
									<option value="Engineering">Engineering</option>
									<option value="Entertainment">Entertainment</option>
									<option value="Environmental">Environmental</option>
									<option value="Finance">Finance</option>
									<option value="Food &amp; Beverage">Food &amp; Beverage</option>
									<option value="Government">Government</option>
									<option value="Healthcare">Healthcare</option>
									<option value="Hospitality">Hospitality</option>
									<option value="Insurance">Insurance</option>
									<option value="Machinery">Machinery</option>
									<option value="Manufacturing">Manufacturing</option>
									<option value="Media">Media</option>
									<option value="Not For Profit">Not For Profit</option>
									<option value="Recreation">Recreation</option>
									<option value="Retail">Retail</option>
									<option value="Shipping">Shipping</option>
									<option value="Technology">Technology</option>
									<option value="Telecommunications">Telecommunications</option>
									<option value="Transportation">Transportation</option>
									<option value="Utilities">Utilities</option>
									<option value="Other">Other</option>
									</select>


                                <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <input id="employees" class="form-control" name="employees" size="20" type="text" value="" placeholder="Number of employees in your company" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <textarea name="description" class="form-control" placeholder="Your query"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button class="btn btn-xl" type="submit">Send Message</button>
                            </div>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
                    <span class="copyright">Copyright &copy; Wipro Product Management System 2017</span>
        </div>
    </footer>

    <!-- Portfolio Modals -->

   <div class="modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
						  
<form name="create-lead" action="createlead.php" method="POST">
<fieldset class="textt">
<h3>Create Lead</h3><br />
<b>Lead Name</b> 
<input type="text" name="name" placeholder="Enter Lead Name"></br>

<b>Lead Id</b>  
<input type="text" name="leadcode" placeholder="Enter Lead Id"></br>
				
<p><b>Status</b>
<select name="None">
<option value="">Open-Not Contacted</option>
<option value="m">Working-Contacted</option>
<option value="c">Closed-Converted</option>
<option value="a">Closed-Not Converted</option>
</select>
</p>

 <b>First Name</b> 
<input type="text" name="fname" placeholder="Enter Lead FirstName"></br>

<b>Last Name</b>  
<input type="text" name="lname" placeholder="Enter Lead LastName"></br>

<b>Company</b> 
<input type="text" name="company" placeholder="Enter Company"></br>

<b>Email</b>  
<input type="text" name="email" placeholder="Enter Email"></br>


<b>Push To Heroku</b>  <input type="checkbox" name="isActive"></br>
</br>
			
<b>Country</b>  
<input type="text" name="country" placeholder="Enter Country"></br>
		
	<b>State</b>  
<input type="text" name="state" placeholder="Enter State"></br>	
			
<b>Description</b>  </br><br/>
<textarea name="description" rows="5" cols="40"></textarea>
</br></br>

<div class="modal-footer">
	
	 <button class="btn btn-primary" type="submit"><span>Submit</span></button>
	 <button class="btn btn-primary"  type="reset"><span>Reset</span></button>
     
	</div>
</fieldset>

</form>
	

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							
							<form>
<fieldset>
<legend><h3>Update Lead</h3></legend>
<div>
<b>Lead Id</b>

<input type="text" name="search" placeholder="Search.." align=right>

<div class="modal-footer">
	 <button class="btn btn-primary" type="submit"><span>Update</span></button>
</fieldset>

</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							
							<form>
<fieldset>
<legend><h3>Delete Lead</h3></legend>
<div>
<b>Lead ID</b>

<input type="text" id="s" name="search" placeholder="Search..">
<div class="modal-footer">
 <button class="btn btn-primary"><span>Delete</span></button>


</fieldset>

</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							
							<form name="search-leads" action="searchedleads.php" method="POST">



						<fieldset>

							<legend><h3>Search Lead</h3></legend>

							<div>

							<b>Lead NAME</b>



							<input type="text" name="search" placeholder="Search..."/>


							<div class="modal-footer">
							 <button class="btn btn-primary" type="submit"><span>Search</span></button>

						</fieldset>



					</form>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                
                                <div class=\"panel-heading\"><center><h2>All Products</h2></center></div>
<div style="clear:both; font-size=60px">Hello, php starts here</div>
<?php
include('connection.php'); //connect				    
 $result = pg_query($pg_conn, "select Id, sfid, street, numberofemployees, name, firstname, lastname, email,  status, city, state, company, country, CreatedDate, description, Push_To_Heroku__c FROM salesforce.leads_archive;");

if (!$result) {
  echo "An error occurred.\n";
  exit;
}
  echo"<div class=\"panel panel-default\">";
  
  echo"<div class=\"panel-heading\"><center><h1>View All Leads</h1></center></div>";
  
  echo"<div class=\"panel-body\">";
  echo "<div class=\"container\"> <table class=\"table table-striped\">";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>SALESFORCE ID</th>";
  echo "<th>NAME</th>";
  echo"<th>FIRSTNAME</th>";
  echo"<th>LASTNAME</th>";
  echo"<th>EMAIL</th>";
  echo"<th>STATUS</th>";
  echo "<th>CITY</th>";
  echo"<th>STATE</th>";
  echo "<th>COMPANY</th>";
  echo "<th>COUNTRY</th>";
  echo "<th>CREATED DATE</th>";
  echo "<th>DESCRIPTION</th>";
  echo"<th>PUSH TO HEROKU</th>";
  echo "</tr>";
  
while ($row = pg_fetch_row($result)) {
  echo "<tr>";
  echo "<td>$row[0]</td>". "<td>$row[1]</td>". "<td>$row[2]</td>". "<td>$row[3]</td>". "<td>$row[4]</td>". "<td>$row[5]</td>". "<td>$row[6]</td>". "<td>$row[7]</td>". "<td>$row[8]</td>". "<td>$row[9]</td>". "<td>$row[10]</td>". "<td>$row[11]</td>". "<td>$row[12]</td>". "<td>$row[13]</td>". "<td>$row[14]</td>";
  echo "</tr>";
}
  echo "</table>";
  echo "</div>";
  echo"</div>";
  echo"</div>";  

  echo "</div>";

echo '</div>';

echo '</div>';

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
				    <div style="clear:both; font-size=60px">Hello, php ends here</div>
<!-- Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="close-modal" data-dismiss="modal">
<div class="lr">
<div class="rl">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8 offset-lg-2">
<div class="modal-body">
<!-- Project Details Go Here -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Custom scripts for this template -->
<script src="agency.min.js"></script>
</body>

</html>
