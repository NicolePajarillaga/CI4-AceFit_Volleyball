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

    nav {
        display: flex;
        align-items: center;
        gap: 25px;
    }

    nav ul {
        list-style: none;
        display: flex;
        gap: 25px;
        margin-right: 20px;
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

    /* Login Button */
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
</style>

<body>
    <header>
        <div class="logo">
            <h1>AceFit Volleyball</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="/moodboard">Mood Board</a></li>
                <li><a href="/roadmap">Road Map</a></li>
            </ul>
            <!-- Include login button fragment here -->
            <?= view('components/buttons/login_header.php'); ?>
        </nav>
    </header>
</body>