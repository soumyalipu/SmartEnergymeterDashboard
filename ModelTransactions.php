
<?php
	class ModelTransactions{
	/********************** [Start : Cunstructer, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Transactions, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/
	function InsertTransactions($transactions)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO transactions (id,machine_id,bill_amount,curr_balance,volt,current,power,date,time) VALUES (?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("iidddddss",$transactions->id,$transactions->machine_id,$transactions->bill_amount,$transactions->curr_balance,$transactions->volt,$transactions->current,$transactions->power,$transactions->date,$transactions->time);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			die($stmt->error);
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Insert Transactions, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetAllTransactions, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/
	function GetAllTransactions()
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByTransactions, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : GetTransactionsById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/
	function GetTransactionsById($id)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `id` = ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetTransactionsByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************************/
	function GetTransactionsByMachine_id($machine_id)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `machine_id` = ? ");
		$stmt->bind_param("i",$machine_id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : GetTransactionsByBill_amount, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************************/
	function GetTransactionsByBill_amount($bill_amount)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `bill_amount` = ? ");
		$stmt->bind_param("i",$bill_amount);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByBill_amount, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : GetTransactionsByCurr_balance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************************/
	function GetTransactionsByCurr_balance($curr_balance)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `curr_balance` = ? ");
		$stmt->bind_param("i",$curr_balance);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByCurr_balance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************************/

	/********************** [Start : GetTransactionsByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function GetTransactionsByVolt($volt)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `volt` = ? ");
		$stmt->bind_param("s",$volt);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetTransactionsByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function GetTransactionsByCurrent($current)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `current` = ? ");
		$stmt->bind_param("s",$current);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : GetTransactionsByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/
	function GetTransactionsByPower($power)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `power` = ? ");
		$stmt->bind_param("s",$power);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : GetTransactionsByDate, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function GetTransactionsByDate($date)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `date` = ? ");
		$stmt->bind_param("s",$date);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByDate, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetTransactionsByTime, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function GetTransactionsByTime($time)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `time` = ? ");
		$stmt->bind_param("s",$time);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : GetTransactionsByTime, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/


	/********************** [Start : SearchTransactionsById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchTransactionsById($id)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `id` like ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchTransactionsByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************************/
	function SearchTransactionsByMachine_id($machine_id)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `machine_id` like ? ");
		$stmt->bind_param("i",$machine_id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : SearchTransactionsByBill_amount, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************************/
	function SearchTransactionsByBill_amount($bill_amount)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `bill_amount` like ? ");
		$stmt->bind_param("i",$bill_amount);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsByBill_amount, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : SearchTransactionsByCurr_balance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************************/
	function SearchTransactionsByCurr_balance($curr_balance)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `curr_balance` like ? ");
		$stmt->bind_param("i",$curr_balance);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsByCurr_balance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : SearchTransactionsByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchTransactionsByVolt($volt)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `volt` like ? ");
		$stmt->bind_param("s",$volt);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchTransactionsByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************************/
	function SearchTransactionsByCurrent($current)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `current` like ? ");
		$stmt->bind_param("s",$current);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : SearchTransactionsByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************************/
	function SearchTransactionsByPower($power)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `power` like ? ");
		$stmt->bind_param("s",$power);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : SearchTransactionsByDate, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchTransactionsByDate($date)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `date` like ? ");
		$stmt->bind_param("s",$date);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsByDate, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchTransactionsByTime, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchTransactionsByTime($time)
	{
		$conn = $this -> conn;
		$transactionsArrayList = array();
		$stmt = $conn->prepare("select * from transactions where `time` like ? ");
		$stmt->bind_param("s",$time);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityTransactions();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($transactionsArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $transactionsArrayList;
	}
	/********************** [End : SearchTransactionsByTime, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/


	/********************** [Start : DeleteTransactionsById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteTransactionsById($id)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `id` = ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteTransactionsByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************************/
	function DeleteTransactionsByMachine_id($machine_id)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `machine_id` = ? ");
		$stmt->bind_param("i",$machine_id);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************************/

	/********************** [Start : DeleteTransactionsByBill_amount, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************************/
	function DeleteTransactionsByBill_amount($bill_amount)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `bill_amount` = ? ");
		$stmt->bind_param("i",$bill_amount);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsByBill_amount, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************************/

	/********************** [Start : DeleteTransactionsByCurr_balance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************************/
	function DeleteTransactionsByCurr_balance($curr_balance)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `curr_balance` = ? ");
		$stmt->bind_param("i",$curr_balance);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsByCurr_balance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************************/

	/********************** [Start : DeleteTransactionsByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteTransactionsByVolt($volt)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `volt` = ? ");
		$stmt->bind_param("s",$volt);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteTransactionsByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************************/
	function DeleteTransactionsByCurrent($current)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `current` = ? ");
		$stmt->bind_param("s",$current);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************************/

	/********************** [Start : DeleteTransactionsByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************************/
	function DeleteTransactionsByPower($power)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `power` = ? ");
		$stmt->bind_param("s",$power);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : DeleteTransactionsByDate, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteTransactionsByDate($date)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `date` = ? ");
		$stmt->bind_param("s",$date);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsByDate, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteTransactionsByTime, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteTransactionsByTime($time)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from transactions where `time` = ? ");
		$stmt->bind_param("s",$time);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : DeleteTransactionsByTime, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : Update Transactions, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/
	function UpdateTransactions($transactions)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update transactions set id = ? ,machine_id = ? ,bill_amount = ? ,curr_balance = ? ,volt = ? ,current = ? ,power = ? ,date = ? ,time = ? where id = ? ");
		$stmt->bind_param("iidddddssi",$transactions->id,$transactions->machine_id,$transactions->bill_amount,$transactions->curr_balance,$transactions->volt,$transactions->current,$transactions->power,$transactions->date,$transactions->time,$transactions->id);
		if($stmt->execute())
		{
			$stmt ->close();
			return true;
		}
		else
		{
			$stmt ->close();
			return false;
		}
	}
	/********************** [End : Update Transactions, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************/

}
?>
