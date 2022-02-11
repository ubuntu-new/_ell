
<?php 
// Themderbolt - Briefcase  - Send Email Function

// Some email services will consider emails coming from PHP functions SPAM, make sure you check that folder. 
// For better results we recommend using advanced SMTP configuration with services like PHPMailer (not include in this template)

$name=$_POST['name'];
$email=$_POST['email'];

$interest=$_POST['interest'];
$message = $_POST['message'] ;

$subject = "Contact from: " . $name;
$to = "youremail@email.com"; //This is the email where the form will be sent to. 
  

$header = "From: ". $name . " <" . $email . ">\r\n"; 

$content = "This email is coming from your Briefcase Contact Form \r\n \r\n Name: ". $name . "\r\n Email: " . $email . "\r\n Interested in: " . $interest . "\r\n Message: ". $message;
  

if( mail($to,$subject,$content,$header) )
    {
        echo "<h2>Thank you for your message</h2>";
    }
    else
    {
        echo "<h2>Sorry, there has been an error</h2>";
    }

?>

