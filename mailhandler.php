<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='solcode.enterprise@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			// header('location: index.shtml');
			echo '
			<html>
			  <head>
				<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
				<title>Hello, world!</title>
			  </head>
			  <body>
			  <div class=\"jumbotron text-center\">
  <h1 class=\"display-3\">Thank You!</h1>
  <p class=\"lead\"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class=\"lead\">
    <a class=\"btn btn-primary btn-sm\" href=\"https://bootstrapcreative.com/\" role=\"button\">Continue to homepage</a>
  </p>
</div>
			  </body>
			</html>';
		}
		else{
			echo "Something went wrong!";
		}
	}
	else
	{
		echo "Failed";
	}
?>


name="entry.805097249" 

name="entry.971411464" 

name="entry.542720449" 
name="entry.55311507"