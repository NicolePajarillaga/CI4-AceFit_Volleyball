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
    </style>
</head>

<body>
    <?= view('components/header.php') ?>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h2>Welcome to AceFit Volleyball</h2>
                <p>Your ultimate destination for volleyball excellence where players, teams, and fans come together.
                    Explore our premium gear and elevate your game like never before.</p>
            </div>
        </section>
    </main>
    <?= view('components/cta.php') ?>
    <?= view('components/cards/landingcards.php') ?>
    <?= view('components/footer.php') ?>

</body>

</html>