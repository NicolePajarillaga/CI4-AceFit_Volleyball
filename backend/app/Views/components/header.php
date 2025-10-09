<header class="header">
    <div class="logo">
        <h1>AceFit Volleyball</h1>
    </div>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/moodboard">Mood Board</a></li>
            <li><a href="/roadmap">Road Map</a></li>
            <li class="login-item">
                <a href="/login" class="btn">Login</a>
            </li>
        </ul>
    </nav>
</header>

<style>
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 120px;
        background-color: #222;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 40px;
        box-sizing: border-box;
        z-index: 1000;
        border-bottom: 4px solid #f5c518;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .header .logo h1 {
        font-size: 26px;
        letter-spacing: 1px;
        margin: 0;
    }

    .header nav ul {
        list-style: none;
        display: flex;
        align-items: center;
        gap: 25px;
        margin: 0;
        padding: 0;
        flex-wrap: wrap;
    }

    .header nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        padding: 8px 10px;
        transition: 0.3s ease;
        white-space: nowrap;
    }

    .header nav ul li a:hover {
        color: #f5c518;
        transform: scale(1.05);
    }

    /* Gold Theme Button */
    .btn {
        background-color: #f5c518;
        color: black;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s ease;
        display: inline-block;
        border: 2px solid transparent;
    }

    .btn:hover {
        background-color: #fff;
        color: #222;
        border-color: #f5c518;
        transform: scale(1.05);
    }

    .login-item {
        margin-left: 10px;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .header {
            flex-direction: column;
            height: auto;
            padding: 20px;
        }

        .header nav ul {
            justify-content: center;
            gap: 15px;
        }

        .header .logo h1 {
            margin-bottom: 10px;
            text-align: center;
        }
    }
</style>