<?php

require_once __DIR__ . '../../../core/Model.php';

class EmployeeController
{
    private $data = [];
    private $errors = [];
    private $model;
    private $civil_status = [
        'single' => 'Single',
        'married' => 'Married',
        'widowed' => 'Widowed',
        'separated' => 'Separated',
        'divorced' => 'Divorced',
    ];

    private $emp_status = [
        'regular' => 'Regular',
        'probationary' => 'Probationary',
        'contractual' => 'Contractual',
        'none' => 'None of the above',
    ];

    public function __construct()
    {
        $this->model = new EmployeeBaseModel();
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    private function getData()
    {
        return $this->data;
    }

    public function validateData($data)
    {
        // check if all the $data is numeric
        foreach ($data as $key => $value) {
            //  sanitize the data
            $value = self::sanitize($value);
            $key = strtoupper($key);

            if ($value === '' OR $value === null OR $value <= 0) {
                $this->errors['error_name'] = 'All fields are required';
            }

            // get the civil status select option
            if ($key === 'civil_status') {
                if (!self::check_CivilStatus($value)) {
                    $this->errors['error_name'] = 'Invalid Civil Status';
                }
            }

            // get the employee status select option
            if ($key === 'emp_status') {
                if (!self::check_EmpStatus($value)) {
                    $this->errors['error_name'] = 'Invalid Employee Status';
                }
            }

            // check if the value is numeric
            if (!is_numeric($value)) {
                $this->errors['error_name'] = $key . ' must be numeric';
            }
        }
        if (empty($this->errors)) {
            $_SESSION['employee_data'] = $data;
        }
        // return the errors
        return $this->errors;
    }

    private function  check_CivilStatus($civil_status)
    {
        $civil_status = self::sanitize($civil_status);
         //    check if the value is equal to the civil status
        if (array_key_exists($civil_status, $this->civil_status)) {
            return true;
        } else {
            return false;
        }
    }

    private function check_EmpStatus($emp_status)
    {
        $emp_status = self::sanitize($emp_status);
        //    check if the value is equal to the civil status
        if (array_key_exists($emp_status, $this->emp_status)) {
            return true;
        } else {
            return false;
        }
    }


    // -----------------  HELPERS -----------------
    private function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public static function generateEmployeeId($employee_id)
    {
        $employee_id = rand(100000, 999999);
        return $employee_id;
    }


    // -----------------  CRUD -----------------

    public function deleteEmployee( $employee_id ){

        $employee_id = self::sanitize($employee_id);
        $deleteEmployee = $this->model->deleteEmployee($employee_id);

        if ($deleteEmployee) {
            return true;
        } else {
            return false;
        }
    }



    

}
