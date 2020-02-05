<?php

include_once 'dbh.php';

class addProducts extends Dbh {
  // Add new products to database
  public function AddToDbh(){
    if (!$_POST['size'] && !$_POST['weight']) {
      $this->checkFurniture();
    } elseif (!$_POST['height'] && !$_POST['width'] && !$_POST['length'] && !$_POST['size']) {
      $this->checkBook();
    } elseif (!$_POST['height'] && !$_POST['width'] && !$_POST['length'] && !$_POST['weight']) {
      $this->checkDisk();
    }
    $this->checkPrice();
    $this->sku = mysqli_real_escape_string($this->connect(), $_POST['sku']);
    $this->name = mysqli_real_escape_string($this->connect(), $_POST['name']);
    $this->price = mysqli_real_escape_string($this->connect(), $_POST['price']);
    $this->extra = mysqli_real_escape_string($this->connect(), $this->extraField);
    $sql = "INSERT INTO products (product_sku, product_name, product_price, product_extra)
    VALUES ('$this->sku','$this->name','$this->price','$this->extra');";
    mysqli_query($this->connect(),$sql);
    header("Location: ../index.php");
  }
  private function checkFurniture() {
    if (is_numeric($_POST['height']) && is_numeric($_POST['width']) && is_numeric($_POST['length'])) {
      $this->extraField = "Dimension: ".$_POST['height']."x".$_POST['width']."x".$_POST['length'];
    } else {
      echo "Please enter valid furniture parametres";
      exit();
    };
  }
  private function checkBook() {
    if (is_numeric($_POST['weight'])) {
      $this->extraField = "Weight: ".$_POST['weight']." KG";
    } else {
      echo "Please enter valid book parametres";
      exit();
    };
  }
  private function checkDisk() {
    if (is_numeric($_POST['size'])) {
      $this->extraField = "Size: ".$_POST['size']." MB";
    } else {
      echo "Please enter valid disk parametres";
      exit();
    };
  }
  private function checkPrice() {
    if (!is_numeric($_POST['price'])) {
      echo "Please enter valid disk parametres";
      exit();
    }
  }


}
$addProduct = new addProducts;
$addProduct ->AddToDbh();

?>
