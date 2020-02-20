<?php 
    include_once("conn.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Track Status</title>

    <style>
        .active{
            box-shadow: 0 -3px 8px 0 rgba(242, 153, 74, 1), 0 4px 8px 0 rgba(242, 201, 76, 1);
        }
    </style>
</head>
<body style=" background-image: linear-gradient(-120deg,#37c6e1,#5240e6); !important;">
    <center>
        <br><br>
       <div class="container" style="background-color:#fff; padding:3%;border-radius:30px;box-shadow: 0 -3px 8px 0 rgb(174, 180, 191), 0 4px 8px 0 rgb(135, 137, 140);">
            <form method="get" action="" class="form-group form-inline">
                <!-- <label>Order Id</label> &nbsp;&nbsp;
                <input type="text" class="form-control" style="width:30%" placeholder="Enter your order Id" name="odid">-->
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <label>Phone No.</label>&nbsp;&nbsp;
                <input type="tel" class="form-control" style="width:30%" placeholder="Enter your phone number" id="numb" name="numb">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-primary btn-lg" style="padding: .5rem 4rem" name="track" id="display" value="Track"> Track </button>
            </form>

            
            <div id="responsecontainer">

            </div>

            <form method='get' action="">
            <select id="imgcontainer" name="imageValue" style="visibility:hidden">
                    <option value=""></option>
                </select>
             
            </form>
            


        </div>


    </center>
    <div class="logo_img noselect">
        <!----<img src="img/img2.png" class="bg_logo animated bounceInDown slow" alt="Logo_img">-->
        <a href="index.php"><img src="img/Logo.png" class="logo animated bounceInUp slow" alt="logo"></a>
    </div>


<!-- CALLING DATA 1 -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>

<script type="text/javascript">

$(document).ready(function() {

   $("#display").click(function() {                

     $.ajax({    //create an ajax request to display.php
       type: "GET",
       url: "data1.php",
       data:{
           "numb" : $('#numb').val()
       },             
       dataType: "html",   //expect html to be returned                
       success: function(response){                    
           $("#responsecontainer").html(response); 
           //alert(response);
       }

   });
});

});

</script>


</body>
</html>