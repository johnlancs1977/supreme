<?php
	$to = "info@company.com"; /*Your Email*/
	$subject = "Subscription from the landing - Newsletter "; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	$Email=$_REQUEST['Email'];

	$msg="
	Email: $_REQUEST[Email]	
	Subscription from website on date  $date, hour: $time.";

	if($Email=="") {
	echo "<div class='alert alert-danger'>
			  <a class='close' data-dismiss='alert'>×</a>
			  <strong>Warning!</strong> Please enter your email.
		  </div>";
	} else {
	mail($to,$subject,$msg,"From:".$Email);
	echo "<div class='alert alert-success'>
			  <a class='close' data-dismiss='alert'>×</a>
			  <strong>Thank you for your message!</strong>
		  </div>";
	}

	
?>
