<?php 
// require_once 'core/init.php';
include "conn.php";
// $sql = "SELECT * FROM products WHERE featured=1";
// $featured = $db->query($sql);
$query = "select * from products";


$result = $conn->query( $query );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleanshelf</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
        <a href="/ecom/index.php" class="navbar-brand" id="text"> Wazito</a>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Products <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li> <a href="#">Food</a></li>
                      <li>  <a href="#">Electronics</a></li>
                      <li>  <a href="#">Clothing</a></li>
                       <li> <a href="#">Accessories</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="col-md-2"></div>

<div class="col-md-12 pb-5">
    <div class="row text-center">
        <h2 class="text-center"> Featured Products</h2>
        <?php while($product = mysqli_fetch_assoc($result)) : ?>
        <div class="col-md-3">
            <h4><?= $product['title']; ?></h4>
            <img src="<?= $product['image'];?>" alt="<?= $product['title'];?>" id="images">
            <p class="list-price text-danger"> List Price: <s> <?= $product['list_price'];?></s></p>
            <p class="price"><?= $product['price'];?></p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1"> Details</button>

        </div>
        <?php endwhile;?>
    </div>
</div>

<?php 
// include 'details-modal-LevisJeans.php';
// include 'details-modal-Huawei.php';
// include 'details-modal-Laptop.php';
// include 'details-modal-Detol.php';
// include 'details-modal-Supa.php';
// include 'details-modal-Blueband.php';
// include 'details-modal-Pizza.php';

 include 'details-model.php';


?>


<footer class="text-center" id="footer">&copy; Copyright 2020 Seje</footer>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>