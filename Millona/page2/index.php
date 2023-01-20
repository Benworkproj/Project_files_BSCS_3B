<?php

session_start();

require_once '../app/core/Redirect.php';
require_once '../app/config/env.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_level'] === '1') {
        header('Location:' . ADMIN);
    } else if ($_SESSION['user']['user_level'] === '0') {
        header('Location:' . PAGE3);
    } 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Form</title>

    <style>
        input[type='file'] {
            width: 85%;
            overflow: hidden;

        }

        .light-color {
            color: rgb(103, 101, 101);
        }

        .bg-very-light-gray {
            background-color: rgb(245, 245, 245);
        }

        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-dark">
    <hr>


    <div class="container bg-body rounded shadow justify-content-center align-items-center font-monospace">
        <div class="display-4 text-center">
            Fill-Up the Form
        </div>

        <form action="" class="bg-very-light-gray" method="POST">
            <?php
            error_reporting(E_ERROR | E_PARSE);
            if (isset($_POST['net'])) {

                $BPratehr = $_POST['BPratehr'];
                $BPcutoff = $_POST['BPcutoff'];
                $BPinccutoff = $_POST['BPinccutoff'];
                $basicpay = $BPratehr * $BPcutoff;

                $HIratehr = $_POST['HIratehr'];
                $HIcutoff = $_POST['HIcutoff'];
                $HIinccutoff = $_POST['HIinccutoff'];
                $honoraryincome = $HIratehr * $HIcutoff;

                $OTratehr = $_POST['OTratehr'];
                $OTcutoff = $_POST['OTcutoff'];
                $OTinccutoff = $_POST['OTinccutoff'];
                $otherincome = $OTratehr * $OTcutoff;

                $sss = $_POST['sss'];
                $phil = $_POST['phil'];
                $pag = $_POST['pag'];
                $intax = $_POST['intax'];
                $regulardeduction = $sss + $phil + $pag + $intax;

                $OTsss = $_POST['OTsss'];
                $OTpag = $_POST['OTpag'];
                $OTfacdep = $_POST['OTfacdep'];
                $OTfacloan = $_POST['OTfacloan'];
                $OTsalary = $_POST['OTsalary'];
                $OTother = $_POST['OTother'];
                $otherdeduction = $OTsss + $OTpag + $OTfacdep + $OTfacloan + $OTsalary + $OTother;

                $grossincome = $basicpay + $honoraryincome + $otherincome;

                $totaldeduction = $regulardeduction + $otherdeduction;

                $netincome = $grossincome - $totaldeduction;
            }
            ?>
            <div class="accordion-body">

                <hr>
                <!--  First Row  -->
                <!-- Basic Information -->
                <div class="row fst-italic g-3 position-relative">

                    <div class="col-md-4">
                        <input type="text" class="form-control" id="floatingInput" placeholder=" Employee Number
                                ">
                        <label for="floatingInput"> <span class="light-color"> Employee Number </span></label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control " id="Number-of-Dependent(s)" placeholder=" Number of Dependent(s) ">
                        <label for="Number-of-Dependent(s)"> <span class="light-color"> Number of Dependent(s)
                            </span></label>
                    </div>
                    <div class="col-sm-2 ">
                        <input type="date" class="form-control" id="PayDate" placeholder=" Pay Date ">
                        <label for="PayDate">Pay Date</label>
                    </div>

                    <div class="col-sm-2 text-sm-center img-thumbnail position-absolute top-0 end-0">
                        <label for="employeeIdImage"> <span class="light-color"> Upload your photo here
                            </span></label>
                        <input type="image" src="../public/assets/img/default_profile_image.jpg" alt="default_profile_image" style="width: 100%; height: 100%">
                        <!-- <span id='button' class="custom-file-upload">Select File</span> -->
                        <input type="file" name="employeeIdImage" id="employeeIdImage">
                    </div>

                </div>

                <br>

                <div class="row fst-italic g-3">
                    <div class="col-sm-10 form-floating">
                        <input type="text" class="form-control" id="FirstName" placeholder=" First Name
                                ">
                        <label for="FirstName"> First Name </label>
                    </div>

                    <div class="col-sm-10 form-floating ">
                        <input type="text" class="form-control " id="LastName" placeholder=" Last Name ">
                        <label for="LastName"> Last Name </label>
                    </div>
                </div>

                <br>

                <div class="row row-cols-sm-2 g-3">
                    <div class="col-md-4 form-floating">
                        <input type="text" class="form-control" id="CivilStatus" placeholder=" Civil Status ">
                        <label for="CivilStatus"> Civil Status </label>
                    </div>

                    <div class="col-md-4 form-floating">
                        <input type="text" class="form-control" id="EmployeeStatus" placeholder=" Employee Status ">
                        <label for="EmployeeStatus"> Employee Status </label>
                    </div>

                    <div class="col-md-4 form-floating">
                        <input type="text" class="form-control" id="Designation" placeholder=" Designation ">
                        <label for="Designation"> Designation </label>
                    </div>

                    <div class="col-md-4 form-floating">
                        <input type="text" class="form-control" id="Department" placeholder=" Department ">
                        <label for="Department"> Department </label>
                    </div>
                </div>

                <hr>

                <!-- Second ROw -->
                <div class="row row-cols-2 accordion-body g-5">

                    <!-- Basic Pay Column -->
                    <div class="col">
                        <p class="display-6"> Basic Pay </p>
                        <div class="row md-4">
                            <label for="BasicPay1" class="col-md-6 col-form-label">Rate / Hour</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="BasicPay1" name="BPratehr" value="<?php if (isset($_POST['net'])) {
                                                                                                                    echo $_POST['BPratehr'];
                                                                                                                } ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="BasicPay2" class="col-md-6 col-form-label"> No. of hours / Cut Off</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="BasicPay2" name="BPcutoff" value="<?php if (isset($_POST['net'])) {
                                                                                                                    echo $_POST['BPcutoff'];
                                                                                                                } ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="BasicPay3" class="col-md-6 col-form-label"> Income per Cut Off</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="BasicPay3" name="BPinccutoff" value="<?php echo $basicpay ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Regular Deduction Column -->
                    <div class="col">
                        <p class="display-6"> Regular Deduction </p>
                        <div class="row md-4">
                            <label for="RegularDeduction1" class="col-md-6 col-form-label">SSS Contribution</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="RegularDeduction1" placeholder="0.00" name="sss">
                                <script>
                                    document.getElementById("RegularDeduction1").value = 255.00;
                                </script>
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="RegularDeduction2" class="col-md-6 col-form-label"> PhilHealth Contribution
                            </label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="RegularDeduction2" placeholder="0.00" name="phil">
                                <script>
                                    document.getElementById("RegularDeduction2").value = 400.00;
                                </script>
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="RegularDeduction3" class="col-md-6 col-form-label"> Pag-Ibig
                                Contribution</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="RegularDeduction3" placeholder="100" name="pag">
                                <script>
                                    document.getElementById("RegularDeduction3").value = 100.00;
                                </script>
                            </div>
                        </div>

                        <br>
                        <div class="row md-4">
                            <label for="RegularDeduction4" class="col-md-6 col-form-label"> Tax </label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="RegularDeduction4" placeholder="0.00" name="intax">
                                <script>
                                    document.getElementById("RegularDeduction4").value = 0.00;
                                </script>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>
                <!-- Third ROw -->
                <div class="row row-cols-2 accordion-body g-5">

                    <!--  Honorarium Column -->
                    <div class="col">

                        <p class="display-6">Honorarium </p>
                        <div class="row md-4">
                            <label for="Honorarium1" class="col-md-6 col-form-label">Rate / Hour</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="Honorarium1" name="HIratehr" value="<?php if (isset($_POST['net'])) {
                                                                                                                        echo $_POST['HIratehr'];
                                                                                                                    } ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="Honorarium2" class="col-md-6 col-form-label"> No. of hours / Cut Off</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="Honorarium2" name="HIcutoff" value="<?php if (isset($_POST['net'])) {
                                                                                                                        echo $_POST['HIcutoff'];
                                                                                                                    } ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="Honorarium3" class="col-md-6 col-form-label"> Total Honorarium Pay</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="Honorarium3" name="HIinccutoff" value="<?php echo $honoraryincome ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Other Deduction Column -->
                    <div class="col">
                        <p class="display-6"> Other Deduction </p>
                        <div class="row md-4">
                            <label for="OtherDeduction1" class="col-md-6 col-form-label">SSS Loan</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherDeduction1" placeholder="0.00" name="OTsss" value="<?php if (isset($_POST['net'])) {
                                                                                                                                            echo $_POST['OTsss'];
                                                                                                                                        } ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="OtherDeduction2" class="col-md-6 col-form-label"> PAGIBIG Loan
                            </label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherDeduction2" placeholder="0.00" name="OTpag" value="<?php if (isset($_POST['net'])) {
                                                                                                                                            echo $_POST['OTpag'];
                                                                                                                                        } ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="OtherDeduction3" class="col-md-6 col-form-label"> Faculty Savings Deposit
                            </label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherDeduction3" placeholder="0.00" name="OTfacdep" value="<?php if (isset($_POST['net'])) {
                                                                                                                                                echo $_POST['OTfacdep'];
                                                                                                                                            } ?>">
                            </div>
                        </div>

                        <br>
                        <div class="row md-4">
                            <label for="OtherDeduction4" class="col-md-6 col-form-label"> Faculty Savings Loan
                            </label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherDeduction4" placeholder="0.00" name="OTfacloan" value="<?php if (isset($_POST['net'])) {
                                                                                                                                                echo $_POST['OTfacloan'];
                                                                                                                                            } ?>">
                            </div>
                        </div>

                        <br>
                        <div class="row md-4">
                            <label for="OtherDeduction5" class="col-md-6 col-form-label"> Salary Loan </label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherDeduction5" placeholder="0.00" name="OTsalary" value="<?php if (isset($_POST['net'])) {
                                                                                                                                                echo $_POST['OTsalary'];
                                                                                                                                            } ?>">
                            </div>
                        </div>

                        <br>
                        <div class="row md-4">
                            <label for="OtherDeduction6" class="col-md-6 col-form-label"> Other </label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherDeduction6" placeholder="0.00" name="OTother" value="<?php if (isset($_POST['net'])) {
                                                                                                                                            echo $_POST['OTother'];
                                                                                                                                        } ?>">
                            </div>

                        </div>
                    </div>

                </div>

                <hr>
                <div class="row row-cols-2 accordion-body g-4">
                    <!-- Other Income Column -->
                    <div class="col-12">
                        <p class="display-6"> Other Income </p>
                        <div class="row md-4">
                            <label for="OtherIncome1" class="col-md-6 col-form-label">Rate / Hour</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherIncome1" name="OTratehr" value="<?php if (isset($_POST['net'])) {
                                                                                                                        echo $_POST['OTratehr'];
                                                                                                                    } ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="OtherIncome2" class="col-md-6 col-form-label"> No. of Hours / Cut
                                Off</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherIncome2" name="OTcutoff" value="<?php if (isset($_POST['net'])) {
                                                                                                                        echo $_POST['OTcutoff'];
                                                                                                                    } ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="OtherIncome3" class="col-md-6 col-form-label"> Total Other Income
                                Pay</label>
                            </label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="OtherIncome3" name="OTinccutoff" value="<?php echo $otherincome ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row row-cols-2 accordion-body">

                    <!-- Income Summary Column -->
                    <div class="col-6">
                        <p class="display-6"> Income Summary </p>
                        <div class="row md-4">
                            <label for="IncomeSummary1" class="col-md-6 col-form-label">GROSS INCOME</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="IncomeSummary1" value="<?php echo $grossincome ?>" readonly>
                            </div>
                        </div>

                        <br>

                        <div class="row md-4">
                            <label for="IncomeSummary2" class="col-md-6 col-form-label">NET INCOME</label>

                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="IncomeSummary2" value="<?php echo $netincome ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <!-- Deduction Summary Column -->
                    <div class="col-6">
                        <p class="display-6"> Deduction Summary </p>
                        <div class="row md-4">
                            <label for="Deduction1" class="col-md-6 col-form-label">Total Deduction</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" id="Deduction1" value="<?php echo $totaldeduction ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="btn-group gap-3 m-4 translate-middle-y" role="group" aria-label="Basic outlined example">
                <button type="submit" class="btn btn-outline-success" name="net">CALCULATE</button>
                <button type="reset" class="btn btn-outline-success" onclick="window.location.href='Web_page_2_Activity.php'">NEW</button>
                <button type="button" class="btn btn-outline-danger">CANCEL</button>
                <button type="button" class="btn btn-outline-primary">PRINT PAYSLIP</button>
                <button type="button" class="btn btn-outline-info">PREVIEW PAYSLIP</button>
                <button type="button" class="btn btn-outline-danger">EXIT</button>
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>