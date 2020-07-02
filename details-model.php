<?php 
include "conn.php";
$query = "select * from products";
$result = $conn->query( $query );

?>

<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <?php ($product = mysqli_fetch_assoc($result))  ?>
            <div class="modal-header">
            
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center"><?= $product['title']; ?></h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="center-block">
                                <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" class="details img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4>Details</h4>
                            <p><?= $product['description']; ?></p>
                            <hr>
                            <p>Price: <?= $product['list_price'];?></p>
                            <p>Brand: <?= $product['brand']; ?></p>
                            <form action="add_cart.php" method="POST">
                                <div class="form-group">
                                    <div class="col-xs-3">
                                        <label for="quantity" id="quantity-label"> Quantity: </label>
                                        <input type="text" class="form-control" id="quantity" name="quantity">
                                    </div> <br>
                                    <div class="form-group">
                                        <label for="size">Size: </label>
                                        <select name="size" id="size" class="form-control">
                                            <option value=""></option>
                                            <option value="small">Small</option>
                                            <option value="medium">Medium</option>
                                            <option value="large">Large</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal"> Close</button>
                <button class="btn btn-warning" type="submit"> <span class="glyphicon-shopping-cart"></span>Add To Cart</button>
            </div>
            <?php ?>
        </div>
    </div>

</div>