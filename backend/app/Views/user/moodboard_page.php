<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodboard: AceFit Volleyball</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: #ffffff;
            color: #222;
            padding-top: 120px;
            /* Increased padding to clear fixed header */
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

        /* Footer */
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 60px;
            border-top: 3px solid #f5c518;
        }

        /* Main Content */
        h1 {
            text-align: center;
            font-size: 3em;
            color: #f5c518;
            margin-bottom: 10px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        p.subtitle {
            text-align: center;
            color: #555;
            font-size: 1.1em;
            margin-bottom: 50px;
        }

        section {
            margin-bottom: 60px;
            padding: 0 40px;
        }

        h2 {
            font-size: 1.8em;
            color: #222;
            margin-bottom: 20px;
            text-align: center;
            border-bottom: 3px solid #f5c518;
            display: inline-block;
            padding-bottom: 5px;
        }

        /* ---------- COLOR SYSTEM ---------- */
        .color-system {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            background: rgba(0, 0, 0, 0.03);
            border-radius: 12px;
            padding: 40px 20px;
        }

        .color-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .color-block {
            width: 240px;
            height: 70px;
            border-radius: 6px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .color-block:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(245, 197, 24, 0.4);
        }

        .color-codes {
            font-size: 0.9em;
            color: #555;
            margin-top: 5px;
        }

        .color-label {
            font-weight: 600;
            font-size: 1em;
            margin-top: 5px;
            text-align: center;
            color: #222;
        }

        .color-role {
            font-size: 0.85em;
            color: #777;
        }

        /* ---------- TYPOGRAPHY ---------- */
        .typography {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
        }

        .heading-font {
            font-size: 2em;
            color: #f5c518;
            font-weight: 700;
        }

        .body-font {
            max-width: 500px;
            font-size: 1em;
            color: #333;
            line-height: 1.6;
        }

        /* ---------- BUTTONS ---------- */
        .button-set {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .light .primary {
            background: #f5c518;
            color: #222;
        }

        .light .secondary {
            background: #222;
            color: #fff;
        }

        .light .border {
            background: transparent;
            border: 2px solid #f5c518;
            color: #f5c518;
        }

        .light .disabled {
            background: #ccc;
            color: #777;
            cursor: not-allowed;
        }

        .dark-mode {
            background: #222;
            padding: 25px;
            border-radius: 10px;
            width: fit-content;
        }

        .dark-mode .btn {
            border: none;
        }

        .dark-mode .primary {
            background: #f5c518;
            color: #222;
        }

        .dark-mode .secondary {
            background: #000;
            color: #fff;
        }

        .dark-mode .border {
            background: transparent;
            border: 2px solid #f5c518;
            color: #f5c518;
        }

        .dark-mode .disabled {
            background: #444;
            color: #aaa;
        }

        /* ---------- CARDS ---------- */
        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 25px;
            width: 260px;
            transition: all 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #f5c518;
            box-shadow: 0 0 15px rgba(245, 197, 24, 0.4);
        }

        .card h3 {
            color: #f5c518;
            margin-bottom: 10px;
        }

        .card p {
            color: #333;
        }

        .card a {
            color: #f5c518;
            text-decoration: none;
            font-weight: 600;
        }

        .card a:hover {
            text-decoration: underline;
        }

        /* ---------- LOGOS ---------- */
        .logos {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .logo-box {
            text-align: center;
        }

        .circle-logo,
        .square-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            border: 3px solid #f5c518;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .circle-logo {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .square-logo {
            border-radius: 12px;
            width: 150px;
            height: 150px;
        }

        .circle-logo img,
        .square-logo img {
            width: 80%;
            height: auto;
            object-fit: contain;
        }

        .circle-logo:hover,
        .square-logo:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(245, 197, 24, 0.5);
        }

        .logo-label {
            margin-top: 10px;
            color: #444;
            font-size: 14px;
        }

        /* ---------- BACK BUTTON ---------- */
        .back-btn {
            display: inline-block;
            margin-top: 40px;
            background-color: #f5c518;
            color: #222;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #222;
            color: #fff;
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
                <li><a href="/">Items</a></li>
                <li><a href="/moodboard">Mood Board</a></li>
                <li><a href="/roadmap">Road Map</a></li>
                <li><a href="/login" class="btn">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- COLOR SYSTEM -->
    <section>
        <h2>Color System</h2>
        <p style="color:#555; text-align:center; margin-bottom:25px;">Three main theme colors with their tonal variations for consistent branding.</p>

        <div class="color-system">
            <div class="color-column">
                <div class="color-block" style="background-color:#000;"></div>
                <div class="color-block" style="background-color:#1a1a1a;"></div>
                <div class="color-block" style="background-color:#333;"></div>
                <p class="color-codes">#000 — #1a1a1a — #333</p>
                <p class="color-label">Black <span class="color-role">(Primary)</span></p>
            </div>

            <div class="color-column">
                <div class="color-block" style="background-color:#b99628;"></div>
                <div class="color-block" style="background-color:#f5c518;"></div>
                <div class="color-block" style="background-color:#ffea80;"></div>
                <p class="color-codes">#b99628 — #f5c518 — #ffea80</p>
                <p class="color-label">Gold <span class="color-role">(Accent)</span></p>
            </div>

            <div class="color-column">
                <div class="color-block" style="background-color:#f2f2f2;"></div>
                <div class="color-block" style="background-color:#ffffff;"></div>
                <div class="color-block" style="background-color:#fafafa;"></div>
                <p class="color-codes">#f2f2f2 — #ffffff — #fafafa</p>
                <p class="color-label">White <span class="color-role">(Background)</span></p>
            </div>
        </div>
    </section>

    <!-- TYPOGRAPHY -->
    <section>
        <h2>Typography</h2>
        <div class="typography">
            <div>
                <p class="heading-font">Heading Font — Poppins Bold Example</p>
            </div>
            <div>
                <p class="body-font">Body Font — Poppins Regular. The AceFit brand communicates energy and focus with a clean, athletic style. Strong headings contrast with balanced, readable text for a professional sports identity.</p>
            </div>
        </div>
    </section>

    <!-- BUTTONS -->
    <section>
        <h2>Buttons</h2>
        <div class="button-set light">
            <div class="btn-group">
                <button class="btn primary">Primary</button>
                <button class="btn secondary">Secondary</button>
                <button class="btn border">Border</button>
                <button class="btn disabled" disabled>Disabled</button>
            </div>

            <div class="dark-mode">
                <div class="btn-group">
                    <button class="btn primary">Primary</button>
                    <button class="btn secondary">Secondary</button>
                    <button class="btn border">Border</button>
                    <button class="btn disabled" disabled>Disabled</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CARDS -->
    <section>
        <h2>Card Samples</h2>
        <div class="cards">
            <div class="card">
                <h3>Elite Volleyball Gear</h3>
                <p>Professional-grade apparel and equipment designed for performance and comfort.</p>
                <a href="#">Read more</a>
            </div>

            <div class="card">
                <h3>Training Support</h3>
                <p>Access personalized training plans, drills, and expert advice to boost your game.</p>
                <a href="#">Read more</a>
            </div>

            <div class="card">
                <h3>Community Spirit</h3>
                <p>Join a passionate community of volleyball enthusiasts and share your journey.</p>
                <a href="#">Read more</a>
            </div>
        </div>
    </section>

    <!-- LOGOS -->
    <section>
        <h2>Logos</h2>
        <div class="logos">
            <!-- Circle Logo -->
            <div class="logo-box">
                <div class="circle-logo">
                    <img src="assets/logo.png" alt="Circle Logo">
                </div>
                <p class="logo-label">AceFit Volleyball — Circle</p>
            </div>

            <!-- Square Logo -->
            <div class="logo-box">
                <div class="square-logo">
                    <img src="assets/logo.png" alt="Square Logo">
                </div>
                <p class="logo-label">AceFit Volleyball — Square</p>
            </div>
        </div>

        <div style="text-align:center;">
            <a href="/" class="back-btn">← Home</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        &copy; 2025 AceFit Volleyball | All Rights Reserved.
    </footer>
</body>

</html>