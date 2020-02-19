<?php

include_once 'dbh.php';

abstract class Products extends Dbh {
    private $sku;
    private $name;
    private $price;
    private $extra;
    abstract function check();
    abstract protected function extra();
    private function addToDbh() {
        $this->sku = mysqli_real_escape_string($this->connect(), $_POST['sku']);
        $this->name = mysqli_real_escape_string($this->connect(), $_POST['name']);
        $this->price = mysqli_real_escape_string($this->connect(), $_POST['price']);
        $this->extra = mysqli_real_escape_string($this->connect(), $this->extraField);
        $sql = "INSERT INTO products (product_sku, product_name, product_price, product_extra)
        VALUES ('$this->sku','$this->name','$this->price','$this->extra');";
        mysqli_query($this->connect(),$sql);
        header("Location: ../index.php");
    }
    protected function checkPrice() {
        if (!is_numeric($_POST['price'])) {
            echo "Please enter valid price parametres";
            exit();
        }
        $this->addToDbh();
    }
}
?>