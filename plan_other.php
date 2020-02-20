<?php session_start(); ?>
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
    <title>Payment</title>

    <style>
        #plans {
            margin-left: -48%;
            width:90%;
        }
        
        .pl {
            transition: none;
            width:32%;
        }

        
        .pl:hover {
            transform: none;
        }
        
        .pl>img {
            width: 390px;
            height: 250px;
        }
        
        .pl>h2 {
            margin-top: 6%;
            margin-left: 50%;
        }
        h6{
            color:#FFFFFF;
        }
    </style>
</head>

<body>

    <div id="particles-js" class="animated fadeIn slow"></div>

    <div class="container">
        <div id="india">
            <center>
                <h2 style="margin-top:7%;">SELECT YOUR PLAN</h2>
                <h4>Remember to pick a package which fits you the best!</h4>
                <div class="pg_body horizontal-wrapper animated lightSpeedIn fast" id="plans">

                    <div class="box1 pl" id="plan_s">
                        <img src="img/pro.png" alt="gallary_img">
                        <h2 id="vl2"> $20 </h2>
                        
                    </div>
                    <h6 style="margin-left:5%;position:absolute;bottom:-70%;left:5%;font-weight:100">In this plan, you need to upload your own sketch <br>in order to avail the discount. </h6>
                    
                    <div class="box1 pl" id="plan_b">
                        <img src="img/basic.png" alt="gallary_img">  
                        <h2 id="vl1"> $35 </h2>
                    </div>
                    
                    <div class="box1 pl" id="plan_p">
                        <img src="img/sketch.png" alt="gallary_img">
                        <h2 id="vl"> $50 </h2>
                    </div>
                    
                </div>

                <h6 style="font-size:.6rem; position:absolute; top:96%;left:40%">NOTE: SINCE WE VALUE QUALITY OF THE PLANS, THEY BECOME NON-REFUNDABLE</h6>
            </center>
        </div>

        <div id="other">

        </div>
    </div>

    <div class="logo_img noselect">
        <!----<img src="img/img2.png" class="bg_logo animated bounceInDown slow" alt="Logo_img">-->
        <a href="index.php"><img src="img/Logo.png" class="logo animated bounceInUp slow" alt="logo"></a>
    </div>

    <script>
        var sketchP = document.getElementById("plan_s");
        var basicP = document.querySelector("#plan_b");
        var proP = document.querySelector("#plan_p");

        var sk = document.getElementById("vl");
        var bs = document.getElementById("vl1");
        var pr = document.getElementById("vl2");

        var isPlanned = false;

        if (!isPlanned) {
            sketchP.addEventListener("mouseover", function() {
                sketchP.classList.add("animated", "infinite", "pulse", "fast");
                basicP.classList.remove("animated", "infinite", "pulse", "fast");
                proP.classList.remove("animated", "infinite", "pulse", "fast");
                sketchP.style.cursor = "pointer";

            });

            sketchP.addEventListener("click", function() {

                // var prVal = pr.innerText;
                // localStorage.setItem("ProValue", prVal);

                location.href = "payment.php?id=dfd363";

            });
                
        }


        if (!isPlanned) {
            basicP.addEventListener("mouseover", function() {
                sketchP.classList.remove("animated", "infinite", "pulse", "fast");
                basicP.classList.add("animated", "infinite", "pulse", "fast");
                proP.classList.remove("animated", "infinite", "pulse", "fast");
                basicP.style.cursor = "pointer";
            });

            basicP.addEventListener("click", function() {

                // var prVal = bs.innerText;
                // localStorage.setItem("ProValue", prVal);

                location.href = "payment.php?id=drk634";

            });
        }

        if (!isPlanned) {
            proP.addEventListener("mouseover", function() {
                sketchP.classList.remove("animated", "infinite", "pulse", "fast");
                basicP.classList.remove("animated", "infinite", "pulse", "fast");
                proP.classList.add("animated", "infinite", "pulse", "fast");
                proP.style.cursor = "pointer";
            });

            proP.addEventListener("click", function(e) {

                e.preventDefault();

                var prVal = sk.innerText;
                localStorage.setItem("ProValue", prVal);

                location.href = "payment.php?id=klg869";

            });
        }

    </script>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>