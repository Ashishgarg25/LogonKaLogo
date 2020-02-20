<?php 
    include_once("conn.php");

    session_start();

    // POPULATION TRACKING TABLE

    if(isset($_GET["numb"])){
        $mob = $_GET["numb"];

    $sql = "SELECT * FROM client WHERE mobile='". $mob. "' ";
    
    
    $result = $con->query($sql);
    

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Mobile: " . $row["mobile"]. "<br>";
    
        $id = $row["id"];
        $name = $row["name"];
        $email = $row["email"];
        $mobb = $row["mobile"];
        $stat = $row["OrderStatus"];
        $_SESSION["mobileVal"] = $mobb;

      echo'<div class="container"> <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Order id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Order status</th>
          </tr>
        </thead>
        <tbody>
          <tr>';
           echo' <th scope="row">  '. $id .' </th>';
           echo' <td> '. $name .' </td>';
           echo' <td> '. $email .' </td>';
           echo' <td> '. $mobb .' </td>';
           echo' <td> '. $stat .' </td>';
    echo'      </tr>
         
        </tbody>
      </table> </div> <br/><br/>';    
    
    }
}

// POPULATING IMAGE PROVIDED BY ADMIN

$sql1 = "SELECT Image FROM statusreq WHERE mobile='". $mob. "'";
$res = $con->query($sql1);

if ($res->num_rows > 0) {
  // output data of each row

  while($row1 = $res->fetch_assoc()) {
    $img = $row1['Image'];
    echo "<div style='display:inline-block'> <img src=\"user_data/".$row1['Image']."\" width='300px' height='200px' class='imageclass'/> &nbsp;</div>";
  
  }
  echo "<button type='button' class='btn btn-info' id='selectimg' style='margin-top:2%'> Save Selection </button>";

}
?>

<?php
    }
?>

<!-- GETTING SELECTED IMAGE AND CALLING DATA 2 -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>


<script>
$(document).ready(function(){
  $(".imageclass").on("click", function(){
    const sel = $(this).attr('src');
    $("img.active").removeClass("active");
    $(this).addClass("active");
    console.log(sel);
    $("#imgcontainer").children('option').text(sel);
    $(document).ready(function(){
  $("#selectimg").on("click", function(){
      $.ajax({    //create an ajax request to display.php
      type: "GET",
      url: "data2.php",
      data:{
          sel : sel,
          numb : $('#numb').val()
      },             
      dataType: "html",   //expect html to be returned                
      success: function(response){                    
        $("#responsecontainer").html(response); 
        //Alert Resppnse
    }

});
  
    });
});
  });

  

});


 
</script>
