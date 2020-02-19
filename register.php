<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
    <div id="add">
      <h1>Product Add</h1>
      <form id="main" action="/php/extra.php" method="POST">
        <button type="submit" name="submit" class="submit">save</button>
        <hr>
        <div id="info">
          <h4>SKU</h4>
          <input type="text" id="skuInput" name="sku" value="">
          <br>
          <h4>Name</h4>
          <input type="text" id="nameInput" name="name" value="">
          <br>
          <h4>Price</h4>
          <input type="text" id="priceInput" name="price" value="">
          <br>
          <h4>Type Switcher</h4>
          <select id="switcher" name="choose">
            <option value="" disabled selected>Type Switcher</option>
            <option value="furniture">Furniture</option>
            <option value="book">Book</option>
            <option value="dvd-disc">DVD-disc</option>
          </select><br>
          <div id="book">
            <h4>Weight</h4>
            <input id="b1" type="text" name="weight" value="">
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
               ut aliquip ex ea commodo consequat.</p>
          </div>
          <div id="furniture">
            <h4>Height</h4>
            <input id="f1" type="text" name="height" value="">
            <br>
            <h4>Width</h4>
            <input id="f2" type="text" name="width" value="">
            <br>
            <h4>Length</h4>
            <input id="f3" type="text" name="length" value="">
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
               ut aliquip ex ea commodo consequat.</p>
          </div>
          <div id="dvd">
            <h4>Size</h4>
            <input id="s1" type="text" name="size" value="">
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
               ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </form>
    </div>
</body>
</html>
