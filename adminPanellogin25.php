<?php 

include_once("conn.php");

if(isset($_POST["sub"])){

    $name = $_POST["user"];
    $pwd = $_POST["pass"];

    $sql = "SELECT * FROM admin WHERE id=1";
    
    $res = $con->query($sql);
    
    if ($res->num_rows > 0) {
    // output data of each row
        while($row = $res->fetch_assoc()) {
            $admin = $row["username"];
            $pass = $row["password"]; 
        }
    }

    if(($name == "") && ($pwd == "")){
        echo "Please enter username and password";
    }else if(($name == $admin) && ($pwd == $pass)){
        
        header("Location: http://localhost/LogonKaLogo/adminpanel.php"); 
    }
    else{
        echo "Wrong Username or Password";
    }
}

?>

<html>
<head>
<link rel="stylesheet" href="main.css">
</head>

<body>
    

<form action="" method="post">
Enter Username<input type="text" name="user">
Enter password<input type="password" name="pass"> 
    <input type="submit" name="sub" value="login">
</form>

<div class="logo_img noselect">
    <!----<img src="img/img2.png" class="bg_logo animated bounceInDown slow" alt="Logo_img">-->
    <a href="index.php"><img src="img/Logo.png" class="logo animated bounceInUp slow" alt="logo"></a>
</div>
</body>
</html>