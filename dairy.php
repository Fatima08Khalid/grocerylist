<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy Items - Grocery AI</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Grocery AI</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="features.html">Features</a>
        </nav>
    </header>
    <main>
        <h2>Dairy Items</h2>
        <div class="item-grid ii2">
            <div class="item">
                <img src="images/milk.jpg" alt="Milk">
                <h3>Milk</h3>
                <p>Fresh cow milk <br> (1L).</p>
                <button onclick="addToCart('Milk')">Add to Cart</button>
            </div>
            <div class="item">
                <img src="images/cheese.jpg" alt="Cheese">
                <h3>Cheese</h3>
                <p>Cheddar cheese (250g).</p>
                <button onclick="addToCart('Cheese')">Add to Cart</button>
            </div>
            <div class="item">
                <img src="images/butter.jpg" alt="Butter">
                <h3>Butter</h3>
                <p>Salted butter <br>(500g).</p>
                <button onclick="addToCart('Butter')">Add to Cart</button>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2025 Grocery AI. All rights reserved.</p>
    </footer>
</body>
</html>
