<?php 
    include_once("conn.php");

    if(isset($_GET["pass"])){
        $mobb = $_GET["pass"];
        $sql1 = "SELECT Image FROM statusreq WHERE mobile='". $mobb. "' LIMIT 1";
    $res = $con->query($sql1);
          
    if ($res->num_rows > 0) {
      // output data of each row
    
      while($row1 = $res->fetch_assoc()) {
        $img = $row1['Image'];
        echo "<div style='display:block'> <img src=\"".$row1['Image']."\" width='300px' height='200px' class='imageclass'/> &nbsp;</div>";
      }
    
      }
    }

   
?>