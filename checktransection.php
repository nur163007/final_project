<?php
session_start(); 
$servername = "localhost";
           $username = "root";
          $password = "";
           $dbname = "bms";

        $conn= new mysqli($servername, $username, $password,$dbname);
         $error="";
         if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
           }
		   
		   $sql ="select count(transection_id) AS total from transection";
		   $result =mysqli_query($conn,$sql);
		   $values = mysqli_fetch_assoc($result);
		   $output =$values['total'];

		   
		   $pending ="select count(account_no) AS total from customer_fund where deposit='Pending'";
		   $pending1 =mysqli_query($conn,$pending);
		   $pending2 = mysqli_fetch_assoc($pending1);
		   $pending3 =$pending2['total'];
		  
		  
		   $transfer ="select count(account_no) AS total from customer_fund where remark1='transfer'";
		   $transfer1 =mysqli_query($conn,$transfer);
		   $transfer2 = mysqli_fetch_assoc($transfer1);
		   $transfer3 =$transfer2['total'];
		   
		   
		   $withdarw ="select count(account_no) AS total from customer_fund where remark2='withdrawl'";
		   $withdarw1 = mysqli_query($conn,$withdarw);
		   $withdarw2 = mysqli_fetch_assoc($withdarw1);
		   $withdarw3 =$withdarw2['total'];
		   
?>
<html lang="en">
			  <head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="shortcut icon" href="card.jpg"/>
                
				<!-- Bootstrap CSS -->
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|PT+Sans:400,700&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="bootstrap.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
				 <script src="jquery-3.5.1.min.js"></script>
				 
				
				<link rel="stylesheet" href="main.css">
				<title>BMS</title>
			  </head>
			  <body>	
			   <input type="checkbox"id="check">
                        <!-- header navbar starts-->
		    <div class="wrapper">
			    <div class="headertop">
				<label for="check">
			              <i class="fa fa-bars sidebar_btn"></i>
			            </label>
			        <div class="header_menu">
			           <div class="title"> <h3>B<span>ank</span>M<span>anagement</span>S<span>ystem</span></h3> </div>
			                    
			  <ul>
			  <li> <a href="#"id="profile"><i class="fa fa-user"></i></a></li>
			  </ul>
			  
			  <div class="logoutdiv">
			  <div class="container-fluid name">
			  <h5 class="text-dark"><?php echo  $_SESSION["name"]?></h5>
			  <h6 class="text-dark"><?php echo 'ID:',''.$_SESSION["employee_id"]?></h6>
			   <hr>
			   <a href="adminprofile.php" class="text-dark"><i class="fa fa-user-o"></i> Profile</a>
			  <hr>
			  <a href="password.php" class="text-dark"><i class="fa fa-edit"></i> Change Password</a>
			 <hr>
			  <a href="logout.php" class="text-dark"><i class="fa fa-power-off"></i> logout</a>
			    </div>
			    </div>
			    </div>
			    </div>
			  
				
				
				        <!-- header navbar ends-->
						
						
				        <!-- sidebar starts-->
						
						<div class="sidebar">
						<div class="sidebar_menu">
						<center>
						<img src="card.jpg"alt="not found"class="profile_image">
						<h2><?php echo  $_SESSION["name"]?></h2>
						</center>
						<li class="item"><a href="dashboard.php"class="menu_btn"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
						
						<li class="item" id="account"><a href="account.php#account"class="menu_btn"><i class="fa fa-users"></i><span> Accounts<i class="fa fa-chevron-down dropdown"></i></span></a>
						
						<div class="sub_menu">
						<a href="#"><i class="fa fa-user-plus"></i><span> New Account Request</span></a>
						<a href="#"><i class="fa fa-eye"></i><span> View Account Details</span></a>
						<a href="#"><i class="fa fa-check-square-o"></i><span> Approved Account</span></a>
						<a href="#"><i class="fa fa-user-times"></i><span> Rejected Account</span></a>
						<a href="#"><i class="fa fa-ban"></i><span> Terminated Account</span></a>
						</div>
						</li>
						
						<li class="item" id="loan"><a href="loan.php#loan"class="menu_btn"><i class="fa fa-cubes"></i><span> Loan<i class="fa fa-chevron-down dropdown"></i></span></a>
						<div class="sub_menu">
						<a href="#"><i class="fa fa-edit"></i><span> Active Loan</span></a>
						<a href="#"><i class="fa fa-edit"></i><span> Loan Request</span></a>
						<a href="#"><i class="fa fa-database"></i><span> All Loan</span></a>
						</div>
						</li>
						
						<li class="item" id="card"><a href="card.php#card"class="menu_btn"><i class="fa fa-credit-card-alt"></i><span> Debit/Credit Card<i class="fa fa-chevron-down dropdown"></i></span></a>
						<div class="sub_menu">
						<a href="#"><i class="fa fa-cc-mastercard"></i><span> Card Request</span></a>
						<a href="#"><i class="fa fa-cc-mastercard"></i><span> All Cards</span></a>
						</div>
						</li>
						
						<li class="item" id="transect"><a href="checktransection.php#transect"class="menu_btn"><i class="fa fa-rocket"></i><span> Transection<i class="fa fa-chevron-down dropdown"></i></span></a>
						<div class="sub_menu">
						<a href="checkdeposit.php"><i class="fa fa-rocket"></i><span> Deposit</span></a>
						<a href="#"><i class="fa fa-rocket"></i><span> Transfer</span></a>
						<a href="#"><i class="fa fa-rocket"></i><span> Withdrawl</span></a>
						<a href="#"><i class="fa fa-rocket"></i><span> Statement</span></a>
						</div>
						</li>
						

						<li class="item"id="logout"><a href="logout.php"class="menu_btn"><i class="fa fa-power-off"></i><span> Logout</span></a></li>
						
						</div>
						</div>
				        <!-- sidebar ends-->
						
				
				         <!-- content part start-->
						 
				         <div class="content">
						 <div class="dashboard">
						 <h3><span><i class="fa fa-dashboard"></i></span> Dashboard</h3>
						 </div>
		
						 <div class="dashboard_home">
						  <h4><span ><a href="dashboard.php"><i class="fa fa-home i-items"></i> <span class="hidden-menu">Home</span></a></span>&nbsp &nbsp<i class="fa fa-rocket i-items"></i> <span class="hidden-menu">Transection</span></h4>
						 </div>
						 
						 <div class="container mt-5">
						 
						 <!--card part start -->
						 
						 <div class="row">
						 
						  <!--card1 -->
						  
						 <div class="col-lg-3 col-12">
						 <div class="card text-center"> 
						 
						 <div class="card-header bg-white text-info">
						 <div class="row align-items-center">
						 
						 <div class="col dashboard-top one">
						 <i class="fa fa-database fa-3x"></i>
						 </div>
						 
						 <div class="col">
						<h3 class="display-4"><?php echo $pending3; ?></h3>
						 </div>
						 <div class="col-12">
						<h6>Check Deposit</h6>
						 </div>
						 </div>
						 </div>
						 <div class="card-footer bg-white">
						 <h6><a href="checkdeposit.php"class="text-dark">View Details <i class="fa fa-arrow-circle-right"></i></a></h6>
						 </div>
						 </div>
						 </div>
						 
						 <!--card2 -->
						 
						 <div class="col-lg-3 col-12">
						 <div class="card text-center"> 
						 
						 <div class="card-header bg-white text-success">
						 <div class="row align-items-center">
						 
						 <div class="col dashboard-top two bg-success text-white">
						 <i class="fa fa-dollar fa-3x"></i>
						 </div>
						 
						 <div class="col">
						<h3 class="display-4"><?php echo $transfer3; ?></h3>
						 </div>
						 <div class="col-12">
						<h6>Check Transfer</h6>
						 </div>
						 </div>
						 </div>
						 <div class="card-footer bg-white">
						 <h6><a href="checktransfer.php"class="text-primary">View Details <i class="fa fa-arrow-circle-right"></i></a></h6>
						 </div>
						 </div>
						 </div>
						 
						 <!--card3 -->
						 
						 <div class="col-lg-3 col-12">
						 <div class="card text-center"> 
						 
						 <div class="card-header bg-white text-primary">
						 <div class="row align-items-center">
						 
						 <div class="col dashboard-top four">
						 <i class="fa fa-briefcase fa-3x"></i>
						 </div>
						 
						 <div class="col">
						<h3 class="display-4"><?php echo $withdarw3; ?></h3>
						 </div>
						 <div class="col-12">
						<h6>Check Withdrawl</h6>
						 </div>
						 </div>
						 </div>
						 <div class="card-footer bg-white">
						 <h6><a href="checkwithdraw.php"class="text-success">View Details <i class="fa fa-arrow-circle-right"></i></a></h6>
						 </div>
						 </div>
						 </div>
						 
						 <!--card4 -->
						 
						 <div class="col-lg-3 col-12">
						 <div class="card text-center"> 
						 
						 <div class="card-header bg-white text-danger">
						 <div class="row align-items-center">
						 
						 <div class="col dashboard-top two">
						 <i class="fa fa-database fa-3x"></i>
						 </div>
						 
						 <div class="col">
						<h3 class="display-4"><?php echo $output; ?></h3>
						 </div>
						 <div class="col-12">
						<h6>Statement</h6>
						 </div>
						 </div>
						 </div>
						 <div class="card-footer bg-white">
						 <h6><a href="adminstatement.php"class="text-danger">View Details <i class="fa fa-arrow-circle-right"></i></a></h6>
						 </div>
						 </div>
						 </div>
						 
						 

						 </div>
						
						
						 <!--card part end-->
						 
						 
						 </div>
						 
						 </div>
		
				         <!-- content part end-->
		
				
	
				</div>
				
				<script type="text/javascript">
				$(document).ready(function(){
				var out = $(".logoutdiv");
				var status = false;
				$("#profile").click(function(event){
				event.preventDefault();
				if(status == false){
				out.fadeIn();
				status = true;
				}
				else{
				out.fadeOut();
				status = false;
				}
				});
				});
				 </script>
				
				<!-- Optional JavaScript -->
			  
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  
			  </body>
			</html>