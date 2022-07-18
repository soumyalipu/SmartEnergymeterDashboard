<?php
	function headContent($fileName)
	{
		?>
	   	  <meta http-equiv="refresh" content="60">
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <title><?php echo $fileName; ?></title>

		  <!-- Google Font: Source Sans Pro -->
		  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="adminLib/plugins/fontawesome-free/css/all.min.css">
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Tempusdominus Bootstrap 4 -->
		  <link rel="stylesheet" href="adminLib/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
		  <!-- iCheck -->
		  <link rel="stylesheet" href="adminLib/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		  <!-- JQVMap -->
		  <link rel="stylesheet" href="adminLib/plugins/jqvmap/jqvmap.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="adminLib/dist/css/adminlte.min.css">
		  <!-- overlayScrollbars -->
		  <link rel="stylesheet" href="adminLib/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
		  <!-- Daterange picker -->
		  <link rel="stylesheet" href="adminLib/plugins/daterangepicker/daterangepicker.css">
		  <!-- summernote -->
		  <link rel="stylesheet" href="adminLib/plugins/summernote/summernote-bs4.min.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
		<?php
	}
	
	function navBar()
	{
		?>
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
				  <li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				  </li>
				  <li class="nav-item d-none d-sm-inline-block">
					<a href="<?php if($_SESSION['user']=="Admin"){
					    echo "admin_index.php";
					}
					else{
					    echo "user_index.php";
					}?>" class="nav-link">Home</a>
				  </li>
				  <?php
				  if($_SESSION['user']!="Admin"){
				      ?>
                        <div class="" style="z-index:2;color:#0040ff;padding-left:100%">
                        <div style="display:inline-block"><a href=" "><h4><b>Balance:<?php 
                        require_once("EntityUserdata.php");
                        require_once("ModelUserdata.php");
                        require_once("connection.php");
                        global $dbc;
                        $userdata = new EntityUserdata();
                        $userdataModel = new ModelUserdata($dbc);
                        
                        $userdataArrayList = $userdataModel -> GetUserdataByMachine_id($_SESSION['user']);
                        
                        foreach($userdataArrayList as $row)
                        {
                        echo $row->balance;
                        }
                        ?>&nbsp;&nbsp;</b></h4></a>
                        <!--<div class="" style="padding-left:15px;display:inline-block"><h5><b> </b></h5>-->
                        </div>
                        </div>
				    
				   <?php 
				  }
				  ?>
				  
				  
			</ul>
			 <ul class="navbar-nav">
			     
			 </ul>
			<!-- Right navbar links -->
			
		  </nav>
		<?php
	}
	function CurrentBalance(){
	    ?>
	    <div class="" style="z-index:2;color:white;padding-left:100%">
                <div style="display:inline-block">
	    <li class="nav-item d-none d-sm-inline-block">
					<a href="#" style=color:#0040ff;" class="nav-link">Balance:<?php 
            require_once("EntityUserdata.php");
        	require_once("ModelUserdata.php");
        	require_once("connection.php");
        	global $dbc;
        	$userdata = new EntityUserdata();
        	$userdataModel = new ModelUserdata($dbc);
            
              $userdataArrayList = $userdataModel -> GetUserdataByMachine_id($_SESSION['user']);
           
            foreach($userdataArrayList as $row)
				{
				    echo $row->balance;
				}
          ?></a>
          </li>
          </div>
          </div?
	    <?php
	}
	function sideBar()
	{
		?>
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="<?php if($_SESSION['user']=="Admin"){
					    echo "admin_index.php";
					}
					else{
					    echo "user_index.php";
					}?>" class="brand-link">
		  <img src="adminLib/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		  <span class="brand-text font-weight-light"><?php if($_SESSION['user']=="Admin"){
					    echo "Admin";
					}
					else{
					    echo "User";
					}?></span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">

		  <!-- Sidebar Menu -->
		  <nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			  <!-- Add icons to the links using the .nav-icon class
				   with font-awesome or any other icon font library -->
			  
			  
				<li class="nav-item"><a href="EntityTransactionsList.php" class="nav-link"><p>Transactions</p></a></li>
				<li class="nav-item"><a href="EntityUserdataList.php" class="nav-link"><p>Userdata</p></a></li>
               
				<li class="nav-item"><a href="logout.php" class="nav-link"><p>LogOut</p></a></li>
			  
			</ul>
		  </nav>
		  <!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	  </aside>
		<?php
	}
	function searchbar(){
	    ?>
	     <form action="EntityTransactionsList.php" method="POST">
        	<div class="input-group">
                <div class="form-outline">
                    <input type="search" class="form-control" name="sdata">
                </div>
                    <button type="submit" class="btn btn-primary" name="sbtn">
                        <i class="fas fa-search"></i>
                    </button>
            </div>
        </form>
	    <?php
	}
		function downloadecxel(){
	    ?>
	    
        	<div class="input-group">
               
                   <a href="downloadexcell.php">
                       <button onclick="" class="btn btn-primary" name="sbtn">
                        <i class="fas fa-download"></i>
                    </button>
                   </a> 
            </div>
        
        
	    <?php
	}
	function scriptTags()
	{
		?>
		<!-- jQuery -->
		<script src="adminLib/plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="adminLib/plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="adminLib/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="adminLib/plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="adminLib/plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="adminLib/plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="adminLib/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="adminLib/plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="adminLib/plugins/moment/moment.min.js"></script>
		<script src="adminLib/plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="adminLib/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="adminLib/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="adminLib/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="adminLib/dist/js/adminlte.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="adminLib/dist/js/demo.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="adminLib/dist/js/pages/dashboard.js"></script>
		<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
		<?php
	}
	function gaugescript(){
	    ?>
	    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        <?php 
            require_once("EntityUserdata.php");
        	require_once("ModelUserdata.php");
        	require_once("connection.php");
        	global $dbc;
        	$userdata = new EntityUserdata();
        	$userdataModel = new ModelUserdata($dbc);
            
               $userdataArrayList = $userdataModel -> GetUserdataByMachine_id($_SESSION['user']);
           
            foreach($userdataArrayList as $row)
				{
				    // echo "['VOLT',".$row->volt."],";
				    // echo "['CURRENT',".$row->current."],";
				    // echo "['POWER',".$row->power."]";
				}
          ?>
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['VOLT',<?php echo $row->volt ;?>],
        ]);

        var options = {
          width: 600, height: 120,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5,max:440
        };
        var formatter = new google.visualization.NumberFormat(
            {suffix: 'V',fractionDigits: 2}
        );
        formatter.format(data,1);
        var data1 = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['CURRENT',<?php echo $row->current ;?>],
        ]);

        var options1 = {
          width: 600, height: 120,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5,max:100
        };
        var formatter = new google.visualization.NumberFormat(
            {suffix: 'A',fractionDigits: 2}
        );
        formatter.format(data1,1);
        var data2 = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['POWER',<?php echo $row->power ;?>],
        ]);

        var options2 = {
          width: 600, height: 120,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5,max:10000
        };
        var formatter = new google.visualization.NumberFormat(
            {suffix: 'W',fractionDigits: 2}
        );
        formatter.format(data2,1);
        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);
        var chart = new google.visualization.Gauge(document.getElementById('chart_div1'));

        chart.draw(data1, options1);
        var chart = new google.visualization.Gauge(document.getElementById('chart_div2'));

        chart.draw(data2, options2);

       
      }
    </script>
	    <?php
	}
	function linechartscript(){
	    ?>
	    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['TIME', 'POWER', 'CURRENT','VOLT'],
          <?php 
            	require_once("EntityTransactions.php");
            	require_once("ModelTransactions.php");
            	require_once("connection.php");
            	global $dbc;
            	$transactions = new EntityTransactions();
            	$transactionsModel = new ModelTransactions($dbc);
                $transactionsArrayList = $transactionsModel -> GetTransactionsByMachine_id($_SESSION['user']);
           
            foreach($transactionsArrayList as $row)
				{
				    echo "['".$row->time."',".$row->power.",".$row->current.",".$row->volt."],";
				    
				}
          ?>
          
        ]);

        var options = {
          title: 'Energy Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	    <?php
	}
	function gauge(){
	    ?>
	    <div class="row">
	        <div class="col-md-4">
	            <div id="chart_div" style="width: 100%; height: 120px;"></div>
	        </div>
	        <div class="col-md-4">
	            <div id="chart_div1" style="width: 100%; height: 120px;"></div>
	        </div>
	        <div class="col-md-4">
	            <div id="chart_div2" style="width: 100%; height: 120px;"></div>
	        </div>
	     </div>
	    <?php
	}
	function linechart(){
	    ?>
	    <div id="curve_chart" style="width: 100%; height: 500px;overflow-x: scroll;"></div>
	    <?php
	}
	function uploadFile($file){
        $target_dir = "../uploads/";
        $dbName = uniqid(). basename($file["name"]);
        $target_file = $target_dir . $dbName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
               return $dbName;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
   }
?>