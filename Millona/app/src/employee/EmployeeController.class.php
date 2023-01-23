<?php

require_once __DIR__ . '../../../core/Model.php';

class EmployeeController
{

    private $data = [];
    private $errors = [];
    private $model;

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
            // check if the value is not empty
            if (empty($value)) {
                $this->errors['error_name'] = 'All fields are required';
            }

            if (!is_numeric($value)) {
                $this->errors['error_name'] = $key . ' must be numeric';
            }
 
            //  check if the value is not negative
            // convert key to upper
            if ($value <= 0) {
                $this->errors['error_name'] = $key . ' must not be 0 or negative.Please a valid value';
            }
        }

        // return the errors
        return $this->errors;
    }

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
