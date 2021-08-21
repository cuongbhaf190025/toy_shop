<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="cart.css">
<head>
  <title>Your Cart</title>
</head>
<body>
  <?php 
  session_start();
  require_once("admin/include/conn.php");
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $id =$_POST['id'];
    if (empty($_SESSION['cart'][$id])) {
      $q=mysqli_query($conn,"SELECT * FROM song WHERE song_id = {$id}");
      $product = mysqli_fetch_assoc($q);
      $_SESSION['cart'][$id]=$product;
    }
    header("location:cart.php");
  }
  ?>
  <div class="container-fluid">
   <div class="row">
    <link rel="stylesheet" type="text/css" href="cart.css">
    <h3 class="giohang"><i class="fas fa-shopping-cart"></i>Cart</h3>
    <br>
    <br>
    <?php 
    if (!empty($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $item) :
        ?>
        <div class="products" style="border: 2px solid black">
          <a href="detail.php?id=<?php echo $item['song_id']?>" style="text-decoration: none;">
            <div><img src="img/<?php echo $item['song_img']?>" class="img-cart"></div>
            <h2><?php echo $item['song_name'] ?></h2>
            <p style="color: red">Price: <?php echo $item['song_price'] ; ?></p>
          </a>

        </div>
        <?php
      endforeach;
    }
    else 
      echo "There are no products in the product";
    ?>
    <br>
    <div class="container" style="border-top:3px solid #38D276;margin-top: 20px">
     <div class="col-md-6" style="border: 2px solid #38D276">
      <h3 style="text-align: center;">Payment</h3>
      <form method="POST" action="pay.php" class="was-validated">
        <div class="form-group" >
         <label for="usr">UserName:</label>
         <input type="text" class="form-control">
       </div>
       <label for="bank">Select payment bank: </label>
       <select class="custom-select" required id="bank" name="bank">
        <option selected></option>
        <option value="Vietcombank">VietComBank</option>
        <option value="Techcombank">TechComBank</option>
        <option value="Airpay">AirPay</option>
        <option value="momo">MoMo</option>
      </select>
      <div class="form-group">
        <div class="form-group">
          <label for="usr">Order date:</label>
          <input type="text" class="form-control" id="usr" name="date" value="<?php
          date_default_timezone_set('Asia/Ho_Chi_Minh');
          echo "". date("Y.m.d h:i:sa");
          ?>" readonly>
        </div>
        <div class="form-group">
          <label for="usr">Total: </label>
          <input type="text" class="form-control" id="usr" value=" "name="total">
        </div>
        <input type="submit" class="btn btn-success" value="Pay">
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>