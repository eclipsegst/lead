<!DOCTYPE html>
<html lang="en">
<head>

<title>Missouri Crisis Line</title>

<link href="http://static.zephyrcharts.com/bs3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="http://static.zephyrcharts.com/media/bootstrap.mod.css" rel="stylesheet">
<link href="http://static.zephyrcharts.com/zhao/css/style.css" rel="stylesheet">

    <script type="text/javascript" src="http://static.zephyrcharts.com/bs_caro/jquery-1.9.1.min.js"></script>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<?php
  $role = $this->session->userdata('role');
  $firstname = $this->session->userdata('firstname');
  $username = $this->session->userdata('username');
  if($role!='user'){
    header('Location: '. base_url());
  }
?>
</head>

<body onload="init()">
	
	
        
    	<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
        
        <a class="navbar-brand" href="/~cs4380sp14grp12/lead/home_user/"><?php echo $firstname;?></a>
          <ul class="nav navbar-nav">
  			<li>
  				<a href="<?php echo base_url(); ?>volunteer_update?username=<?php echo $username;?>">My info</a>
  			</li>
  			<li>
  				<a href="/~cs4380sp14grp12/lead/test_list/">Take a Test</a>
  			</li>
  			<li>
  				<a href="/~cs4380sp14grp12/lead/schedule_user/">My Schedule/Add Times</a>
  			</li>
  			<li>
  				<a href="/~cs4380sp14grp12/lead/user_stats_user/">My Stats</a>
  			</li>
        <li>
          <a href="/~cs4380sp14grp12/lead/request/">Request Timesheet</a>
        </li>




          </ul>
          
          
          <ul class="nav navbar-nav pull-right">

			<li class="pull-right">
				<a href="/~cs4380sp14grp12/lead/home_1/">Logout</a>
			</li>
            
             </ul>
          
        </div>
	</div>