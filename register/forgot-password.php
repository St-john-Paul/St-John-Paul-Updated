<!-- Code by Brave Coder - https://youtube.com/BraveCoder -->

<?php

session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: welcome.php");
    die();
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE users SET code='{$code}' WHERE email='{$email}'");

        if ($query) {        
            echo "<div style='display: none;'>";
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'YOUR_EMAIL_HERE';                     //SMTP username
                $mail->Password   = 'YOUR_PASSWORD_HERE';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('YOUR_EMAIL_HERE');
                $mail->addAddress($email);

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'no reply';
                $mail->Body    = 'Here is the verification link <b><a href="http://localhost/login/change-password.php?reset='.$code.'">http://localhost/login/change-password.php?reset='.$code.'</a></b>';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "</div>";        
            $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>$email - This email address do not found.</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Kalla Coder</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <link href="./login.css" rel="stylesheet">
  <script src="./login.js" defer></script>
  <style>
    .both {
        display: flex;
        flex-direction: row;
        align-content: center;
        justify-content: center;
        align-items: center;
        align-items: center;
        padding: 20px;
    }

    .begin {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .mainContainer{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .int, .int2 {
        padding: 10px;
    }

    .int2{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        /* border: 3px solid black; */
    }
    .int img {
        max-width: 100%;
        height: auto;
    }

    .tito {
        font-size: 1.25em;
        margin: 0;
    }

    .int2 b {
        font-size: 1em;
        color: blue;
    }

    @media (max-width: 768px) {
        .begin {
            flex-direction: column;
            text-align: center;
        }

        .int2 h5 {
            font-size: 1em;
        }

        .int2 b {
            font-size: 0.9em;
        }
    }

    @media (max-width: 480px) {
        .tito {
            font-size: 1em;
        }

        .int2 b {
            font-size: 0.8em;
        }

        .int img {
            width: 80px;
            height: 80px;
        }
    }
</style>

</head>

<body>
<div class="both " style="border-top: 5px solid orange; background-color: rgb(255, 255, 255);">
       
       <div class="int "> 
           <img src="./images/Badge1.png" style="width: 70px; height: 70px;">
       </div>
       <div class="int2">
           <a href="index.html" class="">
               <center><h5 class="tito" style=" font-size: 2.92vw;font-weight: bold; color:darkred; font-family: Rockwell Extra Bold;" >ST. JOHN PAUL II VOC & HIGH SCH MBALALA-MUKONO.</h5></center>
              <center><b style="font-size: 1.5vw; color: blue;">YOUR SUCCESS BEGINS HERE.</b></center>
           </a>
          </div>

  </div>


    <!-- form section start -->
    <section class="w3l-mockup-form" style="background-color:  #4d0000;">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid" style="background-color:  #4d0000;">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self" style="background-image: url('./images/20.jpg'); background-size: cover; background-repeat: no-repeat; border: 2px solid gray; background-color: #F0F8FF;">
</div>
                    <div class="content-wthree">
                        <h2  style="color: blue;">Forgot Password</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <button name="submit" class="btn" type="submit" style="background-color:  #4d0000;">Send Reset Link</button>
                        </form>
                        <div class="social-icons">
                            <p>Back to! <a href="index.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>

</html>