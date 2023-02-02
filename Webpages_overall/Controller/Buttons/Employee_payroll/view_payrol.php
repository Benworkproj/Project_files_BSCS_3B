<?php
$servername="localhost";
$username="root";
$password="";
$database="webpages_database";
						
//create connection
$connection = new mysqli($servername, $username, $password, $database);

$ratehour1="";
$ratehour2="";
$ratehour3="";
$cutoff1="";
$cutoff2="";
$cutoff3="";
$income="";
$honorarium="";
$otherincome="";
$gross_income="";
$net_income="";
$sss_contribution="";
$sss_loan="";
$pagibig_contribution="";
$pagibig_loan="";
$philhealth_contribution="";
$faculty_deposit="";
$faculty_loan="";
$salary_loan="";
$others="";
$total_deduction="";
$tax=""; 

if($_SERVER['REQUEST_METHOD']=='POST'){
    //basic pay
    $ratehour1=$_POST["ratehour1"];
    $cutoff1=$_POST["cutoff1"];
    $income=$ratehour1 * $cutoff1;
    //honorarium
    $ratehour2=$_POST["ratehour2"];
    $cutoff2=$_POST["cutoff2"];
    $honorarium=$ratehour2 * $cutoff2;
    //other income
    $ratehour3=$_POST["ratehour3"];
    $cutoff3=$_POST["cutoff3"];
    $otherincome=$ratehour3 * $cutoff3;
    //income summary
    $gross_income=$cutoff1 + $cutoff2 + $cutoff3;
    //regular deduction
    $sss_contribution=$_POST["sss_contribution"];
    $philhealth_contribution=$_POST["philhealth_contribution"];
    $pagibig_contribution=$_POST["pagibig_contribution"];
    $tax=$_POST["tax"];
    //other deduction
    $sss_loan=$_POST["sss_loan"];
    $pagibig_loan=$_POST["pagibig_loan"];
    $faculty_deposit=$_POST["faculty_deposit"];
    $faculty_loan=$_POST["faculty_loan"];
    $salary_loan=$_POST["salary_loan"];
    $others=$_POST["others"];
    
    $total_deduction=$sss_contribution+$philhealth_contribution+$pagibig_contribution+$tax+$sss_loan+$pagibig_loan+$faculty_deposit+$faculty_loan+$salary_loan+$others;
    $net_income=$total_deduction - $gross_income;
    
    do{
		  if( empty($ratehour1) || empty($ratehour2) || empty($ratehour3) || empty($cutoff1) || empty($cutoff2) || empty($cutoff3) || empty($income) || empty($honorarium) || empty($otherincome) || empty($gross_income) || empty($net_income) || empty($sss_contribution) || empty($sss_loan) || empty($pagibig_contribution) || empty($pagibig_loan) || empty($philhealth_contribution) || empty($faculty_deposit) || empty($faculty_loan) || empty($salary_loan) || empty($others) || empty($total_deduction) || empty($tax) ){
		  	$errorMessage="All the fields are required";
		  	break;
		  }
	
		  //add new registered to database
  		$sql="INSERT INTO employee_payroll(ratehour1,ratehour2,ratehour3,cutoff1,cutoff2,cutoff3,income,honorarium,otherincome,gross_income,net_income,sss_contribution,sss_loan,pagibig_contribution,pagibig_loan,philhealth_contribution,faculty_deposit,faculty_loan,salary_loan,others,total_deduction,tax)".
  			"VALUES('$ratehour1','$$ratehour2','$ratehour3','$cutoff1','$cutoff2','$cutoff3','$income','$honorarium','$otherincome','$gross_income','$net_income','$sss_contribution','$sss_loan','$pagibig_contribution','$pagibig_loan','$philhealth_contribution','$faculty_deposit','$faculty_loan','$salary_loan','$others','$total_deduction','$tax')";
  			$result=$connection->query($sql);
  	
  		if(!$result){
  			$errorMessage="Invalid Query: ".$connection->error;
  			break;
		  }
	
  		$ratehour1="";
      $ratehour2="";
      $ratehour3="";
      $cutoff1="";
      $cutoff2="";
      $cutoff3="";
      $income="";
      $honorarium="";
      $otherincome="";
      $gross_income="";
      $net_income="";
      $sss_contribution="";
      $sss_loan="";
      $pagibig_contribution="";
      $pagibig_loan="";
      $philhealth_contribution="";
      $faculty_deposit="";
      $faculty_loan="";
      $salary_loan="";
      $others="";
      $total_deduction="";
      $tax=""; 
  	
  		$successMessage="";
  	
  		header("location:/Webpages_overall/Webpages_view/employee-payroll_pages.php");
  		exit;
  	
  		} while (false);
  }
?>

<?php
error_reporting(E_ALL);
ini_set("display", "On");

if(isset($_GET['id'])){
  $id = trim($_GET['id']) - 0;
  
 $employee=[];
 $sql="SELECT * FROM newemployee_register WHERE register_id = $id";
 $result=$connection->query($sql);
 if($result->num_rows > 0){
   while($row = $result->fetch_assoc()) {
     $employee['employee_number']=$row['employee_number'];
  	 $employee['first_name']=$row['first_name'];
  	 $employee['middle_name']=$row['middle_name'];
  	 $employee['surname']=$row['surname'];
  	 $employee['civil_status']=$row['civil_status'];
  	 $employee['department']=$row['department'];
  	 $employee['designation']=$row['designation'];
     $employee['employee_status']=$row['employee_status'];
     $employee['qual_dept_status']=$row['qual_dept_status'];
   }
 }
 $connection->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Employee Payroll</title>

  <!---CSS: Bootstrap link CDN--->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
  <!---JS: Bootstrap link CDN--->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--- CSS --->
  <link rel="stylesheet" href="/Webpages_overall/Assets/CSS/employee_style.css">
</head>
<body>
  <div class="container">
    <header>View Employee Payroll</header>
    <form id="employee-payroll_pages" action="employee-payroll_pages.php" method="POST">
      <div class="form-first">
        <div class="personal-info">
          <span class="title">Basic Info</span>


          <div class="fields">  
            <div class="input-field">
              <label for="employee_number">Employee Number:</label>
              <input type="number" name="employee_number" id="employee_number" required>
            </div>
          
            <div class="input-field">
              <label for="civil_status" class="mb-0 control-label">Civil Status:</label>
                <select id="civil_status" name="civil_status" required>
                <option value=""></option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
                <option value="Divorced">Divorced</option>
                <option value="Single">Single</option>
              </select>
            </div>
          </div>
          
        <div class="fields">
          <div class="input-field">
              <label for="middle_name">Designation:</label>
              <input type="text" name="designation" id="designation" required>
          </div>
          
          <div class="input-field">
              <label for="qual_dept_status" class="mb-0 control-label">Qualified Dept. Status:</label>
              <select name="qual_dept_status" id="qual_dept_status" required>
                <option value=""></option>
                <option value="Z or Single">Z or Single</option>
                <option value="S or Me">S or M</option>
                <option value="S1 or Me1">S1 or M1</option>
                <option value="S2 or Me2">S2 or M2</option>
                <option value="S3 or Me3">S3 or M3</option>
                <option value="S4 or Me4">S4 or M4</option>
              </select>
            </div>
        </div>  
          
          <div class="fields">
            <div class="input-field">
              <label for="first_name">First Name:</label>
              <input type="text" name="first_name" id="first_name" required>
            </div>
            
            <div class="input-field">
              <label for="paydate">Pay date:</label>
              <input type="date" name="paydate" id="paydate" required>
            </div>
          </div>

          <div class="fields">  
            <div class="input-field">
              <label for="middle_name">Middle Name:</label>
              <input type="text" name="middle_name" id="middle_name" required>
            </div>
            
            <div class="input-field">
              <label for="first_name">Employee Status:</label>
              <input type="text" name="employee_status" id="employee_status" required>
            </div>
          </div>

          <div class="fields">  
            <div class="input-field">
              <label for="surname">Surame:</label>
              <input type="text" name="surname" id="surname" required>
            </div>
            
             <div class="input-field">
              <label for="middle_name">Designation:</label>
              <input type="text" name="designation" id="designation" required>
            </div>
          </div>
        </div>
      </div>
<!---------------------------------Salary Computatation--------------------------------------->
    <div class=box_row1>
      <div class="box1">
        <h5>Regular Deduction</h5>
        <br>
        
        <label for="sss_contribution" class="col-sm-6 col-form-label">SSS COntribution:</label>
				<div class="col-sm-6">
				  <input type="number" id="sss_contribution" name="sss_contribution" class="form-control" value="<?php echo $sss_contribution; ?>" required>
				</div>
				
				<label for="philhealth_contribution" class="col-sm-6 col-form-label">Philhealth Contribution:</label>
				<div class="col-sm-6">
				  <input type="number"id="philhealth_contribution" name="philhealth_contribution" class="form-control" value="<?php echo $philhealth_contribution; ?>" required>
				</div>
				
				<label for="pagibig_contribution" class="col-sm-6 col-form-label">Pag-Ibig Contribution</label>
				<div class="col-sm-6">
				  <input type="number" id="pagibig_contribution" name="pagibig_contribution" class="form-control" value="<?php echo $pagibig_contribution; ?>" required>
				</div>
				
				<label for="tax" class="col-sm-6 col-form-label">Tax:</label>
				<div class="col-sm-6">
				  <input type="number" id="tax" name="tax" class="form-control" value="<?php echo $tax; ?>" required>
				</div>
      </div>
      
      <div class="box2">
        <h5>Other Deduction</h5>
        <br>
        
        <label for="sss_loan" class="col-sm-6 col-form-label">SSS Loan:</label>
				<div class="col-sm-6">
				  <input type="number" id="sss_loan" name="sss_loan" class="form-control" value="<?php echo  $sss_loan; ?>" required>
				</div>
				
				<label for="pagibig_loan" class="col-sm-6 col-form-label">Pag-Ibig Loan:</label>
				<div class="col-sm-6">
				  <input type="number" id="pagibig_loan" name="pagibig_loan" class="form-control" value="<?php echo $pagibig_loan; ?>" required>
				</div>
				
				<label for="faculty_deposit" class="col-sm-6 col-form-label">Faculty Savings Deposit:</label>
				<div class="col-sm-6">
				  <input type="number" id="faculty_deposit" name="faculty_deposit" class="form-control" value="<?php echo  $faculty_deposit; ?>" required>
				</div>
				
				<label for="faculty_loan" class="col-sm-6 col-form-label">Faculty Savings Loan:</label>
				<div class="col-sm-6">
				  <input type="number" id="faculty_loan" name="faculty_loan" class="form-control" value="<?php echo $faculty_loan; ?>" required>
				</div>
				
				<label for="salary_loan" class="col-sm-6 col-form-label">Salary Loan:</label>
				<div class="col-sm-6">
				  <input type="number" id="salary_loan" name="salary_loan" class="form-control" value="<?php echo $salary_loan; ?>" required>
				</div>
				
				<label for="others" class="col-sm-6 col-form-label">Others:</label>
				<div class="col-sm-6">
				  <select class="select_choice" type="text" id="others" name="others" required>
				    <option value="">Select Other Loan/Deposit</option>
            <option value="East West Bank">East West Bank</option>
            <option value="CITI Bank">CITI Bank</option>
            <option value="BPI Bank">BPI Bank</option>
            <option value="CIMB Bank">CIMB Bank</option>
            <option value="RCBC Savings Bank">RCBC Savings Bank</option>
            <option value="UCPB YES Bank">UCPB YES Bank</option>
				  </select><br>
				  <input type="numbert" id="others" name="others" class="form-control" value="<?php echo $others; ?>" required>
				</div>
      </div>
      
      <div class="box3">
        <h5>Deduction Summary</h5>
        <br>
        
        <label for="total_deduction" class="col-sm-6 col-form-label">Total Deduction:</label>
				<div class="col-sm-6">
				  <input type="number" id="total_deduction" name="total_deduction" class="form-control" value="<?php echo $total_deduction; ?>" disabled>
				</div>
			</div>
    </div>
    
    
    <!----------------------------------END OF BOX ROW 1--------------------------------------------------------->
    
    
    <div class=box_row2>
      <div class="box4">
        <h5>Basic Pay</h5>
        <br>
        
        <label for="ratehour1" class="col-sm-6 col-form-label">Rate/Hour:</label>
				<div class="col-sm-6">
				  <input type="number" id="ratehour1" name="ratehour1" class="form-control" value="<?php echo  $ratehour1; ?>" required>
				</div>
				
				<label for="cutoff1" class="col-sm-6 col-form-label">No. Of Hours/Cut Off:</label>
				<div class="col-sm-6">
				  <input type="number" id="cutoff1" name="cutoff1" class="form-control" value="<?php echo $cutoff1; ?>" required>
				</div>
				
				<label for="income" class="col-sm-6 col-form-label">Income Per Cut Off:</label>
				<div class="col-sm-6">
				  <input type="number" id="income" name="income" class="form-control" value="<?php echo $income; ?>" disabled>
				</div>
      </div>
      
      <div class="box5">
        <h5>Honorarium</h5>
        <br>
        
        <label for="ratehour2"  class="col-sm-6 col-form-label">Rate/Hour:</label>
				<div class="col-sm-6">
				  <input type="number" id="ratehour2" name="ratehour2" class="form-control" value="<?php echo $ratehour2; ?>" required>
				</div>
				
				<label for="cutoff2" class="col-sm-6 col-form-label">No. Of Hours/Cut Off:</label>
				<div class="col-sm-6">
				  <input type="numbert" id="cutoff2" name="cutoff2" class="form-control" value="<?php echo $cutoff2; ?>" required>
				</div>
				
					<label for="honorarium" class="col-sm-6 col-form-label">Total Honorarium Pay:</label>
				<div class="col-sm-6">
				  <input type="number" id="honorarium" name="honorarium" class="form-control" value="<?php echo $honorarium; ?>" disabled>
				</div>
      </div>
      
       <div class="box6">
        <h5>Other Income</h5>
        <br>
        
        <label for="ratehour3" class="col-sm-6 col-form-label">Rate/Hour:</label>
				<div class="col-sm-6">
				  <input type="number" id="ratehour3" name="ratehour3" class="form-control" value="<?php echo $ratehour3; ?>" required>
				</div>
				
				<label for="cutoff3" class="col-sm-6 col-form-label">No. Of Hours/Cut Off:</label>
				<div class="col-sm-6">
				  <input type="number" id="cutoff3" name="cutoff3" class="form-control" value="<?php echo $cutoff3; ?>" required>
				</div>
				
					<label for="otherincome" class="col-sm-6 col-form-label">Total Other Income Pay:</label>
				<div class="col-sm-6">
				  <input type="number" id="otherincome" name="otherincome" class="form-control" value="<?php echo $otherincome; ?>" disabled>
				</div>
      </div>
      
      <div class="box7">
        <h5>Income Summary</h5>
        <br>
        
        <label for="gross_income" class="col-sm-6 col-form-label">Gross Income:</label>
				<div class="col-sm-6">
				  <input type="number" id="gross_income" name="gross_income" class="form-control" value="<?php echo $gross_income; ?>" disabled>
				</div>
				
				<label for="net_income" class="col-sm-6 col-form-label">Net Income:</label>
				<div class="col-sm-6">
				  <input type="number" id="net_income" name="net_income" class="form-control" value="<?php echo $net_income; ?>" disabled>
				</div>
			</div>
    </div>
     
      <br>
      
      <div class="row mb-3">
        <div class="col-sm-2 d-grid">
          <button type="submit" name="submit" class="btn btn-primary">Calculate</button></button>
        </div>

        <div class="col-sm-2 d-grid">
          <button type="reset" class="btn btn-outline-secondary" name="cancelBtn">Cancel</button>
        </div>
      </div>
    </div>
  </form>
</div>
</body>
</html>