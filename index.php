<?php
	require 'tools.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Order your Christmas tree in Vail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Call us and we will take your Christmas tree to your address in Vail in just 48 hours you just enjoy your vacation call us 970-471-3312">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="http://vailbutler.com/images/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header></header>
    <main>
    	<section class="container-fluid">
    		<div class="row align-items-center">
    			<div class="col-md-8  col-sm-12">
    				<h1>Order your Christmas Tree <br>Today!</h1>
    				<h3>$195.00</h3>
    				<b>Delivery & Stand Included</b>
    				<h3>6-7 FT Fresh Cut Christmas Tree</h3>
    				<p>Questions? <span>call us 970-471-3312</span></p>
    			</div>
    			<div class="col-md-4 col-sm-12">
    				<div class="row">
    					<div class="col-12">
    						<h2>Place your order now</h2>
    					</div>
    				</div>
    				<form method="post">
    					<div class="row">
    						<div class="col-6">
    							<div class="form-group">
							    	<input type="text" name="first_name" class="form-control" placeholder="*First Name" required>
							  	</div>
    						</div>
    						<div class="col-6">
    							<div class="form-group">
							    	<input type="text" name="last_name" class="form-control" placeholder="*Last Name" required>
							  	</div>
    						</div>
    					</div>
					  	<div class="row">
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="email" class="form-control" placeholder="*Email Address" required>
							  	</div>
					  		</div>
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="phone" class="form-control" placeholder="*Phone" required>
							  	</div>
					  		</div>
					  	</div>
					  	<div class="form-group">
					    	<textarea name="shipping" rows="3" class="form-control" placeholder="*Shipping Address" required></textarea>
					  	</div>
					  	<div class="row">
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="apartment" class="form-control" placeholder="Apartment">
							  	</div>
					  		</div>
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="city" class="form-control" value="Denver" placeholder="*City" required>
							  	</div>
					  		</div>
					  	</div>
					  	<div class="row">
					  		<div class="col-12">
					  			<div class="form-group">
							    	<input type="number" name="zip" class="form-control" placeholder="*Zip Code" required>
							  	</div>
					  		</div>
					  	</div>
					  	<div class="row">
					  		<div class="col-12">
					  			<div class="form-group">
					  				<textarea class="form-control" name="notes" rows="2" placeholder="Notes For Delivery Driver"></textarea>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="row">
					  		<div class="col-12">
					  			<div class="form-group">
					  				<p>*How did you Hear About Us</p>
					  				<select name="stand" required class="form-control">
					  					<option value="Acoma UDR Apartment">Acoma UDR Apartment</option>
					  					<option value="16th Street Mall">16th Street Mall</option>
					  					<option value="Website">Website</option>
					  					<option value="Wash Park (Gaylord Street)">Wash Park (Gaylord Street)</option>
					  				</select>
					  			</div>
					  			<div class="form-group">
					  				<input type="submit" value="Send" name="send">
					  			</div>
					  			<p>*Orders must be placed 48 hrs. in advance<br>
								Please allow three days for delivery. Delivery charges may apply if you are more than 10 miles from Denver’s 16th Street Mall. </p>
					  		</div>
					  	</div>
					</form>
    			</div>
    		</div>
    	</section>
    </main>
    <footer></footer>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64257742-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-64257742-13');
	</script>
  </body>
</html>