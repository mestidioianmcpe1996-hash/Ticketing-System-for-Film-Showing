<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mini POS System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="pos-container">
    <h1>Mini POS System</h1>

    <div class="products">
        <h2>Products</h2>
        <button onclick="addToCart('Burger', 80)">Burger ₱80</button>
        <button onclick="addToCart('Fries', 50)">Fries ₱50</button>
        <button onclick="addToCart('Soft Drink', 40)">Soft Drink ₱40</button>
    </div>

    <div class="cart">
        <h2>Cart</h2>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody id="cartItems"></tbody>
        </table>

        <h3>Total: ₱<span id="total">0</span></h3>

        <div class="payment">
            <input type="number" id="cash" placeholder="Cash Received">
            <button onclick="checkout()">Checkout</button>
        </div>

        <h3 id="change"></h3>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
