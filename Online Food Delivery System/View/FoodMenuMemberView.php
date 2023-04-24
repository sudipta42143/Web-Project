<?php 
require_once '../Controller/foodInfoController.php';
include("./Navbar.php");
$data = fetchAllfoods();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/food.css">
    <title>Food Menu</title>
</head>
<body>
<!-- 

GRADIENT BANNER DESIGN BY SIMON LURWER ON DRIBBBLE:
https://dribbble.com/shots/14101951-Banners

-->
<div class="main-container">
  <div class="heading">
    <h1 class="heading__title">Food Menu</h1>
    <p class="heading__credits"><a class="heading__link" target="_blank" href="">You Can Order Food from here</a></p>
  </div>
  <div class="cards">
    <?php foreach ($data as $i => $data): ?>
    <form method="post" action="../Controller/orderFoodController.php">
        <div class="card card-4">
      <div class="card__icon"><i class="fas fa-bolt"><?php echo $data['Name'] ?> ( Quantity: <?php echo $data['Quantity'] ?> )</i></div>
      <p class="card__exit"><i class="fas fa-times"><?php echo $data['Price'] ?> Tk </i></p>
      <h2 class="card__title"><?php echo $data['Description'] ?></h2>
      <p class="card__apply">
        <input type="text" placeHolder= 'Amount' name='quantity'>
        <input type="text" style='opacity: 0;' name='id' value='<?php echo $data['id'] ?>' >
        <button type="submit" name="submit" style='background-color:green; color:white' href="#">Buy Now<i class="fas fa-arrow-right"></i></button>
        
    </p>
    </div>
    </form>
      <?php endforeach; ?>  
  </div>
</div>
</body>
</html>