<?php 

include_once 'products.php';

class Book extends Products {
    protected $extraField;
    protected function extra() {
        $this->extraField = "Weight: ".$_POST['weight']." KG";
        $this->checkPrice();
    }
    public function check() {
        if (is_numeric($_POST['weight'])) {
            $this->extra();
          } else {
            echo "Please enter valid book parametres";
            exit();
          };
    }
}
class Disk extends Products {
    protected $extraField;
    protected function extra() {
        $this->extraField = "Size: ".$_POST['size']." MB";
        $this->checkPrice();
    }
    public function check() {
        if (is_numeric($_POST['size'])) {
            $this->extra();
          } else {
            echo "Please enter valid disk parametres";
            exit();
          };
    }
}
class Furniture extends Products {
    protected $extraField;
    protected function extra() {
        $this->extraField = "Dimension: ".$_POST['height']."x".$_POST['width']."x".$_POST['length'];
        $this->checkPrice();
    }
    public function check() {
        if (is_numeric($_POST['height']) && is_numeric($_POST['width']) && is_numeric($_POST['length'])) {
            $this->extra();
          } else {
            echo "Please enter valid furniture parametres";
            exit();
          };
    }
}
function checkExtra() {
    if (!$_POST['height'] && !$_POST['width'] && !$_POST['length'] && !$_POST['size']) {
        $book = new Book();
        $book->check();
    }
    if (!$_POST['height'] && !$_POST['width'] && !$_POST['length'] && !$_POST['weight']) {
        $disk = new Disk();
        $disk->check();
    }
    if (!$_POST['size'] && !$_POST['weight']) {
        $furniture = new Furniture();
        $furniture->check();
    }
}
checkExtra();

?>