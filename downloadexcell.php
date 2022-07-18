<?php
ob_start();
    include("connection.php");
	include("function.php");
	if(!isset($_SESSION['user']))
{
    header("Location:login.php");
}
require_once("EntityTransactions.php");
	require_once("ModelTransactions.php");
	require_once("connection.php");
	global $dbc;
	$transactions = new EntityTransactions();
	$transactionsModel = new ModelTransactions($dbc);
    $transactionsArrayList = $transactionsModel -> GetTransactionsByMachine_id($_SESSION['user']);
    header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
?>
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