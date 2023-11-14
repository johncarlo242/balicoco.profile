<?php
$cartItems = array(
    array(
        'name' => 'Product 1',
        'price' => 10.99,
        'quantity' => 2,
        'image' => 'product1.jpg'
    ),
    array(
        'name' => 'Product 2',
        'price' => 200.00,
        'quantity' => 1,
        'image' => 'product2.jpg'
    ),
    array(
        'name' => 'Product 3',
        'price' => 5.99,
        'quantity' => 3,
        'image' => 'product3.jpg'
    ),
    array(
        'name' => 'Product 4',
        'price' => 8.50,
        'quantity' => 4,
        'image' => 'product4.jpg'
    ),
    array(
        'name' => 'Product 5',
        'price' => 12.75,
        'quantity' => 2,
        'image' => 'product5.jpg'
    )
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <style>
        body {
            background-color: rgb(255, 192, 203);
            font-family: Arial, sans-serif;
        }
        .cart {
            width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            text-align: right;
            font-weight: bold;
        }
        .product-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
        .product-details {
            display: flex;
            align-items: center;
        }
        .product-name {
            font-weight: bold;
            margin-left: 10px;
        }
        .product-price {
            color: #ff5722;
        }
        .product-quantity {
            font-size: 14px;
            color: #888;
        }
        .product-total {
            font-weight: bold;
        }
        .checkout-button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .cart-logo {
            display: flex;
            align-items: center;
        }
        .cart-logo img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="cart">
        <h2>
            <div class="cart-logo">
                <img src="https://icon2.cleanpng.com/20171220/jpe/shopping-cart-png-5a3a8fca5f1485.3449050215137873383895.jpg" alt="Cart Logo">
                CART
            </div>
        </h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Checkout</th>
            </tr>
            <?php foreach ($cartItems as $item) : ?>
                <tr>
                    <td>
                        <div class="product-details">
                            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>" class="product-image">
                            <div class="product-name"><?php echo $item['name']; ?></div>
                        </div>
                    </td>
                    <td class="product-price">₱<?php echo $item['price']; ?></td>
                    <td class="product-quantity"><?php echo $item['quantity']; ?></td>
                    <td class="product-total">₱<?php echo $item['price'] * $item['quantity']; ?></td>
                    <td>
                        <button class="checkout-button">Checkout</button>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr class="total">
                <td colspan="3">Total:</td>
                <td class="product-total">
                    ₱
                    <?php
                    $total = 0;
                    foreach ($cartItems as $item) {
                        $total += $item['price'] * $item['quantity'];
                    }
                    echo $total;
                    ?>
                </td>
                <td>
                    <form action="checkout.php" method="post">
                        <input type="hidden" name="total" value="<?php echo $total; ?>">
                        <button class="checkout-button" type="submit">CHECKOUT</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
