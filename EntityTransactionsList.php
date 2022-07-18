<?php
ob_start();
    include("connection.php");
	include("function.php");
	$a=$_SESSION['user'];
	echo$_SESSION['user'];
	if(!isset($_SESSION['user']))
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("EntityTransactionsList");?>
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

	require_once("EntityTransactions.php");
	require_once("ModelTransactions.php");
	require_once("connection.php");
	global $dbc;
	$transactions = new EntityTransactions();
	$transactionsModel = new ModelTransactions($dbc);

	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	    $_skey=$_REQUEST['sdata'];
	    
	    if($_skey!=null){
	        $transactionsArrayList = $transactionsModel -> GetTransactionsByMachine_id($_skey);
	    }
	    else{
	         $transactionsArrayList = $transactionsModel -> GetAllTransactions();
	    }
	   
	}
	else{
	    if($_SESSION['user']=="Admin"){
           $transactionsArrayList = $transactionsModel -> GetAllTransactions();
       }
       else{
           $transactionsArrayList = $transactionsModel -> GetTransactionsByMachine_id($_SESSION['user']);
       }
	    
	}
?>
<!-- End: Retrive Data-->

<!-- Start: List HTML-->
<div class="container">
    <h3 class="w3-padding w3-card-2 w3-green">Transactions List 
       <?php if($_SESSION['user']=="Admin"){
           searchbar();
       }
       else{
           downloadecxel();
       }?>
    </h3>
        <!--<div class="w3-card-2 w3-padding " style="margin-top:-12px;" >
            <form action="EntityTransactionsList.php" method="POST">
                	<div class="form-group col-sm-4">
				<button type="submit" name="sbuton"><i class="fas fa-search"></i></button>
				<input class="w3-input form-control" type="text" name="sdata" maxlength="6" size="6">
				</form>
	
			</div>
            
	   
        </div>-->
        
	
    
	

	
	<div class="w3-container w3-padding w3-card-2" style="margin-top:-12px;overflow-x:scroll">
		<table class="w3-table-all display" id="example">
			<!-- Start: Table Head Details -->
			<thead>
				<tr>
					<th>Id</th>
					<th>Machine_id</th>
					<th>Bill_amount</th>
					<th>Curr_balance</th>
					<th>Volt</th>
					<th>Current</th>
					<th>Power</th>
					<th>Date</th>
					<th>Time</th>
					
				<tr>
			</thead>
			<!-- End: Table Head Details -->

			<!-- Start: Table Body Details -->
			<tbody>
				<?php
				
				    	foreach($transactionsArrayList as $row)
				{
					?>
					<tr>
							<td><?php echo $row->id;?></td>
							<td><?php echo $row->machine_id;?></td>
							<td><?php echo $row->bill_amount;?></td>
							<td><?php echo $row->curr_balance;?></td>
							<td><?php echo $row->volt;?></td>
							<td><?php echo $row->current;?></td>
							<td><?php echo $row->power;?></td>
							<td><?php echo $row->date;?></td>
							<td><?php echo $row->time;?></td>
							
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
