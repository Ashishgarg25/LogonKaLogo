<?php 
    session_start();

    $mail = $_SESSION["mail"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>SuccessPage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <style>
        h1{
            font-weight:bolder;
            font-size:80px;
          
        }
        body{
            background-image: linear-gradient(-120deg,#37c6e1,#5240e6);
            height: 1000px !important;
        }
        #succss{
            background-color: #fff;
            margin-top: 10%;
            height: 450px;
            width:60%;
            border-radius:50px;
            box-shadow: 0 -3px 8px 0 rgb(174, 180, 191), 0 4px 8px 0 rgb(135, 137, 140);
        }
        
   </style>
</head>
<body>
    <div id="succss" class="container" >
        <center>
        <br>
            <h1>THANK YOU!</h1> <br>
            <img src="img/successTick.png" alt="" width="130px" id="circle">
        <br><br><br>
            <p class="text-center"> Your payment has been confirmed </p>
            <p class="text-center"> To track your order click <span><a href="tracking.php">here</a></span> </p>
        <!-- </b><h2>You will receive tracking details at this email address:</h2><br>
            <?php // echo $mail; ?> -->
        </center>
    </div>
    <div class="logo_img noselect">
        <!-- --<img src="img/img2.png" class="bg_logo animated bounceInDown slow" alt="Logo_img"> -->
        <a href="index.php"><img src="img/Logo.png" class="logo animated bounceInUp slow" alt="logo"></a>
    </div>
    <?php 
    
    // $to = "ashish.garg25811@gmail.com";
    // $subject = "My subject";
    // $txt = "Your order id is \n Access Track your status <a href='https://www.logonkalogo.in/tracking.php'>here</a>";
    // $headers = "From: admin@logonkalogo.in";
    
    // mail($to,$subject,$txt,$headers);
    
    ?>

</body>
</html>