<?php 
    include_once("conn.php");

    session_start();

    // INSERTING INTO STATUSREQ TABLE VARIOUS FIELDS

    if(isset($_POST["submit"])){
        $stat = $_POST["status"];
        $mobile = $_POST["mob"];
        echo $mobile;

        foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
            $file_name = $key.$_FILES['files']['name'][$key];
            $file_size =$_FILES['files']['size'][$key];
            $file_tmp =$_FILES['files']['tmp_name'][$key];
            $file_type=$_FILES['files']['type'][$key];	
                if($file_size > 2097152){
                  $errors[]='File size must be less than 2 MB';
                }		
            $desired_dir="user_data";
            if(empty($errors)==true){
                if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
                }
                if(is_dir("$desired_dir/".$file_name)==false){
                    $res = move_uploaded_file($file_tmp,"user_data/".$file_name);
                }else{
                //rename the file if another one exist
                    $new_dir="user_data/".$file_name.time();
                    rename($file_tmp,$new_dir);				
                }

              $query="IF EXISTS(SELECT * FROM statusreq WHERE mobile='$mobile') 
                THEN
                    UPDATE statusreq, client SET statusreq.Image='$file_name', statusreq.OrderStatus='$stat', client.OrderStatus='$stat'
                    WHERE statusreq.mobile='$mobile' AND client.mobile='$mobile'; 
                ELSE
                    INSERT INTO statusreq(mobile, Image, OrderStatus) 
                    VALUES('$mobile', '$file_name','$stat');
                END IF;" ;

                // $resultant = "SELECT * FROM statusreq WHERE mobile='$mobile' ";

                // if(mysqli_num_rows($resultant) > 0){
                //     $query = "UPDATE statusreq SET Image='$file_name', OrderStatus='$stat' WHERE mobile='$mobile' ";
                // }else{
                //     $query="INSERT INTO statusreq(mobile, Image, OrderStatus) VALUES('$mobile', '$file_name','$stat')";
                // }
            
                $data = mysqli_query($con, $query);
                if($data){
                    echo 'Updated Successful';
                }else{
                    echo "Updation Unsuccessful";
                }	
   		
            }else{
                print_r($errors);
            }
        }
    }

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Tables</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <style>
        label{
            margin-top:.5rem;
        }
    </style>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
                </div>
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span class="badge badge-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="adminpanel.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>

                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Data Table Example</div>
                    <div class="card-body">
                        <div class="table-responsive" id="tableresponder">
                            

                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Client Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                <label>ORDER ID</label>
                                <input type="number" class="form-control" id="update_id" disabled>
                                </div><br><br>
                                <div class="col">
                                <label>NAME</label>
                                <input type="text" class="form-control" id="name" disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                <label>EMAIL</label>
                                <input type="email" class="form-control" id="email" disabled>
                                </div><br><br>
                                <div class="col">
                                <label>MOBILE</label>
                                <input type="tel" class="form-control" id="pass" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                <!-- <label>ENTER ORDER ID</label>
                                <input type="number" class="form-control" name="updateid"> -->
                                </div><br><br>
                                <div class="col">
                                <label>ENTER MOBILE</label>
                                <input type="tel" class="form-control"  name="mob" id="gd">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>ORDER STATUS</label>
                                        <select id="orderStatus" class="form-control" name="status">
                                            <option selected>Processing</option>
                                            <option >Completed</option>
                                            <option >Cancelled</option>
                                        </select>
                                    </div><br><br>
                                    <div class="col">
                                        <input type="file" class="custom-file-input" id="customFile" name="files[]" multiple>
                                        <label class="custom-file-label" for="customFile" style="margin-top:2.4rem">Choose file</label>
                                    </div>
                                </div>
                            </div>   
                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        </form>

                        <div class="form-group">
                                <label>CLIENTS CHOSEN IMAGE</label>
                                <div id="imageHandler">
                                
                                </div>

                                <button type='button' class='btn btn-info' id='showimg'> Show Selection </button>
                            
                        </div>
                                <button type="button" class="btn btn-warning" id="logoShow">Show Logo Details</button>
                        

                        <div id="logocontainer">


                        </div>
                            <br><br>
                        <div class="modal-footer">
                            
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                
                        </div>
                    </div>
                </div>

                
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <!-- <footer class="sticky-footer" style="position:fixed">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer> -->

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>

<script type="text/javascript">

$(document).ready(function() {              

     $.ajax({    //create an ajax request to display
       type: "POST",
       url: "data.php",
       data:{
           mob : $("#pass").val()
       },             
       dataType: "html",   //expect html to be returned                
       success: function(response){                    
           $("#tableresponder").html(response); 
           //alert(response);
       }

   });
  
});


</script>

</body>

</html>