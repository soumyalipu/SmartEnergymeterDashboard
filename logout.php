<?php
ob_start();
  session_start(); //to ensure you are using same session
$_SESSION["user"]=null;
unset($_SESSION["user"]);
header("Location:index.php");
    
    //echo "<script>location='index.php'</script>";
?>