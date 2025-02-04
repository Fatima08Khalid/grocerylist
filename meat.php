<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meat - Grocery AI</title>
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
        <h2>Meat</h2>
        <div class="item-grid ">
            <div class="item">
                <img src="images/chicken.jpg" alt="Chicken" style="height: 250px;">
                <h3>Chicken</h3>
                <p>Boneless chicken (1kg).</p>
                <button onclick="addToCart('Chicken')">Add to Cart</button>
            </div>
            <div class="item">
                <img src="images/beef.jpg" alt="Beef" style="width: 170px; height: 250px;">
                <h3>Beef</h3>
                <p>Ground beef <br> (1kg).</p>
                <button onclick="addToCart('Beef')">Add to Cart</button>
            </div>
            <div class="item">
                <img src="images/fish.jpg" alt="Fish">
                <h3>Fish</h3>
                <p>Fresh salmon <br> (1kg).</p>
                <button onclick="addToCart('Fish')">Add to Cart</button>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2025 Grocery AI. All rights reserved.</p>
    </footer>
</body>
</html>
