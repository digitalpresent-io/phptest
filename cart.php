<?php
include_once __DIR__ . '/includes/header.php';
// join the two tables here
$stmt = $conn->query("SELECT * FROM cart");
$cartProducts = $stmt->fetchAll();
?>

<div class="container mt-5">
    <div class="row">
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <td>Name</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <p>The Name</p>
                </td>
                <td>
                    <div class="form-group">
                        <input type="number" value="1" name="quantity" id="" class="form-control">
                    </div>
                </td>
                <td>
                    <p>$<b>235</b></p>
                </td>
                <td>
                    <button class="btn btn-danger removeFromCart" data-product-id="1">Remove</button>
                </td>
            </tr>
            <tr>
                <td>
                    <p>The Name</p>
                </td>
                <td>
                    <div class="form-group">
                        <input type="number" value="1" name="quantity" id="" class="form-control">
                    </div>
                </td>
                <td>
                    <p>$<b>235</b></p>
                </td>
                <td>
                    <button class="btn btn-danger removeFromCart" data-product-id="1">Remove</button>
                </td>
            </tr>
            <tr>
                <td>
                    <p>The Name</p>
                </td>
                <td>
                    <div class="form-group">
                        <input type="number" value="1" name="quantity" id="" class="form-control">
                    </div>
                </td>
                <td>
                    <p>$<b>235</b></p>
                </td>
                <td>
                    <button class="btn btn-danger removeFromCart" data-product-id="1">Remove</button>
                </td>
            </tr>
            <tr>
                <td>
                    <p>The Name</p>
                </td>
                <td>
                    <div class="form-group">
                        <input type="number" value="1" name="quantity" id="" class="form-control">
                    </div>
                </td>
                <td>
                    <p>$<b>235</b></p>
                </td>
                <td>
                    <button class="btn btn-danger removeFromCart" data-product-id="1">Remove</button>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="col-md-4 offset-md-8">
            <p>Total: $<b>1248</b></p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-8 offset-md-4 m-auto">
            <div class="row">
                <div class="col-md-6">
                    <a href="/index.php" class="btn w-100 btn-primary">
                        BACK TO SHOP
                    </a>
                </div>
                <div class="col-md-6">
                    <button class="btn w-100 btn-success">
                        PURCHASE
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>


