<?php 
    include_once("conn.php");

  session_start();

// POPULATING THE TABLE

    $sql = "SELECT * FROM client";
    
    $result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
      //  echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Mobile: " . $row["mobile"]. "<br>";

  ?>

    <div class="container-fluid"> <table class="table table-hover" id="tabb">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Order id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Order status</th>
            <th scope="col">Amount</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

    <?php 
      while($row = $result->fetch_assoc()) {

        $id = $row["id"];
        $name = $row["name"];
        $email = $row["email"];
        $mobb = $row["mobile"];
        $stat = $row["OrderStatus"];
        $amt = $row["amount"];
         echo "<tr class='tablerow'><td>{$id}</td><td>{$name}</td><td>{$email}</td><td>{$mobb}</td> <td><button class='btn btn-info' disabled>{$stat}</button></td><td>{$amt}</td> <td><button class='btn btn-primary' data-toggle='modal' data-target='.bd-example-modal-lg'>EDIT</button></td>  </tr>\n"; 
        }

      ?>
        </tbody>
      </table> </div>  

      <!-- POPULATING THE EDIT SEARCH FIELDS -->

      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
        <script>
        $(document).ready(function(){
          $('.btn').on("click", function(){
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $("#update_id").val(data[0]);
            $("#name").val(data[1]);
            $("#email").val(data[2]);
            $("#pass").val(data[3]);

           
          });
         
        });
      </script>
       
<?php

       
    } 

?>

<!-- CALLING DATA 3 AJAX TO GET USER SELECTED IMAGE -->

<script>
   $("#showimg").on("click", function(){
    $.ajax({    //create an ajax request to display
       type: "GET",
       url: "data3.php",
       data:{
        pass : $('#pass').val()
       },             
       dataType: "html",   //expect html to be returned                
       success: function(response){                    
           $("#imageHandler").html(response); 
           console.log(response);
       }

   });
  });
</script>

<script>
  $("#logoShow").on("click", function(){

    $.ajax({    //create an ajax request to display
      type: "GET",
      url: "data4.php",
      data:{
          mob : $("#pass").val()
      },             
      dataType: "html",   //expect html to be returned                
      success: function(response){                    
          $("#logocontainer").html(response); 
         console.log(response);
      }

    });

  });
</script>

