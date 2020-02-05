<?php
include_once 'dbh.php';

Class Show extends Dbh {
  public function AddToWeb() {
    $result = mysqli_query($this->connect(),"SELECT * FROM products;");
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //Display data from database
    foreach ($products as $product) {
      echo '<div class="boxed">'; ?>
      <input type="checkbox" class="box" name="check[]" value="<?php echo $product['product_id']; ?> "><br>
      <?php echo $product['product_sku'].'<br>';
      echo $product['product_name'].'<br>';
      echo $product['product_price'].' $'.'<br>';
      echo $product['product_extra'].'<br>';
      echo '</div>';
    }
  }
}
$thing = new Show;
$thing->AddToWeb();
?>
