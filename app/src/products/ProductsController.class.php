<?php

require_once __DIR__ . '/ProductModel.class.php';

// class MainFoodsController extends ProductModel2
// {
//     protected function getMainFoods()
//     {
//         return parent::getAllProducts();
//     }

// }

// class ProductController {


//     public function index()
//     {
//         $products = $this->getAllProducts();
//         require_once 'app/src/products/ProductView.php';
//     }

    // public function show($id)
    // {
    //     $product = $this->getProduct($id);
    //     require_once 'app/src/products/views/show.php';
    // }

    // public function create()
    // {
    //     require_once 'app/src/products/views/create.php';
    // }

    // public function store()
    // {
    //     $product = new Product();
    //     $product->food_name = $_POST['food_name'];
    //     $product->price = $_POST['price'];
    //     $product->img = $_POST['img'];
    //     $this->addProduct($product);
    //     header('Location: /products');
    // }

    // public function edit($id)
    // {
    //     $product = $this->getProduct($id);
    //     require_once 'app/src/products/views/edit.php';
    // }

    // public function update($id)
    // {
    //     $product = new Product();
    //     $product->id = $id;
    //     $product->food_name = $_POST['food_name'];
    //     $product->price = $_POST['price'];
    //     $product->img = $_POST['img'];
    //     $this->updateProduct($product);
    //     header('Location: /products');
    // }

    // public function destroy($id)
    // {
    //     $this->deleteProduct($id);
    //     header('Location: /products');
    // }