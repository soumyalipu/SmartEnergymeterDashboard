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
  <?php headContent("EntityTransactionsCreate");?>
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
	  
	   
<!-- Start: Edit Form HTML-->
<div class="container">
	<h3 class="w3-padding w3-card-2 w3-green">Create Transactions</h3>
	<div class="w3-card-2 w3-padding " style="margin-top:-12px;overflow-x:scroll" >
		<form method="POST" enctype="multipart/form-data" >

			<!-- Start: Input Field For id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Id</label>
				<input type="number" placeholder="Please enter id ..." class="w3-input form-control" name="id" id="id"  />
			</div>
			<!-- End: Input Field For id-->


			<!-- Start: Input Field For machine_id-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Machine_id</label>
				<input type="number" placeholder="Please enter machine_id ..." class="w3-input form-control" name="machine_id" id="machine_id"  />
			</div>
			<!-- End: Input Field For machine_id-->


			<!-- Start: Input Field For bill_amount-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Bill_amount</label>
				<input type="number" placeholder="Please enter bill_amount ..." class="w3-input form-control" name="bill_amount" id="bill_amount"  />
			</div>
			<!-- End: Input Field For bill_amount-->


			<!-- Start: Input Field For curr_balance-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Curr_balance</label>
				<input type="number" placeholder="Please enter curr_balance ..." class="w3-input form-control" name="curr_balance" id="curr_balance"  />
			</div>
			<!-- End: Input Field For curr_balance-->


			<!-- Start: Input Field For volt-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Volt</label>
				<input type="text" placeholder="Please enter volt ..." class="w3-input form-control" name="volt" id="volt"  />
			</div>
			<!-- End: Input Field For volt-->


			<!-- Start: Input Field For current-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Current</label>
				<input type="text" placeholder="Please enter current ..." class="w3-input form-control" name="current" id="current"  />
			</div>
			<!-- End: Input Field For current-->


			<!-- Start: Input Field For power-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Power</label>
				<input type="text" placeholder="Please enter power ..." class="w3-input form-control" name="power" id="power"  />
			</div>
			<!-- End: Input Field For power-->


			<!-- Start: Input Field For date-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Date</label>
				<input type="date" placeholder="Please enter date ..." class="w3-input form-control" name="date" id="date"  />
			</div>
			<!-- End: Input Field For date-->


			<!-- Start: Input Field For time-->
			<div class="form-group col-md-12">
				<label><i class="null"></i> Time</label>
				<input type="text" placeholder="Please enter time ..." class="w3-input form-control" name="time" id="time"  />
			</div>
			<!-- End: Input Field For time-->


			<!-- Start: Submit Button-->
			<div class="col-md-12">
				<div class="form-group">
					<button class="w3-btn w3-small w3-round w3-green" name="submitForm" >Submit</button>
					<a href="EntityTransactionsList.php" class="w3-btn w3-small w3-round w3-red" >Back</a>
				</div>
			</div>
			<!-- End: Submit Button-->

		</form>
	</div>
</div>
<!-- End: Create Form HTML-->

<!-- Start: Create Form PHP-->
<?php
	if(isset($_POST["submitForm"]))
	{

		require_once("EntityTransactions.php");
		require_once("ModelTransactions.php");
		require_once("connection.php");
		global $dbc;
		$transactions = new EntityTransactions();
		$transactionsModel = new ModelTransactions($dbc);

		$transactions->id = $_POST["id"];
		$transactions->machine_id = $_POST["machine_id"];
		$transactions->bill_amount = $_POST["bill_amount"];
		$transactions->curr_balance = $_POST["curr_balance"];
		$transactions->volt = $_POST["volt"];
		$transactions->current = $_POST["current"];
		$transactions->power = $_POST["power"];
		$transactions->date = $_POST["date"];
		$transactions->time = $_POST["time"];

		if($transactionsModel -> InsertTransactions($transactions))
		{
			 echo '<script>alert("Transactions created successfully...");window.location=window.location.href;</script>';
		}
		else
		{
			 echo '<script>alert("Unable to create Transactions ...");window.location=window.location.href;</script>';
		}
	}
?>
<!-- End: Create Form PHP-->

	   
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
