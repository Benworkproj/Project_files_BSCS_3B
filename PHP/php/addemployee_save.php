<?php
    // save data from form
    if(isset($_POST['submit'])) {
    // get data
    $employee_no = $_POST['employee_no'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $nationality = $_POST['nationality'];
    $civil_status = $_POST['civil_status'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $employee_status = $_POST['employee_status'];
    // connect to database
    $conn = new mysqli('localhost', 'employee_no', 'fname', 'mname', 'lname', 'gender', 'birthdate', 'nationality', 'civil_status', 'department', 'designation', 'employee_status', 'employee');
    // save data
    $sql = "INSERT INTO employee (emp_id_no, employee_no, fname, mname, lname, gender, birthdate, nationality, civil_status, department, designation, employee_status)
    VALUES ('$employee_no', '$fname', '$mname', '$lname', '$gender', '$birthdate', '$nationality', '$civil_status', '$department', '$designation', '$employee_status', '$employee')";
    $conn->query($sql);
}

?>
