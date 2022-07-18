
<?php
	class ModelUserdata{
	/********************** [Start : Cunstructer, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************/
	function __construct($dbc)
	{
		$this -> conn = $dbc;
	}
	/********************** [End : Cunstructer, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************/

	/********************** [Start : Insert Userdata, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************/
	function InsertUserdata($userdata)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("INSERT INTO userdata (id,machine_id,name,email,mobile,password,address,fathers_name,zip_code,phase,balance,volt,current,power) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isssssssssdddd",$userdata->id,$userdata->machine_id,$userdata->name,$userdata->email,$userdata->mobile,$userdata->password,$userdata->address,$userdata->fathers_name,$userdata->zip_code,$userdata->phase,$userdata->balance,$userdata->volt,$userdata->current,$userdata->power);
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
	/********************** [End : Insert Userdata, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : GetAllUserdata, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*********************************************************************************************************************/
	function GetAllUserdata()
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata ");
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByUserdata, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetUserdataById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************/
	function GetUserdataById($id)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `id` = ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************/

	/********************** [Start : GetUserdataByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/
	function GetUserdataByMachine_id($machine_id)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `machine_id` = ? ");
		$stmt->bind_param("s",$machine_id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	function DownloadUserdataByMachine_id()
	{
	    echo"<script>alert('gjhghjgjh');</script>";
        
	}
	/********************** [End : GetUserdataByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : GetUserdataByName, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************/
	function GetUserdataByName($name)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `name` = ? ");
		$stmt->bind_param("s",$name);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByName, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetUserdataByEmail, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/
	function GetUserdataByEmail($email)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `email` = ? ");
		$stmt->bind_param("s",$email);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByEmail, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetUserdataByMobile, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/
	function GetUserdataByMobile($mobile)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `mobile` = ? ");
		$stmt->bind_param("s",$mobile);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByMobile, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************/

	/********************** [Start : GetUserdataByPassword, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function GetUserdataByPassword($password)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `password` = ? ");
		$stmt->bind_param("s",$password);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByPassword, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetUserdataByAddress, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/
	function GetUserdataByAddress($address)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `address` = ? ");
		$stmt->bind_param("s",$address);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByAddress, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetUserdataByFathers_name, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************************/
	function GetUserdataByFathers_name($fathers_name)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `fathers_name` = ? ");
		$stmt->bind_param("s",$fathers_name);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByFathers_name, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/

	/********************** [Start : GetUserdataByZip_code, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function GetUserdataByZip_code($zip_code)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `zip_code` = ? ");
		$stmt->bind_param("i",$zip_code);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByZip_code, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : GetUserdataByPhase, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/
	function GetUserdataByPhase($phase)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `phase` = ? ");
		$stmt->bind_param("i",$phase);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByPhase, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : GetUserdataByBalance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/
	function GetUserdataByBalance($balance)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `balance` = ? ");
		$stmt->bind_param("i",$balance);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByBalance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetUserdataByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/************************************************************************************************************************/
	function GetUserdataByVolt($volt)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `volt` = ? ");
		$stmt->bind_param("s",$volt);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************/

	/********************** [Start : GetUserdataByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/
	function GetUserdataByCurrent($current)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `current` = ? ");
		$stmt->bind_param("s",$current);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : GetUserdataByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/
	function GetUserdataByPower($power)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `power` = ? ");
		$stmt->bind_param("s",$power);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : GetUserdataByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************/


	/********************** [Start : SearchUserdataById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/
	function SearchUserdataById($id)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `id` like ? ");
		$stmt->bind_param("i",$id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : SearchUserdataByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*********************************************************************************************************************************/
	function SearchUserdataByMachine_id($machine_id)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `machine_id` like ? ");
		$stmt->bind_param("s",$machine_id);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : SearchUserdataByName, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchUserdataByName($name)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `name` like ? ");
		$stmt->bind_param("s",$name);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByName, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchUserdataByEmail, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchUserdataByEmail($email)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `email` like ? ");
		$stmt->bind_param("s",$email);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByEmail, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchUserdataByMobile, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/
	function SearchUserdataByMobile($mobile)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `mobile` like ? ");
		$stmt->bind_param("s",$mobile);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByMobile, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : SearchUserdataByPassword, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchUserdataByPassword($password)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `password` like ? ");
		$stmt->bind_param("s",$password);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByPassword, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchUserdataByAddress, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchUserdataByAddress($address)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `address` like ? ");
		$stmt->bind_param("s",$address);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByAddress, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchUserdataByFathers_name, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************************/
	function SearchUserdataByFathers_name($fathers_name)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `fathers_name` like ? ");
		$stmt->bind_param("s",$fathers_name);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByFathers_name, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : SearchUserdataByZip_code, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function SearchUserdataByZip_code($zip_code)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `zip_code` like ? ");
		$stmt->bind_param("i",$zip_code);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByZip_code, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : SearchUserdataByPhase, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchUserdataByPhase($phase)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `phase` like ? ");
		$stmt->bind_param("i",$phase);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByPhase, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : SearchUserdataByBalance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchUserdataByBalance($balance)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `balance` like ? ");
		$stmt->bind_param("i",$balance);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByBalance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchUserdataByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/
	function SearchUserdataByVolt($volt)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `volt` like ? ");
		$stmt->bind_param("s",$volt);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : SearchUserdataByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/
	function SearchUserdataByCurrent($current)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `current` like ? ");
		$stmt->bind_param("s",$current);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : SearchUserdataByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function SearchUserdataByPower($power)
	{
		$conn = $this -> conn;
		$userdataArrayList = array();
		$stmt = $conn->prepare("select * from userdata where `power` like ? ");
		$stmt->bind_param("s",$power);
		if($stmt->execute())
		{
			$resultSet = $stmt->get_result();
			while($record = $resultSet -> fetch_assoc()){
			$tempClass = new EntityUserdata();
			foreach($record as $key => $val){
				$tempClass -> $key = $val;
			}
			array_push($userdataArrayList,$tempClass);
			}
		}
		else
		{
			die($stmt->error);
		}
		$stmt ->close();
		return $userdataArrayList;
	}
	/********************** [End : SearchUserdataByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/


	/********************** [Start : DeleteUserdataById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/
	function DeleteUserdataById($id)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `id` = ? ");
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
	/********************** [End : DeleteUserdataById, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************/

	/********************** [Start : DeleteUserdataByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*********************************************************************************************************************************/
	function DeleteUserdataByMachine_id($machine_id)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `machine_id` = ? ");
		$stmt->bind_param("s",$machine_id);
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
	/********************** [End : DeleteUserdataByMachine_id, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByName, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteUserdataByName($name)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `name` = ? ");
		$stmt->bind_param("s",$name);
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
	/********************** [End : DeleteUserdataByName, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByEmail, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteUserdataByEmail($email)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `email` = ? ");
		$stmt->bind_param("s",$email);
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
	/********************** [End : DeleteUserdataByEmail, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByMobile, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/
	function DeleteUserdataByMobile($mobile)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `mobile` = ? ");
		$stmt->bind_param("s",$mobile);
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
	/********************** [End : DeleteUserdataByMobile, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByPassword, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteUserdataByPassword($password)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `password` = ? ");
		$stmt->bind_param("s",$password);
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
	/********************** [End : DeleteUserdataByPassword, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByAddress, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteUserdataByAddress($address)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `address` = ? ");
		$stmt->bind_param("s",$address);
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
	/********************** [End : DeleteUserdataByAddress, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByFathers_name, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***********************************************************************************************************************************/
	function DeleteUserdataByFathers_name($fathers_name)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `fathers_name` = ? ");
		$stmt->bind_param("s",$fathers_name);
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
	/********************** [End : DeleteUserdataByFathers_name, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*********************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByZip_code, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*******************************************************************************************************************************/
	function DeleteUserdataByZip_code($zip_code)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `zip_code` = ? ");
		$stmt->bind_param("i",$zip_code);
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
	/********************** [End : DeleteUserdataByZip_code, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*****************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByPhase, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteUserdataByPhase($phase)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `phase` = ? ");
		$stmt->bind_param("i",$phase);
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
	/********************** [End : DeleteUserdataByPhase, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByBalance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteUserdataByBalance($balance)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `balance` = ? ");
		$stmt->bind_param("i",$balance);
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
	/********************** [End : DeleteUserdataByBalance, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/***************************************************************************************************************************/
	function DeleteUserdataByVolt($volt)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `volt` = ? ");
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
	/********************** [End : DeleteUserdataByVolt, Auto Generated Code Mon Feb 14 2022] ****************************/
	/*************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/******************************************************************************************************************************/
	function DeleteUserdataByCurrent($current)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `current` = ? ");
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
	/********************** [End : DeleteUserdataByCurrent, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/

	/********************** [Start : DeleteUserdataByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/****************************************************************************************************************************/
	function DeleteUserdataByPower($power)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("Delete from userdata where `power` = ? ");
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
	/********************** [End : DeleteUserdataByPower, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**************************************************************************************************************************/

	/********************** [Start : Update Userdata, Auto Generated Code Mon Feb 14 2022] ****************************/
	/**********************************************************************************************************************/
	function UpdateUserdata($userdata)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update userdata set id = ? ,machine_id = ? ,name = ? ,email = ? ,mobile = ? ,password = ? ,address = ? ,fathers_name = ? ,zip_code = ? ,phase = ? ,balance = ? ,volt = ? ,current = ? ,power = ? where id = ? ");
		$stmt->bind_param("isssssssssddddi",$userdata->id,$userdata->machine_id,$userdata->name,$userdata->email,$userdata->mobile,$userdata->password,$userdata->address,$userdata->fathers_name,$userdata->zip_code,$userdata->phase,$userdata->balance,$userdata->volt,$userdata->current,$userdata->power,$userdata->id);
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
	function UpdateUserstatus($userdata)
	{
		$conn = $this -> conn;
		$stmt = $conn->prepare("update userdata set status = ? where email = ? ");
		$s=1;
		$stmt->bind_param("is",$s,$userdata);
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
	/********************** [End : Update Userdata, Auto Generated Code Mon Feb 14 2022] ****************************/
	/********************************************************************************************************************/

}
?>
