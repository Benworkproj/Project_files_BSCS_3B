<?php

class EmployeeController
{

    private $data = [];
    private $errors = [];

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function validateData()
    {

        // check if all the $data is numeric
        foreach ($this->data as $key => $value) {
            //  sanitize the data
            $value = $this->sanitize($value);
            if (!is_numeric($value)) {
                $this->errors['error_name'] = $key . ' must be numeric';
            }
            // check if the value is not empty
            if (empty($value)) {
                $this->errors['error_name'] = 'All fields are required';
            }

            //  check if the value is not negative
            if ($value < 0) {
                $this->errors['error_name'] = $key . ' must be positive';
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

    

}
