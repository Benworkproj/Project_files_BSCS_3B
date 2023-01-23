<?php

class Helper{

    public static function sanitize($data)
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

    // return the length of the string
    public static function stringLength($string)
    {
        $string = self::sanitize($string);
        $string = strlen($string);
        return $string;
    }

}