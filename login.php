<?php
ob_start();
    include("connection.php");
	include("function.php");
	require_once("EntityUserdata.php");
	require_once("ModelUserdata.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("Login");?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!--<div class="wrapper">-->

  <!-- Content Wrapper. Contains page content -->
<!--  <div class="content-wrapper">-->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	   <div class="row">
	       <div class="col-md-4"></div>
	       <div class="col-md-4">
	           <div class="card" style="margin-top:200px">
	               <div class="card-header">
	                   <h4>Login to your account here!</h4>
	               </div>
	               <div class="card-body">
	                    <form method="POST">
        	               <div class="form-group">
        	                   <lable>User Id</lable>
        	                   <input type="text" name="id" class="form-control" />
        	               </div>
        	               <div class="form-group">
        	                   <lable>Password</lable>
        	                   <input type="password" name="password" class="form-control" />
        	               </div>
        	               <div class="form-group">
        	                   <button class="w3-btn w3-blue w3-round" name="stn">Login</button>
        	               </div>
        	           </form>
        	           <?php
        	            if(isset($_POST['stn']))
        	            {
        	                if($_POST['id']=='Admin' && $_POST['password']=='Admin')
        	                {
        	                    $_SESSION["user"] = $_POST['id'];
        	                    echo '<script>window.location="admin_index.php";</script>';
        	                }
        	                else if(isset($_POST['stn']) && $_POST['id']!="" )
            	            {   

                                global $dbc;
                            	$user_details = new EntityUserdata();
                            	$user_detailsModel = new ModelUserdata($dbc);
                            	$user_details = $user_detailsModel -> GetUserdataByEmail($_POST['id'])[0];
                            	if($_POST['password']==$user_details->password)
            	                {
            	                    if($user_details->status==0){
            	                        header("Location:mailer.php?email=$user_details->email");
            	                    }
            	                    else{
            	                        $_SESSION["user"] = $user_details->machine_id;
            	                    echo '<script>window.location="user_index.php";</script>';
            	                    }
            	                    
            	                }
            	                else
            	                {
            	                    echo '<script>alert("LogIn failed Please try again");window.location=window.location.href;</script>';
            	                }
            	            }
        	                else
        	                {
        	                    echo '<script>alert("LogIn failed Please try again");window.location=window.location.href;</script>';
        	                }
        	            }
        	           ?>
	               </div>
	           </div>
	       </div>
	   </div>
	  </div>
    </section>
    <!-- /.content -->
<!--  </div>-->
  <!-- /.content-wrapper -->
  
<!--</div>-->
<!-- ./wrapper -->

   <?php scriptTags() ?>
</body>
</html>