<?php

namespace Controller;

use Model\DataBase;
use Model\ProductModel;
use Model\Product;

class ProductController
{
    public $productModel;

    public function __construct()
    {
        $connection = new DataBase();
        $this->productModel = new ProductModel($connection->connect());
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'Src/View/add.php';
        } else {
            $name = $_POST['name'];
            $type_product = $_POST['type_product'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $created = $_POST['created'];
            $description = $_POST['description'];

            $product = new Product($name, $type_product, $price, $amount, $description);
            var_dump($product);
            $this->productModel->add($product);

            header('Location: index.php');
        }
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include 'Src/View/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productModel->getById($id);
            include 'Src/View/delete.php';
        } else {
            $id = $_POST['id'];
            $this->productModel->delete($id);
            header('Location: index.php');
        }
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productModel->getById($id);
            include 'Src/View/edit.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['name'], $_POST['type_product'], $_POST['price'], $_POST['amount'], $_POST['description'],);
            $this->productModel->update($id, $product);
            header('Location: index.php');
        }
    }

    public function search()
    {

        $search = $_POST['search'];
        $product = $this->productModel->search($search);
        include 'Src/View/search.php';
    }
}
