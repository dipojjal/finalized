<html lang="en">

<head>

	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wipro Product Management System</title>

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
                        <h4>Create Product</h4>
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
                        <h4>Update Product</h4>
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
                        <h4>Delete Product</h4>
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
                        <h4>Search Products</h4>
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
			    <h4>All Products</h4>
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
                    <div class="portfolio-caption">
                        <h4>Product Catalog</h4>
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
                    <h3 class="section-subheading text-muted">How Product Management System can be utlized</h3>
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
                                    <h4 class="subheading">Create Products</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">You can start by creating products and this way you have all your product offerings in your database.</p>
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
                                    <h4 class="subheading">Update Products</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">You can change or update your products if you need to because the products are already kept in the database.</p>
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
                                    <h4 class="subheading">View Products</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">You will be able to view all your products in a simple table list view or you can see your whole product catalog</p>
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
                                    <h4 class="subheading">Manage your products</h4>
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
    
	<?php include 'footer.php'; ?>

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
						  
<form name="create-product" action="createprod.php" method="POST">
<fieldset class="textt">
<h3>Create Product</h3><br />
<b>Product Name</b> 
<input type="text" name="name" placeholder="Enter Product Name"></br>

<b>Product Code</b>  
<input type="text" name="prodcode" placeholder="Enter Product code"></br>
				
<p><b>Product Family</b>
<select name="family">
<option value="">Select</option>
<option value="m">Medicare</option>
<option value="c">Commercial</option>
<option value="a">Aspire</option>
<option value="e">Education</option>
</select>
</p>

<b>isActive</b>  <input type="checkbox" name="isActive"></br>
</br>
			
<b>Product Country</b>  
<input type="text" name="country" placeholder="Enter Product Country"></br>
		
	<b>Product State</b>  
<input type="text" name="state" placeholder="Enter Product State"></br>	
			
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
							
<form name="updateForm" action="updateForm.php" method="POST">
<fieldset>
<legend><h3>Update Product</h3></legend>
<div>
<b>Product Code</b>

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
							
							<form action="deleteProduct.php" method="POST">
<fieldset>
<legend><h3>Delete Product</h3></legend>
<div>
<b>Product ID</b>

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
							
							<form name="search-prods" action="searchedProds.php" method="POST">



						<fieldset>

							<legend><h3>Search Product</h3></legend>

							<div>

							<b>Product ID</b>



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

	include 'connection.php'; //connect
	
 $result = pg_query($pg_conn, "SELECT Id, sfid, Name, isactive, productcode, description, country__c, state__c FROM salesforce.Product2");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
  echo"<div class=\"panel panel-default\">";
  
  echo"<div class=\"panel-heading\"><center><h1>View All Products</h1></center></div>";
  
  echo"<div class=\"panel-body\">";
  echo "<div class=\"container\"> <table class=\"table table-striped\">";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>SALESFORCE ID</th>";
  echo "<th>NAME</th>";
  echo "<th>ACTIVE</th>";
  echo "<th>PRODUCT CODE</th>";
  echo "<th>DESCRIPTION</th>";
  echo "<th>COUNTRY</th>";
  echo"<th>STATE</th>";
  echo "</tr>";
  
while ($row = pg_fetch_row($result)) {
  echo "<tr>";
  echo "<td>$row[0]</td>". "<td>$row[1]</td>". "<td>$row[2]</td>". "<td>$row[3]</td>". "<td>$row[4]</td>". "<td>$row[5]</td>". "<td>$row[6]</td>". "<td>$row[7]</td>";
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
<h2>Product Catalog</h2>
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
