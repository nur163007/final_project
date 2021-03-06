<?php
session_start(); 
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
				
				
				<link rel="stylesheet" href="customerprofile.css">
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
			  <h5 class="text-dark"><?php echo  $_SESSION["customer_name"]?></h5>
			  <h6 class="text-dark"><?php echo  $_SESSION["account_type"]?></h6>
			    <hr>
			  <a href="customerviewprofile.php" class="text-dark"><i class="fa fa-user-o"></i> Profile</a>
			  <hr>
			  <a href="customerpassword.php" class="text-dark"><i class="fa fa-edit"></i> Change Password</a>
			 <hr>
			  <a href="customerlogout.php" class="text-dark"><i class="fa fa-power-off"></i> logout</a>
			    </div>
			    </div>
			    </div>
			    </div>
			  
				
				
				        <!-- header navbar ends-->
						
						
				        <!-- sidebar starts-->
					
				        <!-- sidebar ends-->
						
				
				         <!-- content part start-->
						 
				         <div class="content"style="background:white;">
								
						 <div class="dashboard_home">
						 <h4 class="container"><span ><a href="customerprofile.php"><i class="fa fa-home i-items"></i> <span class="hidden-menu">Home</span></a></span> <i class="fa fa-angle-right text-info i-items" style="font-size:20px;padding:0 12px;"></i> <i class="fa fa-users i-items text-info"></i> <span class="hidden-menu text-info">Accounts</span> <i class="fa fa-angle-right text-info" style="font-size:20px;padding:0 12px;"></i> <i class="fa fa-list i-items"></i> <span class="hidden-menu">Loan Details</span></h4>
						 </div>
						 
						 <div class="container mt-3">
						 
						 <div class="account-details col-12">
						 <h2 class="text-left text-success">Loan  Information</h2>
						 </div>
						 <!--account details part start -->
						 <div class="aaccount-account col-lg-12 col-12 mt-4 table-responsive">
						 <table class="table table-striped">
						 
			<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";

$conn= new mysqli($servername, $username, $password,$dbname);
$error="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	   $serialno =$_GET['serial_no'];
	  $sql ="select * from loan where serial_no=$serialno";
	  $query_run= mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($query_run)) {
		  

?>	
			    <tbody class="table-bordered ">
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-file-image-o"></i> Customer's Photo</span><span class="tableright col-lg-7 col-7">: <img src="phpimage/<?php echo $row['appli_file'];?>"style="width:110px;height:120px;border-radius:3px;margin-left:30px;"></span></td>
				</tr>
								
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-user-o"></i> Customer Name</span><span class="tableright col-lg-7 col-7">: <?php echo $row['customer_name'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-user-o"></i> Father's Name</span><span class="tableright col-lg-7 col-7">: <?php echo $row['f_name'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-user-o"></i> Mother's Name</span><span class="tableright col-lg-7 col-7">: <?php echo $row['m_name'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar-o"></i> Date of birth</span><span class="tableright col-lg-7 col-7">: <?php echo $row['date_of_birth'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-map-pin"></i> Present Address</span><span class="tableright col-lg-7 col-7">: <?php echo $row['pre_address'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-map-marker"></i> Permanent Address</span><span class="tableright col-lg-7 col-7">: <?php echo $row['per_address'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-mobile-phone"></i> Phone No</span><span class="tableright col-lg-7 col-7">: <?php echo $row['phone_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-envelope-o"></i> Email</span><span class="tableright col-lg-7 col-7">: <?php echo $row['email'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-mars"></i> Gender</span><span class="tableright col-lg-7 col-7">: <?php echo $row['gender'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-venus-mars"></i> Maritial status</span><span class="tableright col-lg-7 col-7">: <?php echo $row['maritial_status'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-book"></i> Education</span><span class="tableright col-lg-7 col-7">: <?php echo $row['education'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-address-book"></i> Occupation</span><span class="tableright col-lg-7 col-7">: <?php echo $row['occupation'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-money"></i> Income</span><span class="tableright col-lg-7 col-7">: <?php echo $row['income'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-user-o"></i> Gurantor's name</span><span class="tableright col-lg-7 col-7">: <?php echo $row['gurantor_name'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-address-book"></i> Gurantor's Occupation</span><span class="tableright col-lg-7 col-7">: <?php echo $row['g_occupation'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-map"></i> Gurantor's address</span><span class="tableright col-lg-7 col-7">: <?php echo $row['g_address'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-photo"></i> Gurantor's Photo</span><span class="tableright col-lg-7 col-7">: <img src="phpimage/<?php echo $row['g_file'];?>"style="width:110px;height:120px;border-radius:3px;margin-left:30px;"></span></td>
				</tr>
				
			    
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Account No</span><span class="tableright col-lg-7 col-7">: <?php echo $row['account_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-shield"></i> Loan type</span><span class="tableright col-lg-7 col-7">: <?php echo $row['loan_type'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-hourglass-2"></i> Duration</span><span class="tableright col-lg-7 col-7">: <?php echo $row['term'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-dollar"></i> Amount</span><span class="tableright col-lg-7 col-7">: <?php echo $row['amount'];?></span></td>
				</tr>
					
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-bolt"></i> Electricity/Gas bill copy</span><span class="tableright col-lg-7 col-12">: <img src="phpimage/<?php echo $row['bill_file'];?>"style="width:400px;height:120px;border-radius:3px;"></span></td>
				</tr>
				
			    
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar-o"></i> Apply date</span><span class="tableright col-lg-7 col-7">: <?php echo $row['apply_date'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-edit"></i> Status</span><span class="tableright col-lg-7 col-7">: <?php echo $row['status'];?></span></td>
				</tr>
				
			     
				</tbody>
				 <?php
	
	              }

             	?>

						 </table>
					
						 <div class="account-details col-12">
						 <h2 class="text-left text-success">Loan Information</h2>
						 </div>
						 <!--loan details part start -->
						 <div class="aaccount-account col-lg-12 col-12 mt-4 table-responsive">
						 <table class="table table-striped">
						 
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";

$conn= new mysqli($servername, $username, $password,$dbname);
$error="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	  
	  $slno =$_GET['serial_no'];

			 $search ="select * from active_loan where serial_no='$slno'";
			 $sfind = mysqli_query($conn,$search);
			 while($res=mysqli_fetch_array($sfind)){

?>	
               <tbody class="table-bordered ">
								
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-dollar"></i> Loan Amount</span><span class="tableright col-lg-7 col-7">: <?php echo '$'.$res['amount'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar-o"></i> Loan Create date</span><span class="tableright col-lg-7 col-7">: <?php echo $res['start_date'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar-o"></i> Loan end date</span><span class="tableright col-lg-7 col-7">: <?php echo $res['end_date'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar-o"></i> Loan Time</span><span class="tableright col-lg-7 col-7">: <?php echo $res['duration'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-percent"></i> Interest rate</span><span class="tableright col-lg-7 col-7">: <?php echo $res['interest_rate'].'%';?></span></td>
				</tr>
				
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-money"></i> EMI</span><span class="tableright col-lg-7 col-7">: <?php echo '$'.$res['emi_m'].' '.'(monthly)'.'<br>'.' '.'$'.$res['emi_q'].' '.'(quarterly)'.'<br>'.' '.'$'.$res['emi_y'].' '.'(yearly)';?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-dollar"></i> Total payable amount</span><span class="tableright col-lg-7 col-7">: <?php echo '$'.$res['payable_amount'];?></span></td>
				</tr>

			    <tr class="text-left bg-white detailsbutton">
				<td><span class="tableleft">
				<a href="loanall.php"class="text-success col-12"><i class="fa fa-arrow-left text-success"></i> Back</a>
				</td>
				
				</tr>
			     
				</tbody>
				 <?php
	
	              }

             	?>
                         </table>
						 
						 
						 </div>
						 <!--account details part end-->
						
						 
						
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