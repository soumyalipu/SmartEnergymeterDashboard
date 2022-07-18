<?php
require_once("connection.php");
// $id = $_POST['name'];
$machine = $_GET['machine_id'];
$bill = $_GET['unit'];
$volt = $_GET['volt'];
$current = $_GET['current'];
$power = $_GET['power'];

	if(isset($_GET["machine_id"]))
	{
	    require_once("EntityUserdata.php");
    	require_once("ModelUserdata.php");
    	require_once("connection.php");
    	global $dbc;
    	$userData = new EntityUserdata();
    	$userDataModel = new ModelUserdata($dbc);
    
    	$userData = $userDataModel -> GetUserdataByMachine_id($machine)[0];

		require_once("EntityTransactions.php");
		require_once("ModelTransactions.php");
		
		$transactions = new EntityTransactions();
		$transactionsModel = new ModelTransactions($dbc);

		$transactions->machine_id = $userData->machine_id ;
		$transactions->bill_amount = $bill;
		
		if(($userData->balance - (5 * $bill)) > 0)
		{
    		$userData->balance = $userData->balance - (5 * $bill);
    		$transactions->curr_balance = $userData->balance;
    		$transactions->power=$power;
    		$transactions->volt=$volt;
    		$transactions->current=$current;
    		$transactions->date=date("Y-m-d");
    		$transactions->time=date("h:i:s A");
    		$userData->power=$power;
    		$userData->volt=$volt;
    		$userData->current=$current;
    		if($transactionsModel -> InsertTransactions($transactions) && $userDataModel -> UpdateUserdata($userData) )
    		{
    		    echo $userData->balance;
    		}
    		else
    		{
    		    echo "Failed";
    		}
		}
		else
		{
		    echo "Insuficient Balance";
		}
	}

?>