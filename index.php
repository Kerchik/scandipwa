<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div id="header">
            <h1>Product list</h1>
        </div>
        <div id="massDelete">
          <form action="/php/delete.php" method="post">
            <select name="mass-delete">
              <option value="mass-delete">Mass Delete Action</option>
            </select>
            <button type="submit" name="delete">Apply</button>
        </div>
        <hr />
    </header>
        <?php include_once "./php/show.php"; ?>
        </form>
</body>
</html>
