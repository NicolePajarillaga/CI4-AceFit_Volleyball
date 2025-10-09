<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceFit Volleyball</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: #ffffff;
            color: #333;
        }

        /* Header */
        header {
            background-color: #222;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            border-bottom: 4px solid #f5c518;
        }

        .logo h1 {
            font-size: 26px;
            letter-spacing: 1px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 10px;
            transition: 0.3s ease;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: #f5c518;
            transition: 0.3s ease;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        nav ul li a:hover {
            color: #f5c518;
            transform: scale(1.05);
        }

        .btn {
            background-color: #f5c518;
            color: black;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .btn:hover {
            background-color: #fff;
            color: #222;
            transform: scale(1.05);
        }

        /* Hero Section */
        .hero {
            background-image: url('volleyball-bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            text-align: center;
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            margin-top: 90px;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            z-index: 2;
            max-width: 800px;
        }

        .hero-content h2 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 20px;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            background-color: #111;
            color: white;
            text-align: center;
            padding: 80px 20px;
            position: relative;
        }

        .cta-section h2 {
            font-size: 40px;
            margin-bottom: 20px;
            color: #f5c518;
        }

        .cta-section p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .cta-section a {
            background-color: #f5c518;
            color: black;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: 0.3s ease;
        }

        .cta-section a:hover {
            background-color: #fff;
            color: #111;
            transform: scale(1.05);
        }

        /* Items Section */
        #items {
            background-color: #f9f9f9;
            padding: 100px 40px;
            text-align: center;
        }

        #items h2 {
            font-size: 36px;
            margin-bottom: 50px;
            color: #222;
            position: relative;
            display: inline-block;
        }

        #items h2::after {
            content: '';
            position: absolute;
            width: 60%;
            height: 3px;
            background-color: #f5c518;
            bottom: -10px;
            left: 20%;
        }

        .item-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .item-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .item-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .item-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .item-info {
            padding: 20px;
        }

        .item-info h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #111;
        }

        .item-info p {
            font-size: 15px;
            color: #666;
            margin-bottom: 15px;
        }

        .item-info .price {
            font-weight: bold;
            color: #f5c518;
            font-size: 18px;
        }

        .item-info a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #f5c518;
            color: black;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .item-info a:hover {
            background-color: #111;
            color: #fff;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 50px;
            border-top: 4px solid #f5c518;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <h1>AceFit Volleyball</h1>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#items">Items</a></li>
                <li><a href="/moodboard">Mood Board</a></li>
                <li><a href="/roadmap">Road Map</a></li>
                <li><a href="/login" class="btn">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h2>Welcome to AceFit Volleyball</h2>
            <p>
                Your ultimate destination for volleyball excellence where players, teams, and fans come together.
                Explore our premium gear and elevate your game like never before.
            </p>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <h2>Gear Up for Greatness</h2>
        <p>Discover high-quality volleyball shoes, apparel, and equipment designed to help you play your best.
            Don’t wait — elevate your game today with AceFit Volleyball.</p>
        <a href="#items">Shop Now 🏐</a>
    </section>

    <!-- Items Section -->
    <section id="items">
        <h2>Our Featured Items</h2>
        <div class="item-container">

            <div class="item-card">
                <img src="https://i.pinimg.com/1200x/3b/7c/91/3b7c91f5dd97299959a93c96556b56eb.jpg" alt="Volleyball Shoes">
                <div class="item-info">
                    <h3>Volleyball Shoes</h3>
                    <p>Engineered for speed and stability. Lightweight with maximum traction for every jump and dive.</p>
                    <p class="price">₱7,999</p>
                    <a href="#">View Item</a>
                </div>
            </div>

            <div class="item-card">
                <img src="https://i.pinimg.com/736x/2e/5f/d8/2e5fd83a30c9918b5a5230735a844a83.jpg" alt="Apparel">
                <div class="item-info">
                    <h3>Volleyball Apparel</h3>
                    <p>Premium breathable fabric designed for comfort, confidence, and performance on the court.</p>
                    <p class="price">₱1,299</p>
                    <a href="#">View Item</a>
                </div>
            </div>

            <div class="item-card">
                <img src="https://i.pinimg.com/1200x/c7/a3/3d/c7a33da0a0596482169f01d3c5e5dfdc.jpg" alt="Equipment">
                <div class="item-info">
                    <h3>Volleyball Equipment</h3>
                    <p>Professional-grade volleyballs and accessories built for training and tournaments.</p>
                    <p class="price">₱999</p>
                    <a href="#">View Item</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 AceFit Volleyball | All Rights Reserved.</p>
    </footer>

</body>

</html>