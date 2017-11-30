<?php
if(isset($_POST['send'])) {

		$email_to = "ingluisfelipe07@gmail.com, contact@vailbutler.com";

		$email_subject = "Contacto desde longtimenotree.com";

		$email_from = "longtimenotree@longtimenotree.com";


		$email_message = "Contacto desde Longtimenotree.com\n\n";

		$email_message .= "First Name: " . $_POST['first_name'] . "\n";
		$email_message .= "Last Name: " . $_POST['last_name'] . "\n";
		$email_message .= "Email: " . $_POST['email'] . "\n";
		$email_message .= "Phone: " . $_POST['phone'] . "\n";
		$email_message .= "Shipping Address: " . $_POST['shipping'] . "\n\n";
		$email_message .= "Apartment: " . $_POST['apartment'] . "\n";
		$email_message .= "City: " . $_POST['city'] . "\n";
		$email_message .= "Zip Code: " . $_POST['zip'] . "\n";
		$email_message .= "Payment information: " . $_POST['payment'] . "\n\n";
		$email_message .= "Notes For Delivery Driver: " . $_POST['notes'] . "\n\n";
		$email_message .= "How did you Hear About Us: " . $_POST['stand'] . "\n\n";

		$email_message2 = "Dear ".$_POST["first_name"].",

		Thank you for your Christmas Tree order!

		Deliveries are scheduled for every Tuesday and Friday up until Christmas day.

		We will call you shortly to set up the delivery and take your payment. 

		Thanks and Happy Holidays!

		970-471-3312

		JJ@VailButler.com

		www.longtimenotree.com";

		$headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n".'X-Mailer: PHP/'.phpversion();

		mail($email_to, $email_subject, $email_message, $headers);
		mail($_POST['email'], 'Confirmation Email', $email_message2, $headers);
	}
?>