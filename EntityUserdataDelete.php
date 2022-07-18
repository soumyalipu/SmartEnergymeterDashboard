<?php
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
  <?php headContent("EntityUserdataDelete");?>
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

<!-- Start:  Html Content Data -->
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form method="POST">
				<h3 class="w3-padding w3-green">Do you want to delete this??</h3>
				<div class="w3-container w3-card-2" style="margin-top:-12px">
					<div class="form-group">
						<button class="w3-btn w3-small w3-round w3-red" name="submitForm" >Delete</button>
						<a href="EntityUserdataList.php" class="w3-btn w3-small w3-round w3-green" >Back</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End: Html Content Data -->

<!-- Start: Delete Data -->
<?php
	if(isset($_POST["submitForm"]))
	if($userdataModel -> DeleteUserdataById($_GET["id"]))
	{
		echo '<script>alert("Userdata record deleted successfully.");window.location="EntityUserdataList.php";</script>';
	}
	else
	{
		echo '<script>alert("Unable to delete Userdata.");window.location="EntityUserdataList.php";</script>';
	}
	
?>
<!-- End: Delete Data-->


	   
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 SSSTech</strong>
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
