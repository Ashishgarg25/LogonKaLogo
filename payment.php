


<!--  <?php 
    // include_once("conn.php");

    // error_reporting(0); -->

    // $Name = $_POST["name"];
    // $Email = $_POST["email"];
    // $Mobile = $_POST["mobile"];
    // $Amt = $_POST["amount"];

    // if(isset($_POST['submit'])){

    //     $query = "INSERT INTO client(name, email, mobile,amount) VALUES('$Name', '$Email', '$Mobile', '$Amt')";
    //     $data = mysqli_query($con, $query);
    
    //     if($data){
    //         echo 'Insertion Successful';
    //     }
    //     else{
    //         echo 'Insertion Unsuccessful';
    //     }

    //     if(isset($_POST['mode1']) && ($_POST['mode1']) == "Paytm"){

    //         header("Location: http://localhost/LogonKaLogo/checkout.php"); 
        
    //      }
        
    //     elseif(isset($_POST['mode2']) && ($_POST['mode2']) == "GooglePay"){
        
    //         //header("Location: http://www.example.com/company.php"); 
        
    //      }
        
    //      else{
    //             header("Location: http://localhost/LogonKaLogo/payTm/PayTmKit/pgRedirect.php"); 
     //   }
    //}
    
    include_once("conn.php");

    session_start();

    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Mobile = $_POST["mobile"];
    $img = $_POST["upimg"];
    $stat = $_POST["orderstatus"];
    $mode = $_POST["mode1"];
    
    if($_GET["id"] == "sfs363"){
      $Amt = 400;
    }else if($_GET["id"] == "klr572"){
      $Amt = 600;
    }else if($_GET["id"] == "gkd981"){
      $Amt = 1000;
    }else{
      header("Location: http://localhost/LogonKaLogo/plan_india.php"); 
    }
    
    $_SESSION["mail"] = $_POST["email"];

    if(isset($_POST['submit'])){
    
        $query = "INSERT INTO client(name, email, mobile, img, OrderStatus, amount, mode) VALUES('$Name', '$Email', '$Mobile', '$img', '$stat', '$Amt', '$mode')";
        $data = mysqli_query($con, $query);
    
        if($data){
            echo 'Insertion Successful';
            
            if($mode == "paytm"){
              if($Amt == 400){
                header("Location: http://localhost/LogonKaLogo/checkout.php?id=sfs363"); 
              }else if($Amt == 600){
                  header("Location: http://localhost/LogonKaLogo/checkout.php?id=klr572"); 
              }else if($Amt == 1000){
                  header("Location: http://localhost/LogonKaLogo/checkout.php?id=gkd981"); 
              }
            }else{
              // header("Location: http://localhost/LogonKaLogo/data.php");
             }
           
        }
        else{
            echo 'Insertion Unsuccessful';
        }
    }

?>
-->

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="main.css">

  <style>
    .container{
      background: #F7F8FA;
      height: 70%;
      margin-top: 8%;
      border-radius: 10px;
      width: 55%;
    }
    .wrap{
      background: #FFFFFF;
      height: 80%;
      border-radius: 10px;
      top: 11%;
      position: absolute;
      width: 20%;
      bottom: 13%;
      left: 24%;
  }
   .form-control,
   .custom-file{
     width:85%;
     margin-left:7%;
   }
  .formm{
    color: #58666E;margin-left:7%;font-weight:bold;
  }
   label{
     margin-bottom:0;
   }
   .tot{
    font-size: 60px;
    color: #58666E;
    margin-left: 83%;
    margin-bottom: 0;
   }
   .totl{color: #58666E;margin-left:87%;font-weight:bold;}
   .headd{color: #58666E;
    font-size: 26px;
    line-height: 35px;
    margin: 11%;font-weight:bold;}

   /*..................................................... HR STYLE.......................................... */
   .hr-text {
    line-height: 1em;
  position: relative;
  outline: 0;
  border: 0;
  color: black;
  text-align: center;
  height: 12rem;
  opacity: .5;
  width:55%;
  margin-left:43%;}
  .hr-text:before {
    content: '';
    background: linear-gradient(to right, transparent, #818078, transparent);
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 1px;
  }
  .hr-text:after {
    content: attr(data-content);
    position: relative;
    display: inline-block;
    color: black;

    padding: 0 .5em;
    line-height: 1.5em;
    color: #818078;
    background-color: #fcfcfa;}

/*..................................................... HR STYLE END.......................................... */

/* .......................................PAYMENT MODE STYLE................................................... */
input[type=radio] {
  Visibility:hidden;
}

.check {
	width: 30px; height: 30px;
	position: absolute;
	border-radius: 50%;
	transition: transform .6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
  margin-left: 25%;
    margin-top: -4.3%;
}

/* Reset */
input#one ~ .check { 
	transform: translate(-50px, 107px); 
	background:  #2196F3;
  box-shadow: 0 6px 12px rgba(33, 150, 243, 0.35);
}
input#two ~ .check { 
	transform: translate(-50px, -83px); 
	background: #B2D7F5;
	box-shadow:none;
}

/* Radio Input #1 */
input#one:checked ~ .check { transform: translate(-50px, 33px); }

/* Radio Input #2  */
input#two:checked ~ .check { transform: translate(-50px, -42px); }

/* ..................................PAYMENT MODE STYLE END............................................... */
  </style>
   
</head>

<body style="padding:0;margin:0;background-image:linear-gradient(-120deg,#37c6e1,#5240e6);">

    <div class="container">
    <h1 class="tot"><?php echo $Amt; ?></h1>
    <label class="totl">TOTAL</label>

    <p style="color: #58666e;margin-left: 45%;margin-bottom:-1rem;margin-top:5%;font-weight:bold;">Please select your payment mode:</p> <br> <br>

    <form method = "post" action="">

  <input type="radio" name="mode1" value="paytm" id="one" checked  style="margin-left:45%;">
  <label for="one" style="cursor: pointer;"><img src="img/paytm.png" alt="PayTm" style="width: 150px;margin-left: 1%;"></label>

  

<div class="check" style="margin-left:25%;"></div>

<input type="radio" name="mode1" value="googlepay" id="two" style="margin-left:45%;">
<label for="two" style="cursor: pointer;"><img src="img/GPay.png" alt="Googlepay" style="width: 150px;margin-left: 1%;margin-top:18%;"></label>

  <div class="check" style="margin-left:25%;margin-top:-5%;"></div>

<br>

<hr class="hr-text">
<p style="margin-top:-8%;margin-left:48%"> For any query contact us at <a href="mailto:admin@logonkalogo.in">admin@logonkalogo.in</a> </p>

</div>

    <div class="wrap">
      <h4 class="headd">Enter Your Credentials</h4>

<div class="form-group">
  <label class="formm">Your Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
    
  </div>
  <div class="form-group">    
    <label class="formm">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
    
  </div>

  <div class="form-group">
    <label class="formm">Mobile No.</label>
    <input type="tel" class="form-control" name="mobile" id="mobileNo" min="1" max="10" placeholder="Enter Mobile Number" required>
  </div>

  <input type="hidden" class="form-control" name="orderstatus" id="status" value="Processing">

  <div class="custom-file">
  <input type="file" class="custom-file-input" width="85%" required id="customFile" name="upimg">
  <label class="custom-file-label" for="customFile">Upload sketch</label>
</div>
   
   <p style="color: #000;
    margin-left: 8%;
    font-size: 14px;margin-top:10%;">By clicking CHECKOUT you agree to our <a href="#">TERMS & CONDITIONS</a>.</p>
 
  <input type="submit" name="submit" id="sub" class="btn btn-primary" style="margin:0 11% 0 7%;width:85%;" value="CHECKOUT" onclick=""/>
</form>

    </div>

    <div class="logo_img noselect">
        <!----<img src="img/img2.png" class="bg_logo animated bounceInDown slow" alt="Logo_img">-->
        <a href="index.php"><img src="img/Logo.png" class="logo animated bounceInUp slow" alt="logo"></a>
    </div>


<script>
  var uploadimg = document.querySelector(".custom-file");
  var reqImg = document.getElementById("customFile");
  var amount = <?php echo $Amt; ?>

  if(amount != 400){
    reqImg.removeAttribute("required");
    uploadimg.style.display = "none";
  }

  document.querySelector(".custom-file-input").onchange = function(){
  document.querySelector(".custom-file-label").textContent = this.files[0].name;

}
</script>    

</body>
