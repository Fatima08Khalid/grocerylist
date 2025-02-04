<?php
session_start();
include('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: rgb(255, 255, 255);
        }
        
        /* Header Styling */
        header {
            position: fixed;
            padding: 15px 20px;
            width: 100%;
            text-align: center;
            background-color: #f8f8f8;
            border-bottom: 1px solid #ddd;
        }
        
        .logo h1 {
            font-size: 24px;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #ddd;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 50px 20px;
            background-image: url('./images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .cta-buttons a {
            text-decoration: none;
            color: white;
            background-color: #03285a;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .cta-buttons a:hover {
            background-color: #03285a;
        }

        /* Key Features Section */
        .features {
            padding: 50px 20px;
            text-align: center;
        }
        

        .features h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .feature-card {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
        }

        .feature-card img {
            /* max-width: 50px; */
            margin-bottom: 10px;
        }
.features img{
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
.features img:hover{
transform: scale(1.1);
}
        /* How It Works Section */
        .how-it-works {
            background-color: #f8f8f8;
            padding: 50px 20px;
            text-align: center;
        
        }
        
        .how-it-works h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .step {
            max-width: 200px;
            text-align: center;
        }

        .step img {
            max-width: 100px;
            margin-bottom: 10px;
        }
        .how-it-works img{
            width: 300px;
            height: 100px;
            border-radius: 10px;
        }

        /* Testimonials Section */
        .testimonials {
            padding: 50px 20px;
            text-align: center;
        }

        .testimonials h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .testimonial {
            font-style: italic;
            margin: 10px 0;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 10px 20px;
            background-color: #f8f8f8;
            border-top: 1px solid #ddd;
        }
        /* .he1{
display: flex;
justify-content: center;
align-items: center;
        } */
        .fatma{
            display: flex;
            flex-direction: column;
justify-content: space-between;
align-items: center;
        }
.wrapperhe1{
    width: 80%;
    margin:  0 auto;
    /* background-color: red; */
    display: flex;
justify-content: center;
align-items: center;
}
.fatma{
    width: 50%;
}
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Grocer AI</h1>
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="features.php">Features</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="login1.php" id="login-link">Login</a>
            <a href="signup.php" id="signup-link">Sign Up</a>
            <a href="cart.php" id="cart-link" style="display: none;">Cart</a>
        </nav>
        
    </header>

    <!-- Hero Section -->
    <div class="hero he1" style="color:black;">
        <div class="wrapperhe1">

            <img src="./images/frontpic1.jpg" alt="">
            <div class="fatma">
                
                <h1>Welcome to Grocer AI</h1>
                <p>Your ultimate solution for smart grocery planning.</p>
                <div class="cta-buttons bf1">
                    <a href="signup.php">Get Started</a>
                    <a href="features.php">Explore Features</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Key Features Section -->
    <section class="features">
        <h2>Key Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <img src="./images/listgenerator.jpg" alt="List Generator">
                <h3>Smart List Generator</h3>
                <p>Automatically create grocery lists based on your needs.</p>
            </div>
            <div class="feature-card">
                <img src="./images/mealplanning.jpg" alt="Meal Planning">
                <h3>Meal Plan Integration</h3>
                <p>Turn your recipes into instant grocery lists.</p>
            </div>
            <div class="feature-card">
                <img src="./images/pantrymanagement.jpg" alt="Pantry Management">
                <h3>Pantry Management</h3>
                <p>Track your stock and reduce food waste.</p>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <h2>How It Works</h2>
        <div class="steps">
            <div class="step">
                <img src="./images/signup.jpg" alt="Sign Up">
                <h3>Sign Up</h3>
                <p>Create your account to get started.</p>
            </div>
            <div class="step">
                <img src="./images/pantry.jpg" alt="Add Pantry Items">
                <h3>Add Pantry Items</h3>
                <p>Input your stock or sync your devices.</p>
            </div>
            <div class="step">
                <img src="./images/list.jpg" alt="Generate List">
                <h3>Generate List</h3>
                <p>Let AI create the perfect grocery list for you.</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What Our Users Say</h2>
        <p class="testimonial">"This website saved me hours every week!"</p>
        <p class="testimonial">"Planning my meals has never been easier."</p>
        <p class="testimonial">"A must-have for every household!"</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Grocer AI. All rights reserved.</p>
    </footer>
</body>
</html>