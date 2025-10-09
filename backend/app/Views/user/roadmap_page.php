<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AceFit Volleyball | Roadmap</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Font & body */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            color: #222;
            margin: 0;
            padding: 0;
            /* remove padding here */
        }

        main {
            margin-top: 120px;
            /* space for fixed header */
            padding: 2.5rem 1.5rem;
            box-sizing: border-box;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Page Title */
        .page-title {
            margin-bottom: 2rem;
        }

        .page-title h1 {
            font-weight: 700;
            font-size: 2.25rem;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }

        .page-title p {
            color: #555;
            font-size: 0.875rem;
            margin: 0;
        }

        /* Badge */
        .badge {
            display: inline-block;
            font-weight: 600;
            font-size: 0.75rem;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
        }

        .bg-gold {
            background-color: #f5c518;
        }

        .text-gold {
            color: #f5c518;
        }

        /* Cards */
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 1rem;
            padding: 1.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }

        .card:hover {
            transform: translateY(-0.25rem);
            box-shadow: 0 8px 20px rgba(245, 197, 24, 0.25);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .card p {
            color: #444;
            margin-top: 0.5rem;
        }

        .card p.priority {
            color: #777;
            font-size: 0.75rem;
            font-weight: 500;
            font-style: italic;
            margin-top: 0.75rem;
        }

        /* Divider */
        .divider {
            height: 1px;
            background-color: rgba(245, 197, 24, 0.5);
            margin: 3rem 0;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?= view('components/header.php') ?>

    <!-- Main content -->
    <main>
        <div class="container">
            <div class="page-title">
                <h1>AceFit Volleyball Roadmap</h1>
                <p>A visual overview of AceFit Volleyball’s system features and milestones.</p>
            </div>

            <?= view('components/cards/roadmapcards.php') ?>
        </div>
    </main>


    <!-- Footer -->
    <?= view('components/footer.php') ?>
</body>

</html>