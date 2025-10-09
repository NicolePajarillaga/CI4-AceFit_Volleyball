<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AceFit Volleyball</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #ffffff;
            color: #333;
            scroll-behavior: smooth;
        }

        /* Back Arrow Button */
        .back-btn {
            position: absolute;
            top: 30px;
            left: 30px;
            background-color: #f5c518;
            color: #222;
            padding: 12px 16px;
            border-radius: 50px;
            font-size: 18px;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            z-index: 3;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
        }

        .back-btn:hover {
            background-color: #222;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
        }

        .back-btn span {
            font-size: 22px;
            line-height: 0;
        }

        /* Login Section */
        .login-section {
            height: 100vh;
            width: 100%;
            background-image: url('volleyball-bg.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Overlay */
        .login-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        /* Login Box */
        .login-box {
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 25px;
            color: #222;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .input-group input:focus {
            border-color: #f5c518;
            outline: none;
            box-shadow: 0 0 4px rgba(245, 197, 24, 0.8);
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #f5c518;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 16px;
            color: #222;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .login-btn:hover {
            background-color: #222;
            color: white;
        }

        .login-box p {
            margin-top: 15px;
            font-size: 14px;
            color: #333;
        }

        .login-box a {
            color: #f5c518;
            text-decoration: none;
            font-weight: 600;
        }

        .login-box a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 15px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Back Button -->
    <a href="/" class="back-btn">
        <span>&larr;</span> Home
    </a>

    <!-- Login Section -->
    <section class="login-section">
        <div class="login-box">
            <h2>Login to AceFit</h2>
            <form action="dashboard.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>

            <p>Don’t have an account? <a href="/signup">Sign up</a></p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 AceFit Volleyball | All Rights Reserved.</p>
    </footer>

</body>

</html>