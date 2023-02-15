
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous" />
        
        <title> FILL-UP FORM </title>

        <style>
            input[type='file'] {
                width: 85%;
                overflow: hidden;

            }

            .light-color {
                color: rgb(38, 139, 240);
            }

            .bg-very-light-gray {
                background-color: rgb(217, 232, 238);
            }

            .profile-responsive {
                height: min(200px, 100%);
            }

            .relative{
                position: relative;
            }   

            .absolute{
                position: absolute;
                top: 0;
                right: 0;
            }


        </style>
    </head>

    <body class="bg-info">
        <hr>


        <div class="container bg-body rounded shadow justify-content-center
            align-items-center font-monospace">
            <div class="display-5 text-center">
                FILL-UP FORM
            </div>

            <form action="register.php"  method="post" class="bg-very-light-gray">

                <div class="accordion-body">

                    <hr>
                    <!--  First Row  -->
                    <!-- Basic Information -->
                    <div class="row fst-italic g-3
                        position-relative">

                        <div class="col-sm-8 col-md-4 col-lg-4">
                        <label for="employee_number">Employee Number:</label><br>
                            <input type="text" class="form-control" id="employee_number" name="employee_number">

                        </div>
                        <div class="col-sm-8 col-md-4 col-lg-4">
                        <label for="dependents">Number of Dependent(s):</label><br>
                        <input type="text" class="form-control" id="dependents" name="dependents">

                        </div>
                                 
                        <div class="row row-cols-2 fst-italic g-3">
                            <div class="col-md-5 col-sm-1">
                                <span class="input-group-text" id="basic-addon1">Pay
                                    Date</span>
                                    <input type="date" id="pay_date" name="pay_date">
                               
                         
                            </div>
                            <div>              
                            <div>
                            
                            </div>                    
                            <input type="image" src="image-1.png" alt="default_profile_image " id="employeeIdImage" class="img-thumbnail absolute" height="200" width="200">
                            <span id='button' class="custom-file-upload absolute" style="margin-top: 60px;">
                                <label class="filebutton">
                                Browse For File!
                                <span><input type="file" id="myfile" name="myfile"></span>
                                </label></span>

                        </div>
                    </div>
                            
                        </div>

                    </div>


                    <div class="row row-cols-2 fst-italic g-3">
                        <div class="col-md-5 col-sm-1">
                        <label for="first_name">First Name:</label><br>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
  
                        <div class="col-md-5 col-sm-1">
                        <label for="middle_name">Middle Name:</label><br>
                        <input type="text" class="form-control" id="middle_name" name="middle_name">
                            
                        </div>
                        <div class="col-md-5 col-sm-1">
                        <label for="last_name">Last Name:</label><br>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                            
                        </div>
                    </div>
                    
                    <br>

                    <div class="row row-cols-sm-4 row-cols-2 g-3">
                        <div class="col-3">
                        <label for="civil_status">Civil Status:</label><br>
                        <input type="text" class="form-control" id="civil_status" name="civil_status">
                        </div>

                        <div class="col-3">
                        <label for="employee_status">Employee Status:</label><br>
                        <input type="text" class="form-control"  id="employee_status" name="employee_status">

                        </div>

                        <div class="col-3">
                        <label for="designation">Designation:</label><br>
                        <input type="text" class="form-control" id="designation" name="designation">
                        </div>

                        <div class="col-md-3">
                        <label for="department">Department:</label><br>
                        <input type="text" class="form-control" id="department" name="department">
                                        
                        </div>
                    </div>
                    <br>
                    <br>

                    <input type="submit" value="Register">

                     <br>
                     <br>


                    <a href="employee.php"> View Employees </a>
                    <hr>

                    <!-- Second Row -->
                    <div class="row row-cols-2 accordion-body g-5">

                        <!-- Basic Pay Column -->
                        <div class="col">
                            <p class="display-6"> BASIC PAY </p>
                            <div class="row md-4">
                                <label for="BasicPay1" class="col-md-6" col-form-label>
                                    RATE / HOUR:</label> 
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="BasicPay1" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="BasicPay2" class="col-md-6
                                            col-form-label"> NO. OF HOURS / CUT OFF:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="BasicPay2" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="BasicPay3" class="col-md-6
                                            col-form-label"> INCOME PER CUT OFF: </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="BasicPay3" placeholder="-----">
                                </div>
                            </div>
                        </div>

                        <!-- Regular Deduction Column -->
                        <div class="col">
                            <p class="display-6"> REGULAR DEDUCTIONS </p>
                            <div class="row md-4">
                                <label for="RegularDeduction1" class="col-md-6 col-form-label">SSS
                                    CONTRIBUTION:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="RegularDeduction1" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="RegularDeduction2" class="col-md-6 col-form-label">
                                    PHILHEALTH CONTRIBUTION:
                                </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="RegularDeduction2" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="RegularDeduction3" class="col-md-6 col-form-label">
                                    PAG-IBIG CONTRIBUTION: </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="RegularDeduction3" placeholder="-----">
                                </div>
                            </div>

                            <br>
                            <div class="row md-4">
                                <label for="RegularDeduction4" class="col-md-6 col-form-label"> TAX:
                                </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="RegularDeduction4" placeholder="-----">
                                </div>
                            </div>
                        </div>

                    </div>
                
                    <hr>
                    <!-- Third Row -->
                    <div class="row row-cols-2 accordion-body g-5">

                        <!--  Honorarium Column -->
                        <div class="col">

                            <p class="display-6">HONORARIUM </p>
                            <div class="row md-4">
                                <label for="Honorarium1" class="col-md-6
                                            col-form-label">RATE / HOUR: </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="Honorarium1" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="Honorarium2" class="col-md-6
                                            col-form-label">  NO. OF HOURS / CUT OFF: </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="Honorarium2" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="Honorarium3" class="col-md-6
                                            col-form-label"> TOTAL HONORARIUM PAY:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="Honorarium3" placeholder="-----">
                                </div>
                            </div>
                        </div>

                        <!-- Other Deduction Column -->
                        <div class="col">
                            <p class="display-6"> OTHER DEDUCTIONS </p>
                            <div class="row md-4">
                                <label for="OtherDeduction1" class="col-md-6 col-form-label">SSS LOAN:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="OtherDeduction1" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="OtherDeduction2" class="col-md-6 col-form-label">
                                    PAGIBIG LOAN:
                                </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="OtherDeduction2" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="OtherDeduction3" class="col-md-6 col-form-label">
                                    FACULTY SAVINGS DEPOSIT:
                                </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="OtherDeduction3" placeholder="-----">
                                </div>
                            </div>

                            <br>
                            <div class="row md-4">
                                <label for="OtherDeduction4" class="col-md-6 col-form-label">
                                    FACULTY SAVINGS LOAN:
                                </label>

                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="OtherDeduction4" placeholder="-----">
                                </div>
                            </div>

                            <br>
                            <div class="row md-4">
                                <label for="OtherDeduction5" class="col-md-6 col-form-label">
                                    SALARY LOAN: </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="OtherDeduction5" placeholder="-----">
                                </div>
                            </div>

                            <br>
                            <div class="row md-4">
                                <label for="OtherDeduction6" class="col-md-3 col-form-label">
                                    OTHERS: </label>

                                <select id="OtherDeduction6" class="col-sm-5 form-select">
                                    <option>SELECT OTHER DEDUCTION</option>
                                    <option> Option 1</option>
                                    <option> Option 2</option>
                                    <option> Option 3</option>
                                </select>

                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="row row-cols-2 accordion-body g-4">
                        <!-- Other Income Column -->
                        <div class="col-12">
                            <p class="display-6"> OTHER INCOME </p>
                            <div class="row md-4">
                                <label for="OtherIncome1" class="col-md-6 col-form-label">RATE / HOUR:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="OtherIncome1" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="OtherIncome2" class="col-md-6 col-form-label"> NO.OF HOURS / CUT OFF:</label>

                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="OtherIncome2" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="OtherIncome3" class="col-md-6 col-form-label">
                                    TOTAL OTHER INCOME PAY:</label>
                                </label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="OtherIncome3" placeholder="-----">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row row-cols-2 accordion-body">

                        <!-- Income Summary Column -->
                        <div class="col-6">
                            <p class="display-6"> INCOME SUMMARY </p>
                            <div class="row md-4">
                                <label for="IncomeSummary1" class="col-md-6
                                        col-form-label">GROSS INCOME:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="IncomeSummary1" placeholder="-----">
                                </div>
                            </div>

                            <br>

                            <div class="row md-4">
                                <label for="IncomeSummary2" class="col-md-6
                                        col-form-label">NET INCOME:</label>

                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="IncomeSummary2" placeholder="-----">
                                </div>
                            </div>
                        </div>

                        <!-- Deduction Summary Column -->
                        <div class="col-6">
                            <p class="display-6"> DEDUCTION SUMMARY </p>
                            <div class="row md-4">
                                <label for="Deduction1" class="col-md-6
                                        col-form-label">TOTAL DEDUCTION:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="Deduction1" placeholder="-----">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="btn-group gap-3 m-4 translate-middle-y" role="group" aria-label="Basic outlined example">
                    <button type="button" class="btn btn-outline-success">CALCULATE</button>
                    <button type="button" class="btn btn-outline-success">NEW</button>
                    <button type="button" class="btn btn-outline-success">CANCEL</button>
                    <button type="button" class="btn btn-outline-success">PRINT
                        PAYSLIP</button>
                    <button type="button" class="btn btn-outline-success">PREVIEW
                        PAYSLIP</button>
                    <button type="button" class="btn btn-outline-danger">EXIT</button>
                </div>

            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>

    </body>
</html>