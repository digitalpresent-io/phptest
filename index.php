<?php
include_once __DIR__ . '/includes/header.php';
$stmt = $conn->query("SELECT * FROM products");
$products = $stmt->fetchAll();
?>

<div class="container mt-5">
    <div class="row">
        <?php
        foreach ($products as $product) {
            ?>
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title"><?= $product['name'] ?></h3>
                        <p class="card-text">PRICE: <b>$<?= $product['price'] ?></b></p>
                        <button class="btn btn-primary addToCart" data-product-id="<?= $product['id'] ?>">Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="row mt-5">
        <div class="col-md-4 m-auto">
            <a href="/cart.php" class="btn w-100 btn-primary">
                CART
            </a>
        </div>
    </div>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>


