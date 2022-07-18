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
  <?php headContent("EntityUserdataList");?>
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
    if($_SESSION['user']=="Admin"){
          $userdataArrayList = $userdataModel -> GetAllUserdata();
       }
       else{
           $userdataArrayList = $userdataModel -> GetUserdataByMachine_id($_SESSION['user']);
       }
?>
<!-- End: Retrive Data-->

<!-- Start: List HTML-->
<div class="container">

	<h3 class="w3-padding w3-green">Userdata List</h3>
	<div class="w3-container w3-padding w3-card-2" style="margin-top:-12px;overflow-x:scroll">
		<table class="w3-table-all display" id="example">
			<!-- Start: Table Head Details -->
			<thead>
				<tr>
					<th>Id</th>
					<th>Machine_id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Password</th>
					<th>Address</th>
					<th>Permissible Load</th>
					<th>Zip_code</th>
					<th>Phase</th>
					<th>Balance</th>
					<th>Volt</th>
					<th>Current</th>
					<th>Power</th>
					<th>OPP</th>
				<tr>
			</thead>
			<!-- End: Table Head Details -->

			<!-- Start: Table Body Details -->
			<tbody>
				<?php
				foreach($userdataArrayList as $row)
				{
					?>
					<tr>
							<td><?php echo $row->id;?></td>
							<td><?php echo $row->machine_id;?></td>
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->email;?></td>
							<td><?php echo $row->mobile;?></td>
							<td><?php echo $row->password;?></td>
							<td><?php echo $row->address;?></td>
							<td><?php echo $row->fathers_name;?></td>
							<td><?php echo $row->zip_code;?></td>
							<td><?php echo $row->phase;?></td>
							<td><?php echo $row->balance;?></td>
							<td><?php echo $row->volt;?></td>
							<td><?php echo $row->current;?></td>
							<td><?php echo $row->power;?></td>
							<td>
							
								<a href="EntityUserdataEdit.php?id=<?php echo $row->id;?>" class="w3-btn w3-green w3-small w3-round">Update</a>
								
								<a href="EntityUserdataDelete.php?id=<?php echo $row->id;?>" class="w3-btn w3-red w3-small w3-round" style="display: <?php if($_SESSION['user']!="Admin"){echo"none";}?>;";>Delete</a>
							</td>
					</tr>
					<?php
				}
				?>
			</tbody>
			<!-- End: Table body Details -->
		</table>
	</div>

</div>
<!-- End: List HTML-->


	   
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
