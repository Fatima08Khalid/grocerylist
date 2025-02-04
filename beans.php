<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beans - Grocery AI</title>
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
        <h2>Beans</h2>
        <div class="item-grid ii4">
            <div class="item">
                <img src="images/lentils.jpg" alt="Lentils">
                <h3>Lentils</h3>
                <p>Organic lentils (1kg).</p>
                <button onclick="addToCart('Lentils')">Add to Cart</button>
            </div>
            <div class="item">
                <img src="images/chickpeas.jpg" alt="Chickpeas">
                <h3>Chickpeas</h3>
                <p>Chickpeas (1kg).</p>
                <button onclick="addToCart('Chickpeas')">Add to Cart</button>
            </div>
            <div class="item">
                <img src="images/blackbeans.jpg" alt="Black Beans">
                <h3>Black Beans</h3>
                <p>Black beans (1kg).</p>
                <button onclick="addToCart('Black Beans')">Add to Cart</button>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2025 Grocery AI. All rights reserved.</p>
    </footer>
</body>
</html>
