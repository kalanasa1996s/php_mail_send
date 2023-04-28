<?php
//checking if the form is submit
    if (isset($_POST['submit'])){

            $fullname  =$_POST['fullname'];
            $email =$_POST['email'];
            $subject =$_POST['subject'];
            $message =$_POST['message'];

            $to = '';
            $mail_subject = 'Message From Website';
            $email_body ="Message From Contact Us Page Of The Website: <br>";
            $email_body .="<b>From: </b> {$fullname} <br>";
            $email_body .="<b>Subject: </b> {$subject} <br>";
            $email_body .="<b>Message: </b> <br> " . nl2br(strip_tags($message));

            $header = "From: {$email}\r\nContent-Type: text/html;";

            $send_mail_result = mail($to,$mail_subject,$email_body,$header);

            if ($send_mail_result){

                echo "Message Sent";

            }else{
                echo "Message Sent Failed";
            }


    }

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact-US</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-8">

                <h2>Email Send : </h2>

                <form action="contact-us.php" method="post">

                    <p>
                        <label for="fullname">Full Name * :</label>
                        <input class="form-control" type="text" name="fullname" id="fullname" required>

                    </p>

                    <p>
                        <label for="email">Email * :</label>
                        <input class="form-control" type="text" name="email" id="email" required>

                    </p>

                    <p>
                        <label for="subject">Subject * :</label>
                        <input class="form-control" type="text" name="subject" id="subject" required>

                    </p>

                    <p>
                        <label for="message">Message * :</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" required></textarea>

                    </p>

                    <p>
                        <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                    </p>
                </form>


            </div>
            <div class="col-md-2"></div>


        </div>


    </div>


</body>
</html>
