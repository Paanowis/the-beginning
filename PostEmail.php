<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>
	  
	  <?php
	  $myEmailAddress="paanowis10@gmail.com"
		  $subject="Question from Just Do It!"
		  
		  $name=$_POST['Name'];
	      $email=$_POST['Email'];
	      $message=$_POST['Message'];
	      $header="from: $name <$email>";
	  
	  mail($myEmailAddress,$subject,$message,$header);
	  
	  ?>
	  <p>Thank you for sending.</p>

    

  </body>

</html>