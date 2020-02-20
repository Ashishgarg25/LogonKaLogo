<?php

    $SERVER_NAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DB_NAME = "payment";

   $con = mysqli_connect($SERVER_NAME, $USERNAME, $PASSWORD, $DB_NAME);

   if($con){
       echo "Connection Successful";
   }
   else{
       echo "Not Successful";
   }

?>