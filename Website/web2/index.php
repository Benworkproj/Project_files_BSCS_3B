<?php 

$sname= "localhost:3307";
$unmae= "root";
$password = "";

$db_name = "web2";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

if(isset($_POST['save'])){
    $name = $_POST['Name'];
    $middle = $_POST['MiddleName'];
    $surname = $_POST['Surname'];
    $status = $_POST['CivilStatus'];
    $designation = $_POST['Designation'];
    $gross = $_POST['gross'];
    $net = $_POST['net'];

    $query = "INSERT INTO `details`(`First_Name`, `Middle`, `Surname`, `Civil_Status`, `Designation`, `Gross_Income`, `Net_Income`) VALUES ('$name','$middle','$surname','$status','$designation','$gross','$net')";
    $result = mysqli_query($conn,$query);

    if ($result) {
        echo 'Data inserted';
    }
    else{
        echo 'Data Not inserted';
    }
}

 ?>





<html lang="w2">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title> WEBPAGE DESIGN 2 </title>
        <script src="https://kit.fontawesome.com/ebf7970d3f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>

<body>
    
        <form class="left" method="post" enctype="multipart/form-data">
        <br><br><br>

        <div>
            <label> <b>First Name :        </label></b>
            <input type="text" name="Name" placeholder="First Name" required>
        </div>
        <div><br>
            <label> <b>Middle Name :       </label>
            <input  type="text" name="MiddleName" placeholder="Middle Name" required>
        </div>
        <div><br>
            <label> <b>Surname :           </label>
            <input  type="text" name="Surname" placeholder="Surname" required>
        </div>
        <div><br>
            <label> <b>Civil Status :      </label>
            <input  type="text" name="CivilStatus" placeholder="Civil Status" required>
        </div>
        <div><br>
            <label> <b>Designation :       </label>
            <input  type="text" name="Designation" placeholder="Designation" required>
        </div><br>

<hr>
        <div>
            <p><b>BASIC PAY</p></b>
            <div>
                <label> <b>Rate / Hour :   </label></b>
                <input  type="number" class="basic_rate" name="Rate / Hour" placeholder="Rate / Hour" required>
            </div>
            <div><br>
                <label> <b>No. of Hours / Cut Off :   </label></b>
                <input  type="number" class="basic_no" name="No. of Hours / Cut Off" placeholder="No. of Hours / Cut Off" required>
            </div>
            <div><br>
                <label> <b>Income Per Cut Off :   </label></b>
                <input  type="number" class="basic_off" name="Income Per Cut Off" placeholder="Income Per Cut Off" disabled>
            </div><br>
<hr>
        </div><div>
            <p><b>HONORARIUM</p></b>
            <div>
                <label> <b>Rate / Hour :   </label></b>
                <input  type="number" class="hrate" name="Rate / Hour" placeholder="Rate / Hour" required>
            </div>
            <div><br>
                <label> <b>No. of Hours / Cut Off :   </label></b>
                <input  type="number" class="hno" name="No. of Hours / Cut Off" placeholder="No. of Hours / Cut Off" required>
            </div>
            <div><br>
                <label> <b>Total Honorarium Pay :   </label></b>
                <input  type="number" class="htotal" name="Total Honorarium Pay" placeholder="Total Honorarium Pay" disabled>
            </div><br>
<hr>
        </div>

        <div>
            <p><b>OTHER INCOME</p></b>
            <div>
                <label> <b>Rate / Hour :   </label></b>
                <input  type="number" class="other_rate" name="Rate / Hour" placeholder="Rate / Hour" required>
            </div>
            <div><br>
                <label> <b>No. of Hours / Cut Off :   </label></b>
                <input  type="number" class="other_no" name="No. of Hours / Cut Off" placeholder="No. of Hours / Cut Off" required>
            </div>
            <div><br>
                <label> <b>Total Honorarium Pay :   </label></b>
                <input  type="number" class="other_total" name="Total Honorarium Pay" placeholder="Total Honorarium Pay" disabled>
            </div><br>
<hr>
        </div>

        <div>
            <p><b>INCOME SUMMARY</p></b>
            <div>
                <label> <b>GROSS / INCOME :   </label></b>
                <input  type="number" class="income_gross" name="gross" placeholder="Rate / Hour" required>
            </div>
            <div><br>
                <label> <b>NET INCOME :   </label></b>
                <input  type="number" class="income_net" name="net" placeholder="No. of Hours / Cut Off" required>
            </div><br>
        </div>
</div>

<!--second column-->
    <div class="col_nd">
        <div>
            <label> Number of Dependent(s) :    </label>
            <input type="number" name="no. of Dependent(s)" placeholder="Number of Dependent(s)" required>
        </div><br>

        <div>
            <label> Paydate :    </label>
            <input type="date" name="paydate" required>
        </div>

        <div><br>
            <label> <b>Employee Status :   </label></b>
            <select name="Employee Status :">
                <option value="Active"> Active </option>
                <option value="Inactive"> Inactive </option>
                <option value="Retiree"> Retiree without Benefits </option>
            </select>
        </div><br>
<hr>
        <div>
            <p><b>REGULAR DEDUCTIONS </p></b>
            <div>
                <label> <b>SSS Contribution :   </label></b>
                <input  type="number" class="sss" name="SSS Contribution" placeholder="SSS Contribution" required min="0.00" value="0" disabled>
            </div>
            <div><br>
                <label> <b>PhilHealth Contribution :   </label></b>
                <input  type="number" class="phil" name="PhilHealth Contribution" placeholder="PhilHealth Contribution" required min="0" value="0" disabled>
            </div>
            <div><br>
                <label> <b>Pag-Ibig Contribution :   </label></b>
                <input  type="number" class="pagibig" name="Pag-Ibig Contribution" placeholder="Pag-Ibig Contribution" required min="100" value="100" disabled>
            </div><br>
            <div>
                <label> <b>Tax :   </label></b>
                <input  type="number" class="tax" name="Tax" placeholder="Tax" required min="0.00" value="0" disabled>
            </div><br>
<hr>
        </div>

        <div>
            <p><b>OTHER DEDUCTIONS</p></b>
            <div>
                <label> <b>SSS Loan :   </label></b>
                <input  type="number" name="SSS Loan" placeholder="SSS Loan" required min="0.00" value="0">
            </div>
            <div><br>
                <label> <b>PAGIBIG Loan :   </label></b>
                <input  type="number" name="PAGIBIG Loan" placeholder="PAGIBIG Loan" required min="0.00" value="0">
            </div>
            <div><br>
                <label> <b>Faculty Savings Deposit :   </label></b>
                <input  type="number" name="Faculty Savings Deposit" placeholder="Faculty Savings Deposit" required min="0.00" value="0">
            </div><br>
            <div>
                <label> <b>Faculty Savings Loan :   </label></b>
                <input  type="number" name="Faculty Savings Loan" placeholder="Faculty Savings Loan" required min="0.00" value="0">
            </div>
            <div><br>
                <label> <b>Salary Loan :   </label></b>
                <input  type="number" name="Salary Loan" placeholder="Salary Loan" required min="0.00" value="0">
            </div>
            <div><br>
                <label> <b>Others :   </label></b>
                <select name="Others">
                    <option value="Active"> Tiredness and Undertime </option>
                    <option value="Inactive"> Absences </option>
                    <option value="Retiree"> With holding tax </option>
                </select>
            </div><br>
<hr>
        </div>

        <div>
            <p><b>DEDUCTION SUMMARY</p></b>
            <div>
                <label> <b>Total Deductions : </label></b>
                <input type="number" name="Total Deductions" class="deduct" placeholder="Total Deductions" disabled>
            </div><br>
        </div>
    </div>

<div class="pic_employee">
          
                <div class="pic">
                    <input type="file" id="file">
                         <div class="cphoto">
                            <label for="file" id="upload_pic">Choose Photo</label></span>
                        </div>
                </div>
                  
<img id="image">
<script src="awow.js"></script>
       
            </div>


        <div class="infos2">
            <form class="infos">
                <div>
                    <label> <b>Employee Number  :   </label></b>
                    <input  type="number" name="Employee Number" placeholder="Employee Number" maxlength="5" required>
                </div><br>
                <div>
                    <label> <b>Department  :   </label></b>
                    <input  type="text" name="Department" placeholder="Department of Computer Studies" required>
                </div>
            </form>
        </div>

        <div class="buttons">
            <br><br><br>
            <button class="button calculate">Calculate</button><br>
            <button type="submit" class="button calculate" name="save">Save</button><br>
            <button class="button button2">New</button><br>
            <button class="button button5">Review Employee Details</button><br>
            <button class="button button6"><a href="http://localhost/Website/">Exit</a></button><br>
        
        </div>
        <script src="script.js"></script>
        
</form>
</body>
</html>