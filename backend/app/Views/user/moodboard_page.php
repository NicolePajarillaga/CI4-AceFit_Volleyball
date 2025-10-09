<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodboard: AceFit Volleyball</title>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-x: hidden;
            background-color: #fff;
            color: #222;
            font-family: "Poppins", sans-serif;
            scroll-behavior: smooth;
        }

        /* ✅ Ensures content starts below fixed header */
        main {
            display: block;
            margin-top: 140px;
            /* header height (120px) + border + shadow spacing */
            padding: 0 40px;
            box-sizing: border-box;
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

        /* Color System */
        .color-system {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            background: rgba(0, 0, 0, 0.03);
            border-radius: 12px;
            padding: 40px 20px;
            margin-bottom: 60px;
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

        /* Typography */
        .typography {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
            margin-bottom: 60px;
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

        /* Logos */
        .logos {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            margin-bottom: 60px;
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
    </style>
</head>

<body>
    <?= view('components/header.php') ?>

    <main>
        <section>
            <h2>Color System</h2>
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

        <!-- Typography -->
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

        <!-- Buttons Fragment -->
        <?= view('components/buttons/moodboard.php') ?>

        <!-- Cards Fragment -->
        <?= view('components/cards/moodboardcards.php') ?>

        <!-- Logos -->
        <section>
            <h2>Logos</h2>
            <div class="logos">
                <div class="logo-box">
                    <div class="circle-logo"><img src="assets/logo.png" alt="Circle Logo"></div>
                    <p class="logo-label">AceFit Volleyball — Circle</p>
                </div>
                <div class="logo-box">
                    <div class="square-logo"><img src="assets/logo.png" alt="Square Logo"></div>
                    <p class="logo-label">AceFit Volleyball — Square</p>
                </div>
            </div>
        </section>
    </main>

    <?= view('components/footer.php') ?>
</body>

</html>