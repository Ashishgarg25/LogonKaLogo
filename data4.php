<?php 
    include_once("conn.php");

    if(isset($_GET["mob"])){
        $mobb = $_GET["mob"];
        $sql1 = "SELECT * FROM logo WHERE mobile='". $mobb. "'";
    $res = $con->query($sql1);
          
    if ($res->num_rows > 0) {
      // output data of each row
    
      while($row1 = $res->fetch_assoc()) {
        $logoname = $row1['logoName'];
        $tagline = $row1['tagLine'];
        $color = $row1['color'];
        $colortxt = $row1['colorText'];
        echo "working";
        echo '
        <div class="row">
          <div class="col">
              <label>Logo Name</label>
              <input type="text" class="form-control" name="lgname" id="lgn" value=" '; echo $logoname; echo ' " disabled>
            </div><br><br>
          <div class="col">
              <label>Logo Tagline</label>
              <input type="tel" class="form-control"  name="lgtag" id="lgt" value=" '; echo $tagline; echo ' " disabled> 
          </div>
      </div>

      <div class="row">
          <div class="col">
              <label>Color Style</label>
              <input type="text" class="form-control" name="color" id="lgc" value=" '; echo $color; echo ' " disabled>
          </div><br><br>
          <div class="col">
              <label>Color Text</label>
              <input type="tel" class="form-control"  name="clrtxt" id="lgct" value=" '; echo $colortxt; echo ' " disabled>
          </div>
      </div>';
      }
    
      }
    }

   
?>