<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Grocer AI</h1>
        </div>
        <nav>
            <a href="index.html">Home</a>
            <a href="features.html">Features</a>
            <a href="about.html">About Us</a>
            <a href="contact.html">Contact</a>
            <a href="cart.html">Cart</a>
        </nav>
    </header>

    <section class="cart">
        <h2>Your Cart</h2>
        <ul id="cart-items"></ul>
        <button onclick="checkout()">Checkout</button>
    </section>

    <script src="script.js"></script>
</body>
</html>
