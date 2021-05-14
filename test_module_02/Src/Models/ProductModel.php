<?php

namespace Model;

use PDO;

class ProductModel
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function add($product)
    {
        $sql = "INSERT INTO products (name, type_product,  price, amount, created, description) VALUES (?,?,?,?,?,?) ";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $product->name);
        $stm->bindParam(2, $product->type_product);
        $stm->bindParam(3, $product->price);
        $stm->bindParam(4, $product->amount);
        $stm->bindParam(5, $product->created);
        $stm->bindParam(6, $product->description);

        return $stm->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result =  $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $id);
        return $stm->execute();
    }

    public function update($id, $product)
    {
        $sql = "UPDATE products SET name = ?, type_product = ?, price = ? , amount = ?, description = ? WHERE id =?";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(1, $product->name);
        $stm->bindParam(2, $product->type_product);
        $stm->bindParam(3, $product->price);
        $stm->bindParam(4, $product->amount);
        $stm->bindParam(5, $product->description);
        $stm->bindParam(6, $id);
        return $stm->execute();
    }

    public function search($name)
    {
        $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$name%'";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
