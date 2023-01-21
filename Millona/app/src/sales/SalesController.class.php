<?php

// fix the  Failed to open stream: No such file or directory i
// in app\src\sales\SalesController.php

require_once __DIR__ . '../../../core/Model.php';

class SalesController
{

    private $model;
    private $error = [];
    private $data;

    public function __construct($data)
    {
        $this->model = new BaseSales();
        $this->data = $data;
    }


    public function validateSalesData(){
        
        $this->isDataEmpty();
        // check if the cashvalue is less than the total amount
        if ($this->data['cashValue'] < $this->data['totalDiscountedGiven']) {
            $this->error['error_name'] = 'Cash value is less than the total amount';
        }

        return $this->error;
    }


    public function addSales()
    {
        $data = $this->sanitizeSalesData();
        $addSales = $this->model->addSales($data);

        if ($addSales) {
            return true;
        } else {
            return false;
        }
    }


    // check if anyone one of the data is empty
    public function isDataEmpty()
    {

        foreach ($this->data as $key => $value) {
            if (empty($value)) {
                $this->error['error_name'] = 'All fields are required';
            }
        }

        if (empty($this->error)) {
            return true;
        } else {
            return false;
        }

    }


    private function sanitizeSalesData()
    {

        $data = $this->data;
        // loop through the data and sanitize it
        foreach ($data as $key => $value) {
            $data[$key] = $this->model->getConnection()->real_escape_string($value);
        }

        return $data;
    }
}
