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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Men <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li> <a href="#">Shirts</a></li>
                      <li>  <a href="#">Pants</a></li>
                      <li>  <a href="#">Shoes</a></li>
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
        <div class="col-md-3">
            <h4>Levis Jeans</h4>
            <img src="images/levis.jpeg" alt="" id="images">
            <p class="list-price text-danger"> List Price: <s> Ksh. 2499</s></p>
            <p class="price">Our Price: 2000</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1"> Details</button>

        </div>

        <div class="col-md-3">
            <h4>Huawei Phone</h4>
            <img src="images/phone.jpeg" alt="" id="images">
            <p class="list-price text-danger"> List Price: <s> Ksh 24599</s></p>
            <p class="price">Our Price: 19000</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2"> Details</button>
            
        </div>

        <div class="col-md-3">
            <h4>HP Laptop</h4>
            <img src="images/lapi.jpeg" alt="" id="images">
            <p class="list-price text-danger"> List Price: <s> Ksh. 54000</s></p>
            <p class="price">Our Price: 45000</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3"> Details</button>
            
        </div>

        <div class="col-md-3">
            <h4>Detol</h4>
            <img src="images/detol.jpeg" alt="" id="images">
            <p class="list-price text-danger"> List Price: <s> Ksh. 250</s></p>
            <p class="price">Our Price: 200</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4"> Details</button>
            
        </div>
        <div class="col-md-3">
            <h4>Super Loaf</h4>
            <img src="images/loaf.jpeg" alt="" id="images">
            <p class="list-price text-danger"> List Price: <s> Ksh. 59</s></p>
            <p class="price">Our Price: 40</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5"> Details</button>
            
        </div>
        <div class="col-md-3">
            <h4>BlueBand</h4>
            <img src="images/blueband.jpeg" alt="" id="images">
            <p class="list-price text-danger"> List Price: <s> Ksh. 300</s></p>
            <p class="price">Our Price: 250</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6"> Details</button>
            
        </div>
        <div class="col-md-3">
            <h4>Pizza</h4>
            <img src="images/pizza.jpeg" alt="" id="images">
            <p class="list-price text-danger"> List Price: <s> Ksh 1300</s></p>
            <p class="price">Our Price: 1000</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6"> Details</button>
            
        </div>
    </div>
</div>

<?php 
include 'details-modal-LevisJeans.php';
include 'details-modal-Huawei.php';
include 'details-modal-Laptop.php';
include 'details-modal-Detol.php';
include 'details-modal-Supa.php';
include 'details-modal-Blueband.php';
include 'details-modal-Pizza.php';


?>


<footer class="text-center" id="footer">&copy; Copyright 2020 Seje</footer>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>