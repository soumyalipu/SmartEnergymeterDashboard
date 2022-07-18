<?php
   ob_start();
    include("connection.php");
	include("function.php");

  if(!isset($_SESSION['user']))
  {
      header("Location:login.php");
  }
	require_once("EntityUserdata.php");
	require_once("ModelUserdata.php");
	global $dbc;
	$userdata = new EntityUserdata();
	$userdataModel = new ModelUserdata($dbc);

	$userdata = $userdataModel -> GetUserdataByMachine_id($_SESSION['user'])[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
  headContent('user');
  gaugescript();
  linechartscript();
  
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
	<?php navBar(); ?>
  <!-- /.navbar -->

  <!-- Start: Main Sidebar Container -->
	<?php sideBar(); ?>
  <!-- End: Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	  <div clas="row">
	      <div class="col-sm-9" style="float:left;">
	          <?php 
	            gauge();
	            linechart();
	          ?>
	      </div>
	      <div class="col-sm-3" style="float:right;border:5px solid gray;">
	            
	          <form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For id-->
			
			<!-- End: Input Field For id-->


			<!-- Start: Input Field For machine_id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Consumer ID</label>
				<input type="text" placeholder="" class="w3-input form-control" name="machine_id" id="machine_id"  value="<?php echo $userdata->machine_id; ?>" readonly/>
			</div>
			<!-- End: Input Field For machine_id-->


			<!-- Start: Input Field For name-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Name</label>
				<input type="text" placeholder="Please enter name ..." class="w3-input form-control" name="name" id="name"  value="<?php echo $userdata->name; ?>" readonly />
			</div>
			<!-- End: Input Field For name-->


			<!-- Start: Input Field For email-->
			<!--<div class="form-group col-md-12">-->
			<!--	<label><i class="null"></i> Email</label>-->
			<!--	<input type="text" placeholder="Please enter email ..." class="w3-input form-control" name="email" id="email"  value="<?php echo $userdata->email; ?>" readonly/>-->
			<!--</div>-->
			<!-- End: Input Field For email-->


			<!-- Start: Input Field For mobile-->
			<!--<div class="form-group col-md-12">-->
			<!--	<label><i class="null"></i> Mobile</label>-->
			<!--	<input type="text" placeholder="Please enter mobile ..." class="w3-input form-control" name="mobile" id="mobile"  value="<?php echo $userdata->mobile; ?>" readonly/>-->
			<!--</div>-->
			<!-- End: Input Field For mobile-->


			<!-- Start: Input Field For password-->
			<!--<div class="form-group col-md-12">-->
			<!--	<label><i class="null"></i> Password</label>-->
			<!--	<input type="text" placeholder="Please enter password ..." class="w3-input form-control" name="password" id="password"  value="<?php echo $userdata->password; ?>" readonly/>-->
			<!--</div>-->
			<!-- End: Input Field For password-->


			<!-- Start: Input Field For address-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Address</label>
				<input type="text" placeholder="Please enter address ..." class="w3-input form-control" name="address" id="address"  value="<?php echo $userdata->address; ?>" readonly/>
			</div>
			<!-- End: Input Field For address-->
	<!-- Start: Input Field For zip_code-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Zip_code</label>
				<input type="number" placeholder="Please enter zip_code ..." class="w3-input form-control" name="zip_code" id="zip_code"  value="<?php echo $userdata->zip_code; ?>" readonly />
			</div>
			<!-- End: Input Field For zip_code-->

			<!-- Start: Input Field For fathers_name-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Permissible Load</label>
				<input type="text" placeholder="" class="w3-input form-control" name="fathers_name" id="fathers_name"  value="<?php echo $userdata->fathers_name; ?>" readonly />
			</div>
			<!-- End: Input Field For fathers_name-->


		


			<!-- Start: Input Field For phase-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Phase</label>
				<input type="number" placeholder="" class="w3-input form-control" name="phase" id="phase"  value="<?php echo $userdata->phase; ?>" <?php if($_SESSION['user']!="Admin"){ echo "readonly";} ?> readonly/>
			</div>
			<!-- End: Input Field For phase-->


			<!-- Start: Input Field For balance-->
			<!--<div class="form-group col-md-12">-->
			<!--	<label><i class="null"></i> Balance</label>-->
			<!--	<input type="text" placeholder="Please enter balance ..." class="w3-input form-control" name="balance" id="balance"  value="<?php echo $userdata->balance; ?>" readonly />-->
			<!--</div>-->
			<!-- End: Input Field For balance-->


			<!-- Start: Input Field For volt-->
			<!--<div class="form-group col-md-12">-->
			<!--	<label><i class="null"></i> Volt</label>-->
			<!--	<input type="text" placeholder="Please enter volt ..." class="w3-input form-control" name="volt" id="volt"  value="<?php echo $userdata->volt; ?>" readonly />-->
			<!--</div>-->
			<!-- End: Input Field For volt-->


			<!-- Start: Input Field For current-->
			<!--<div class="form-group col-md-12">-->
			<!--	<label><i class="null"></i> Current</label>-->
			<!--	<input type="text" placeholder="Please enter current ..." class="w3-input form-control" name="current" id="current"  value="<?php echo $userdata->current; ?>" readonly />-->
			<!--</div>-->
			<!-- End: Input Field For current-->


			<!-- Start: Input Field For power-->
			<!--<div class="form-group col-md-12">-->
			<!--	<label><i class="null"></i> Power</label>-->
			<!--	<input type="text" placeholder="Please enter power ..." class="w3-input form-control" name="power" id="power"  value="<?php echo $userdata->power; ?>" readonly />-->
			<!--</div>-->
			<!-- End: Input Field For power-->


			
			<!-- End: Submit Button-->

		</form>
	          
	      </div>
	      
	  </div>
	  
	  
	   
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 TechForFun</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

   <?php scriptTags() ?>
</body>
</html>