<?php 
    if(isset($_POST['submit'])){
      $to = "filmexhibitionfund@gmail.com"; // this is your Email address
      $from = $_POST['email']; // this is the sender's Email address
      $name = $_POST['name'];
      $subject = "Contact form";
      $message = $name . " (" . $from . ") wrote the following:" . "\n\n" . $_POST['message'];
      // $subject2 = "Copy of your form submission";
      // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

      $headers = 'From: noreply@filmexhibition.org' . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
      // $headers2 = "From:" . $to;
      mail($to, $subject, $message, $headers);
      // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
      // You can also use header('Location: thank_you.php'); to redirect to another page.
      header('Location: thankyou.html');
  }
?>