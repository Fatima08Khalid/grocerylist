<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks - Grocery AI</title>
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
        <h2>Drinks</h2>
        <div class="item-grid ii3">
            <div class="item">
                <img src="images/juice.jpg" alt="Juice">
                <h3>Juice</h3>
                <p>Fresh orange juice (1L).</p>
                <button onclick="addToCart('Juice')">Add to Cart</button>
            </div>
            <div class="item">
                <img src="images/soda.jpg" alt="Soda">
                <h3>Soda</h3>
                <p>Sparkling soda (500ml).</p>
                <button onclick="addToCart('Soda')">Add to Cart</button>
            </div>
            <div class="item">
                <img src="images/coffee.jpg" alt="Coffee">
                <h3>Coffee</h3>
                <p>Ground coffee <br>(200g).</p>
                <button onclick="addToCart('Coffee')">Add to Cart</button>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2025 Grocery AI. All rights reserved.</p>
    </footer>
</body>
</html>
