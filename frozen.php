<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frozen Items</title>
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
            <a href="cart.html">Cart</a>
        </nav>
    </header>

    <section class="subcategories">
        <h2>Frozen Area Items</h2>
        <div class="subcategory-grid">
            <div class="subcategory">
                <img src="images/nuggets.jpg" alt="Nuggets">
                <h3>Nuggets</h3>
                <button onclick="addToCart('Nuggets')">Add to Cart</button>
            </div>
            <div class="subcategory">
                <img src="images/ice-cream.jpg" alt="Ice Cream">
                <h3>Ice Cream</h3>
                <button onclick="addToCart('Ice Cream')">Add to Cart</button>
            </div>
            <div class="subcategory">
                <img src="images/pizza.jpg" alt="Frozen Pizza">
                <h3>Frozen Pizza</h3>
                <button onclick="addToCart('Frozen Pizza')">Add to Cart</button>
            </div>
            <div class="subcategory">
                <img src="images/poppers.jpg" alt="chicken poppers">
                <h3>Frozen poppers</h3>
                <button onclick="addToCart('chicken poppers')">Add to Cart</button>
            </div>
            <div class="subcategory">
                <img src="images/fillet.jpg" alt="Burger fillet">
                <h3>Burger fillet</h3>
                <button onclick="addToCart('Burger fillet')">Add to Cart</button>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
