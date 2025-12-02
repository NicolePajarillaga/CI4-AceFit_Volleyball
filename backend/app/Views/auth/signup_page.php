<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | AceFit Volleyball</title>

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

        .signup-section {
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

        .signup-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .signup-box {
            z-index: 2;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
        }

        .signup-box h2 {
            margin-bottom: 25px;
            color: #222;
        }

        .input-group {
            margin-bottom: 18px;
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

        .signup-btn {
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

        .signup-btn:hover {
            background-color: #222;
            color: white;
        }

        .signup-box p {
            margin-top: 15px;
            font-size: 14px;
            color: #333;
        }

        .signup-box a {
            color: #f5c518;
            text-decoration: none;
            font-weight: 600;
        }

        .signup-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Back Button -->
    <?= view('components/buttons/home.php') ?>

    <section class="signup-section">
        <div class="signup-box">
            <h2>Create an AceFit Account</h2>

            <form action="/signup" method="POST">
                <?= csrf_field() ?>

                <div class="input-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>

                <div class="input-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="input-group">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" id="password_confirm" name="password_confirm" required>
                </div>

                <button type="submit" class="signup-btn">Sign Up</button>
            </form>


            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </section>

    <?= view('components/footer.php') ?>

</body>

</html>