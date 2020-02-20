<?php session_start();

include_once("conn.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $selected = $_POST["color"];
    $newSelected = implode(",", $selected);
            
    $logoname = $_POST["logo_name"];
    $tagline = $_POST["tagline"];
    $colorstyle = $_POST["colorstyle"];

    $sql = "INSERT INTO logo(logoName, tagLine, color, colorText) VALUES('$logoname', '$tagline', '$newSelected', '$colorstyle')";
    $dta = mysqli_query($con, $sql);

    if($dta){
        echo 'Insertion Successful';
    }else{
        echo 'Not Inserted';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="animate.min.css">
    <link rel="icon" href="img/favicon.ico" type="image/ico">

    <title>LogonKaLogo</title>

    <style>
        .cap{padding-top:80px;box-sizing:border-box}.box1>a>img, .box1>img{width:150px;height:150px;margin-left:20%}.order_img .od_img{height:35%;position:absolute;left:81%;top:68%}.order_img>h1{position:absolute;left:86%;top:83%;text-align:center;color:#fff;font-family:montserrat;font-weight:700}.order_img>h5{position:absolute;left:42%;top:72%;text-align:center;font-family:montserrat;color:#fff}.arrow{position:absolute;left:51%;top:80%;width:10%;height:10%}.bg_img>img{width:1600px;height:1600px;position:absolute;bottom:-25%;right:8%;z-index:-999}.noselect{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.wrapper2,.wrapper3,.wrapper4{margin-left:25%;width:800px;height:400px;padding:2%;display:none;position:absolute;z-index:99999}.active1{box-shadow:0 -3px 8px 0 rgba(242,153,74,1),0 4px 8px 0 rgba(242,201,76,1)}.active2{box-shadow:0 -3px 8px 0 rgba(17,153,142,1),0 4px 8px 0 rgba(56,239,125,1)}.active3{box-shadow:0 -3px 8px 0 rgba(86,204,242,1),0 4px 8px 0 rgba(47,128,237,1)}.active4{box-shadow:0 -3px 8px 0 rgba(198,92,240,1),0 4px 8px 0 rgba(211,122,250,1)}.form-control{width:65%}input[type=text]{font-family:montserrat;color:#fff;font-weight:700}.input1{background-color:transparent;height:60px;border:1px solid #48494a}#color_choice{position:absolute;top:85%;left:4.5%;width:100%!important}#lg_na{margin-top:17%}.btn_nxt{position:absolute;left:95%;bottom:35%;height:22%;display:none;z-index:999999}.buttonNext{position:absolute;left:95%;bottom:35%;height:22%;display:none;z-index:999999}.btn_prev{position:absolute;right:95%;bottom:35%;height:22%;display:none;z-index:999999}#pay{margin-left:0!important;margin-left:-41%!important}#pay1>img,#pay2>img{margin-left:0}.packageBtn{position:absolute;top:80%;left:45%}@media screen and (min-width:1700px){#wrap_content h2{font-weight:3rem!important}#wrap_content h4{font-weight:2rem!important}#wrap_content .form-control{width:100%}.wrapper2{margin-left:32%}.wrapper3{margin-left:30%}.wrapper3 h4{font-weight:1.8rem}.wrapper4{margin-left:31%;margin-top:4%}.wrapper4 h2{font-weight:3rem}.wrapper4 h4{font-weight:2rem}.btn-next{bottom:40%}#india h2{font-weight:3rem}#india h4{font-weight:2rem}.pl>h2{margin-left:25%}#plans{margin-top:0;margin-left:-46%}}
    </style>
</head>

<body>
    <div id="particles-js" class="animated fadeIn slow"></div>

    <div class="container-fluid">
        <div class="wrapper">
            <div class="hell cap animated bounceInUp">
                <center>
                    <h2>STARTING SOMETHING NEW ?</h2>
                    <h4>Give it a fresh look! We create logos and happiness</h4>
                </center>
            </div>

            <div class="container">
                <div class="pg_body horizontal-wrapper animated lightSpeedIn slow">
                    <div class="box1">
                    <a href="http://www.facebook.com/pg/logonkalogo/photos/"><img src="img/1.png" alt="gallary_img"></a>
                        <h5>OUR GALLERY</h5>
                    </div>

                    &nbsp; &nbsp; &nbsp;
                    <div class="box1">
                    <a href="http://www.facebook.com/pg/logonkalogo/reviews/"><img src="img/2.png" alt="gallary_img"></a>
                        <h5>OUR REVIEWS</h5>
                    </div>

                    &nbsp; &nbsp; &nbsp;
                    <div class="box1">
                        <a href="terms.php"> <img src="img/3.png" alt="gallary_img"></a>
                        <h5>T&C (TERMS)</h5>
                    </div>

                    &nbsp; &nbsp; &nbsp;
                    <div class="box1">
                        <a href="tracking.php"><img src="img/4.png" alt="gallary_img"></a> 
                        <h5>TRACK ORDER</h5>
                    </div>
                </div>
            </div>

            <div class="logo_img noselect">
                <!----<img src="img/img2.png" class="bg_logo animated bounceInDown slow" alt="Logo_img">-->
                <a href="index.php"><img src="img/Logo.png" class="logo animated bounceInUp slow" alt="logo"></a>
            </div>
            <div class="order_img noselect">
                <img src="img/po.png" id="alrt" class="btn od_img animated infinite pulse delay-1s" onclick="my_click()" alt="Order_img">

                <!-- <h1 id="alrt" class="animated infinite pulse delay-1s" onclick="my_click()">Place An <br> <span>Order</span> </h1> -->

                <img src="img/arrow.png" class="arrow" alt="arrow">
                <h5 class="order">PLACE YOUR ORDER HERE!</h5>
            </div>
            <!----<div class="bg_img noselect">
                <img src="img/img4.png" alt="Logo_img">
            </div>-->

        </div>
    </div>

    <!------------------------------SECOND PAGE STARTS----------------------------------->
    <form action="index.php" method="post" id="frm1" name="for1">

    <div class="wrapper2" id="wrap_content">
        <center>
            <h2 style="margin-top: -15%;">NAME OF LOGO</h2>
            <h4>Please enter the name of your logo</h4>

            &nbsp;&nbsp; &nbsp;&nbsp;
            
            <input type="text" class="form-control input1" name="logo_name" id="lg_na" placeholder="Enter your logo name"> &nbsp;&nbsp;
            <input type="text" class="form-control input1" name="tagline" id="tag" placeholder="Your Tagline (Optional)">
        </center>

    </div>

    <img src="img/next_b.png" class="btn_nxt" alt="next btn">
    <img src="img/next_b.png" class="buttonNext" name="btnsub" alt="next btn">

    <!------------------------------SECOND PAGE ENDS----------------------------------->

    <!------------------------------THIRD PAGE STARTS----------------------------------->

    <div class="wrapper3" id="wrap2_content">
        <center>
            <h2 style="margin-top: -15%;">COLOR STYLE</h2>
            <h4>Choose your preferred color style or enter your own</h4>

        </center>
        &nbsp;
        <div class="container">
            <div class="pg_body horizontal-wrapper animated lightSpeedIn slow">
                <div class="box1" id="test1">
                    <img src="img/1.png" alt="gallary_img">
                    <h5>CLEAN</h5>
                    <input type="checkbox" style="visibility:hidden" name="color[]" id="clean" value="clean"/>
                </div>

                &nbsp; &nbsp; &nbsp;
                <div class="box1" id="test">
                    <img src="img/2.png" alt="gallary_img">
                    <h5>VIBRANT</h5>
                    <input type="checkbox" style="visibility:hidden" id="vib" name="color[]" value="vibrant"/>
                </div>

                &nbsp; &nbsp; &nbsp;
                <div class="box1" id="test2">
                    <img src="img/3.png" alt="gallary_img">
                    <h5>CALM</h5>
                    <input type="checkbox" style="visibility:hidden" id="calm" name="color[]" value="calm"/>
                </div>
            </div>

        </div>

        <input type="text" class="form-control input1" name="colorstyle" id="color_choice" placeholder="Got a different style? Enter it here">
    
    </div>

    

    <img src="img/prev_b.png" class="btn_prev" alt="prev btn">

    <!--------------------------------THIRD PAGE ENDS--------------------------------------------->

    <!--------------------------------FOURTH PAGE STARTS-------------------------------------------->

    <div class="wrapper4" id="wrap3_content">
        <center>
            <h2 style="margin-top: -15%;">PAYMENT TYPE</h2>
            <h4>Choose country based on payment mode </h4>

        </center>
        &nbsp;
        <div class="container">
            <center>
                <div class="pg_body horizontal-wrapper animated lightSpeedIn fast" id="pay">
                    <div class="box1" id="pay1">
                        <img src="img/ind.png" alt="gallary_img">
                        <h5>INDIA</h5>
                        <input type="radio" name="pay" style="visibility:hidden" value="INDIA">
                    </div>

                    &nbsp; &nbsp; &nbsp;
                    <div class="box1" id="pay2">
                        <img src="img/other.png" alt="gallary_img">
                        <h5>OTHER</h5>
                        <input type="radio" name="pay" style="visibility:hidden" value="OTHER">
                    </div>

                </div>

                <!-- <div class="packageBtn">
                    <a href="payment.html" id="pay_link" class="btn disabled"> <button type="button" class="btn btn-outline-info">Select Package</button></a>
                </div> -->
            </center>
        </div>


    </div>

    </form>

    <!--------------------------------FOURTH PAGE ENDS-------------------------------------------->


    <!----SCRIPTS---->
    <script>
      var hid=!1,hid1=!1,isSelectedPay1=!1,isSelectedPay2=!1,logo_req=document.querySelector("#lg_na"),cc=document.querySelector("#color_choice"),nxt=document.querySelector(".btn_nxt"),nextt=document.querySelector(".buttonNext"),prv=document.querySelector(".btn_prev"),wrap1=document.querySelector(".wrapper2"),wrap2=document.querySelector(".wrapper3"),wrap3=document.querySelector(".wrapper4");const e=document.getElementsByClassName("box1"),e1=document.querySelector("#test"),e2=document.querySelector("#test1"),e3=document.querySelector("#test2"),e4=document.querySelector(".arrow"),e5=document.querySelector(".order"),e6=document.querySelector(".btn"),e7=document.querySelector("#alrt"),pay1=document.querySelector("#pay1"),pay2=document.querySelector("#pay2"),payLink=document.querySelector("#pay_link");function my_click(){document.querySelector(".hell").classList.add("animated","bounceOutUp"),e[0].classList.add("animated","bounceOutUp","faster"),e[1].classList.add("animated","bounceOutUp","faster"),e[2].classList.add("animated","bounceOutUp","faster"),e[3].classList.add("animated","bounceOutUp","faster"),e4.classList.add("animated","bounceOutUp"),e5.classList.add("animated","bounceOutUp"),e6.classList.add("animated","slideOutDown"),e7.classList.remove("animated","infinite","pulse","delay-1s"),e7.classList.add("animated","bounceOutDown","faster"),hid||hid1?(s1.style.display="none",hid=!1):setTimeout(function(){wrap1.classList.add("animated","slideInRight","faster"),nxt.classList.add("animated","slideInRight","faster"),wrap1.style.display="block",nxt.style.display="block"},500),hid=!0,hid1=!1}var selected=!1;e1.addEventListener("click",function(){selected?(e1.classList.remove("active1"),document.getElementById("vib").checked=!1,selected=!1):(e1.classList.add("active1"),document.getElementById("vib").checked=!0,selected=!0)});var selected1=!1;e2.addEventListener("click",function(){selected1?(e2.classList.remove("active2"),document.getElementById("clean").checked=!1,selected1=!1):(document.getElementById("clean").checked=!0,e2.classList.add("active2"),selected1=!0)});var selected2=!1;e3.addEventListener("click",function(){selected2?(e3.classList.remove("active3"),document.getElementById("calm").checked=!1,selected2=!1):(e3.classList.add("active3"),document.getElementById("calm").checked=!0,selected2=!0)});var selected3=!1;pay1.addEventListener("click",function(){selected3||(pay1.classList.add("active4"),pay2.classList.remove("active3"),isSelectedPay1=!0)}),pay2.addEventListener("click",function(){selected3||(pay2.classList.add("active3"),pay1.classList.remove("active4"),isSelectedPay2=!0)}),nxt.addEventListener("click",function(){hid&&!hid1&&0!=logo_req.value.length?(wrap1.classList.remove("animated","slideInRight","faster"),wrap1.classList.remove("animated","slideInLeft","faster"),wrap1.classList.add("animated","fadeOutLeft"),wrap1.classList.remove("active"),nextt.style.display="none",nextt.classList.remove("animated","fadeInRight"),wrap2.style.display="block",nxt.style.display="block",wrap2.classList.add("animated","slideInRight","faster"),prv.classList.add("animated","slideInLeft","faster"),prv.style.display="block",hid=!1,hid1=!0):!hid&&hid1&&selected||selected1||selected2||0!=cc.value.length?(wrap3.style.display="block",nxt.classList.remove("animated","slideInRight","faster"),nxt.classList.add("animated","fadeOutRight"),nextt.style.display="block",nextt.classList.add("animated","fadeInRight"),wrap2.classList.remove("animated","slideInRight","faster"),wrap2.classList.remove("animated","fadeOutRight"),wrap2.classList.remove("animated","slideInLeft","faster"),wrap2.classList.add("animated","fadeOutLeft"),wrap3.classList.add("animated","slideInRight","faster"),prv.style.display="block",hid=!0,hid1=!1):0==logo_req.value.length?(setTimeout(function(){logo_req.classList.add("animated","shake","fast"),logo_req.style.border="3px solid #fa4d41"},200),logo_req.classList.remove("animated","shake","fast")):0==cc.value.length&&(setTimeout(function(){cc.classList.add("animated","shake","fast")},10),cc.classList.remove("animated","shake","fast"))}),prv.addEventListener("click",function(){hid&&!hid1?(wrap3.classList.remove("animated","slideInRight","faster"),wrap3.classList.add("animated","fadeOutRight"),wrap2.style.display="block",nextt.style.display="none",nextt.classList.remove("animated","fadeInRight"),wrap2.classList.remove("animated","fadeOutLeft"),wrap2.classList.add("animated","slideInLeft","faster"),nxt.classList.remove("animated","fadeOutRight"),nxt.classList.add("animated","slideInRight","faster"),prv.style.display="block",hid=!1,hid1=!0):!hid&&hid1&&(wrap2.classList.remove("animated","slideInLeft","faster"),wrap2.classList.remove("animated","slideInRight","faster"),wrap2.classList.add("animated","fadeOutRight"),wrap1.style.display="block",nextt.style.display="none",nextt.classList.remove("animated","fadeInRight"),wrap1.classList.add("animated","slideInLeft","faster"),prv.classList.remove("animated","slideInLeft","faster"),prv.classList.add("animated","fadeOutLeft"),nxt.style.display="block",hid=!0,hid1=!1)}),nextt.addEventListener("click",function(){document.getElementById("frm1").submit(),isSelectedPay1&&(location.href="plan_india.php")});
    </script>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
</body>

</html>