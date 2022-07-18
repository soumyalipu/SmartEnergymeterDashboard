<?php
ob_start();
    include("connection.php");
	include("function.php");
	if(!isset($_SESSION['user']))
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityUserdataEdit");?>
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
	  
	   
<!-- Start: Retrive Data -->
<?php

	require_once("EntityUserdata.php");
	require_once("ModelUserdata.php");
	require_once("connection.php");
	global $dbc;
	$userdata = new EntityUserdata();
	$userdataModel = new ModelUserdata($dbc);

	$userdata = $userdataModel -> GetUserdataById($_GET["id"])[0];
?>
<!-- End: Retrive Data-->

<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-green">Edit Userdata</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter id ..." class="w3-input form-control" name="id" id="id"  value="<?php echo $userdata->id; ?>" readonly/>
			</div>
			<!-- End: Input Field For id-->


			<!-- Start: Input Field For machine_id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Machine_id</label>
				<input type="text" placeholder="Please enter machine_id ..." class="w3-input form-control" name="machine_id" id="machine_id"  value="<?php echo $userdata->machine_id; ?>" <?php if($_SESSION['user']!="Admin"){ echo "readonly";} ?>/>
			</div>
			<!-- End: Input Field For machine_id-->


			<!-- Start: Input Field For name-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Name</label>
				<input type="text" placeholder="Please enter name ..." class="w3-input form-control" name="name" id="name"  value="<?php echo $userdata->name; ?>" />
			</div>
			<!-- End: Input Field For name-->


			<!-- Start: Input Field For email-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Email</label>
				<input type="text" placeholder="Please enter email ..." class="w3-input form-control" name="email" id="email"  value="<?php echo $userdata->email; ?>" />
			</div>
			<!-- End: Input Field For email-->


			<!-- Start: Input Field For mobile-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Mobile</label>
				<input type="text" placeholder="Please enter mobile ..." class="w3-input form-control" name="mobile" id="mobile"  value="<?php echo $userdata->mobile; ?>" />
			</div>
			<!-- End: Input Field For mobile-->


			<!-- Start: Input Field For password-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Password</label>
				<input type="text" placeholder="Please enter password ..." class="w3-input form-control" name="password" id="password"  value="<?php echo $userdata->password; ?>" />
			</div>
			<!-- End: Input Field For password-->


			<!-- Start: Input Field For address-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Address</label>
				<input type="text" placeholder="Please enter address ..." class="w3-input form-control" name="address" id="address"  value="<?php echo $userdata->address; ?>" />
			</div>
			<!-- End: Input Field For address-->


			<!-- Start: Input Field For fathers_name-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Permissible Load</label>
				<input type="text" placeholder="" class="w3-input form-control" name="fathers_name" id="fathers_name"  value="<?php echo $userdata->fathers_name; ?>" <?php if($_SESSION['user']!="Admin"){ echo "readonly";} ?>/>
			</div>
			<!-- End: Input Field For fathers_name-->


			<!-- Start: Input Field For zip_code-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Zip_code</label>
				<input type="number" placeholder="Please enter zip_code ..." class="w3-input form-control" name="zip_code" id="zip_code"  value="<?php echo $userdata->zip_code; ?>" />
			</div>
			<!-- End: Input Field For zip_code-->


			<!-- Start: Input Field For phase-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Phase</label>
				<input type="number" placeholder="Please enter phase ..." class="w3-input form-control" name="phase" id="phase"  value="<?php echo $userdata->phase; ?>" <?php if($_SESSION['user']!="Admin"){ echo "readonly";} ?>/>
			</div>
			<!-- End: Input Field For phase-->


			<!-- Start: Input Field For balance-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Balance</label>
				<input type="text" placeholder="Please enter balance ..." class="w3-input form-control" name="balance" id="balance"  value="<?php echo $userdata->balance; ?>" <?php if($_SESSION['user']!="Admin"){ echo "readonly";} ?>/>
			</div>
			<!-- End: Input Field For balance-->


			<!-- Start: Input Field For volt-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Volt</label>
				<input type="text" placeholder="Please enter volt ..." class="w3-input form-control" name="volt" id="volt"  value="<?php echo $userdata->volt; ?>" <?php if($_SESSION['user']!="Admin"){ echo "readonly";} ?> />
			</div>
			<!-- End: Input Field For volt-->


			<!-- Start: Input Field For current-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Current</label>
				<input type="text" placeholder="Please enter current ..." class="w3-input form-control" name="current" id="current"  value="<?php echo $userdata->current; ?>" <?php if($_SESSION['user']!="Admin"){ echo "readonly";} ?> />
			</div>
			<!-- End: Input Field For current-->


			<!-- Start: Input Field For power-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Power</label>
				<input type="text" placeholder="Please enter power ..." class="w3-input form-control" name="power" id="power"  value="<?php echo $userdata->power; ?>" <?php if($_SESSION['user']!="Admin"){ echo "readonly";} ?>/>
			</div>
			<!-- End: Input Field For power-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-green" name="submitForm" >Submit</button>
					<a href="EntityUserdataList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
				</div>
			</div>
			<!-- End: Submit Button-->

		</form>
	</div>
</div>
<!-- End: Edit Form HTML-->

<!-- Start: Edit Form PHP-->
<?php
	if(isset($_POST["submitForm"]))
	{

		$userdata->id = $_POST["id"];
		$userdata->machine_id = $_POST["machine_id"];
		$userdata->name = $_POST["name"];
		$userdata->email = $_POST["email"];
		$userdata->mobile = $_POST["mobile"];
		$userdata->password = $_POST["password"];
		$userdata->address = $_POST["address"];
		$userdata->fathers_name = $_POST["fathers_name"];
		$userdata->zip_code = $_POST["zip_code"];
		$userdata->phase = $_POST["phase"];
		$userdata->balance = $_POST["balance"];
		$userdata->volt = $_POST["volt"];
		$userdata->current = $_POST["current"];
		$userdata->power = $_POST["power"];

		if($userdataModel -> UpdateUserdata($userdata))
		{
			 echo '<script>alert("Userdata updated successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to updated Userdata ...");window.location=window.location.href;</script>';
		}
	}
?>
<!-- End: Edit Form PHP-->

	   
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 TechForFun</strong>
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
