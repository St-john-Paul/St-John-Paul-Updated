

<?php
    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: welcome.php");
        die();
    }

    include 'config.php';
    $msg = "";

    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
            
            if ($query) {
                $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
            }
        } else {
            header("Location: index.php");
        }
    }

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));

        $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if (empty($row['code'])) {
                $_SESSION['SESSION_EMAIL'] = $email;
                header("Location: welcome.php");
            } else {
                $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
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
    <section class="w3l-mockup-form"  style="background-color:   #4d0000;">
    <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid" style="background-color:  #4d0000;">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self" style="background-image: url('./images/25.jpg'); background-size: cover; background-repeat: no-repeat; border: 2px solid gray; background-color: #F0F8FF;">
</div>
                    <div class="content-wthree">
                        <h2  style="color: blue;">Login Now</h2>
                        <p style="color: black; font-weight:bold;">Enter your full details </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                            <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                            <button name="submit" name="submit" class="btn" type="submit" style="background-color: #4d0000;">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>Create Account! <a href="register.php">Register</a>.</p>
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