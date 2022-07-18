<?php
    include("connection.php");
	include("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("Signup");?>
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
	                   <h4>Do Register</h4>
	               </div>
	               <div class="card-body">
	                    <form method="POST">
        	               <div class="form-group">
        	                   <lable>Name</lable>
        	                   <input type="text" name="name" class="form-control" />
        	               </div>
        	               <div class="form-group">
        	                   <lable>Mobile</lable>
        	                   <input type="number" name="mobile" class="form-control" />
        	               </div>
        	               <div class="form-group">
        	                   <lable>Email</lable>
        	                   <input type="mail" name="email" class="form-control" />
        	               </div>
        	               <div class="form-group">
        	                   <lable>Password</lable>
        	                   <input type="password" name="password" class="form-control" />
        	               </div>
        	               <div class="form-group">
        	                   <button class="w3-btn w3-blue w3-round" name="stn">SignUp</button>
        	               </div>
        	           </form>
        	           <?php
        	            
        	            if(isset($_POST["stn"]))
                    	{
                    
                    		require_once("EntityUserdata.php");
                    		require_once("ModelUserdata.php");
                    		require_once("connection.php");
                    		global $dbc;
                    		$userData = new EntityUserdata();
                    		$userDataModel = new ModelUserdata($dbc);
                    
                    		$userData->machine_id = "";
                    		$userData->name = $_POST["name"];
                    		$userData->email = $_POST["email"];
                    		$userData->mobile = $_POST["mobile"];
                    		$userData->password = $_POST["password"];
                    		$userData->address = "";
                    		$userData->fathers_name = "";
                    		$userData->zip_code = "";
                    		$userData->phase = "";
                            $userData->balance = 0;
                            $userData->volt = 0;
                            $userData->current = 0;
                            $userData->power = 0;
                    		if($userDataModel -> InsertUserdata($userData))
                    		{
                    			 echo '<script>alert("Your profile created successfully...");window.location="login.php";</script>';
                    		}
                    		else
                    		{
                    			 echo '<script>alert("Unable to create profile ...");window.location=window.location.href;</script>';
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