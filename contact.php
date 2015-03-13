<?php
	$dbc=mysqli_connect("localhost","root","","student_info")
	or die('Unable to Connect');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$message=$_POST['message'];
	if(!empty($name)){
		if(!empty($contact)){
			if(!empty($email)){
				if(!empty($feedback)){
					$query="INSERT INTO feedback (name,email,contact,feedback) VALUES('$name','$contact','$email','$message')";
					mysqli_query($dbc,$query) or die('Error in Connection');
					echo 'Thank you '.$name.'for submitting your message.';
					echo 'We will soon get back to you';
					mysqli_close($dbc);
				}
			}
		}
	}
?>