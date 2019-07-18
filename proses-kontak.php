<?php
    $msg = "test";
    
    include "phpmailer/class.phpmailer.php";

    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $pengirim = "nikkirufiansya88@gmail.com";
    $mail = new PHPMailer();

    //if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    $mail->isSMTP();
    // $mail->SMTPDebug = 2;
    $mail->SMTPAuth = true;
    $mail->Username = "nikkirufiansya88@gmail.com";
    $mail->Password = "rahasiaku1997";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->AddAddress("nikkirufiansya88@gmail.com","");
    $mail->setFrom($pengirim);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = "From : ".$email."<br>".$message;

    if ($mail->send()){
        $msg = "Your email has been sent, thank you!";
        echo "Your email has been sent, thank you!";
    }
    else{
        $msg = "Please try again!";
        echo "Please try again!";
    }
    
    header('Location: index.html');
    exit;
    
    // echo '
    //     <script type="text/javascript">
    //        window.location = "index.php"
    //     </script>';
?>






