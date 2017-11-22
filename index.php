<?php
	require 'tools.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header></header>
    <main>
    	<section class="container-fluid">
    		<div class="row align-items-center">
    			<div class="col-8">
    				<h1>Order your Christmas Tree <br>Today!</h1>
    				<h3>$150.00</h3>
    				<b>Delivery & Stand Included</b>
    				<h3>3-4 FT Fresh Cut Christmas Tree</h3>
    				<p>Questions? <span>call us 970-471-3312</span></p>
    			</div>
    			<div class="col-4">
    				<div class="row">
    					<div class="col-12">
    						<h2>Place your order now</h2>
    					</div>
    				</div>
    				<form method="post">
    					<div class="row">
    						<div class="col-6">
    							<div class="form-group">
							    	<input type="text" name="first_name" class="form-control" placeholder="*First Name">
							  	</div>
    						</div>
    						<div class="col-6">
    							<div class="form-group">
							    	<input type="text" name="last_name" class="form-control" placeholder="*Last Name">
							  	</div>
    						</div>
    					</div>
					  	<div class="row">
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="email" class="form-control" placeholder="*Email Address">
							  	</div>
					  		</div>
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="phone" class="form-control" placeholder="*Phone">
							  	</div>
					  		</div>
					  	</div>
					  	<div class="form-group">
					    	<textarea name="shipping" rows="3" class="form-control" placeholder="*Shipping Address"></textarea>
					  	</div>
					  	<div class="row">
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="apartment" class="form-control" placeholder="Apartment">
							  	</div>
					  		</div>
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="city" class="form-control" value="Denver" placeholder="*City">
							  	</div>
					  		</div>
					  	</div>
					  	<div class="row">
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="number" name="zip" class="form-control" placeholder="*Zip Code">
							  	</div>
					  		</div>
					  		<div class="col-6">
					  			<div class="form-group">
							    	<input type="text" name="payment" class="form-control" placeholder="*Payment Information">
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
					  				<textarea class="form-control" name="stand" rows="2" placeholder="*How did you Hear About Us"></textarea>
					  			</div>
					  			<div class="form-group">
					  				<input type="submit" value="Send" name="send">
					  			</div>
					  			<p>*Orders must be placed 48hrs. in advance</p>
					  		</div>
					  	</div>
					</form>
    			</div>
    		</div>
    	</section>
    </main>
    <footer></footer>
  </body>
</html>