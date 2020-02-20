<?php 

include_once("conn.php");

session_start();

if(isset($_GET["sel"])){
   
    $imageValue = $_GET["sel"];
    $mobVal = $_GET["numb"];
    $sqlQ = "UPDATE statusreq SET Image = '$imageValue' WHERE mobile='". $mobVal . "'";

    $res = $con->query($sqlQ);

    if($res){
        echo "Working";
        echo "Updated Successfully";
    }
    else{
        echo "Update Unsuccessful";
    }
   }
        

    // $sqld = "DELETE FROM statusreq WHERE mobile='". $mobVal . "'";
    // $resd = $con->query($sqld);

    // if($resd){
    //     echo "Deleted Successfully";
    // }

?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
<script>
$(".imageclass").hide();
$('#selectimg').hide();
</script>
