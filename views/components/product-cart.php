<div class="col-md-3">
        <div class="card">
            <img src=="<?php echo BASE_URL. $product["image_url"]; ?>" class="card-img-top" alt="Product 1">
            <div class="card-body text-center">
            <h5 class="card-title"><?php echo $product["product_name"] ?></h5>
                <p class="card-text"><?php echo number_format($product["unit_price"],2); ?></p>
                <a href="#" class="btn btn-success">Add to Cart</a>
        </div>
    </div>
</div>