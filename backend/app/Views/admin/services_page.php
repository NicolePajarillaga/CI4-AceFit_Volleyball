<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceFit Volleyball | Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #ffffff;
            color: #111111;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */
        .sidebar {
            width: 230px;
            background: #111111;
            color: #ffffff;
            padding: 20px 18px;
        }

        .sidebar .brand {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .sidebar .brand span {
            color: #facc15;
        }

        .sidebar nav a {
            display: block;
            color: #f5f5f5;
            text-decoration: none;
            font-size: 14px;
            padding: 10px 12px;
            border-radius: 6px;
            margin-bottom: 6px;
        }

        .sidebar nav a.active,
        .sidebar nav a:hover {
            background: #facc15;
            color: #111111;
        }

        /* MAIN */
        main {
            flex: 1;
            padding: 20px 24px 30px;
            background-color: #f9f9f9;
        }

        .topbar {
            margin-bottom: 22px;
        }

        .topbar-title {
            font-size: 22px;
            font-weight: 600;
            color: #111111;
        }

        .topbar-sub {
            font-size: 13px;
            color: #555;
        }

        .card {
            background: #ffffff;
            border-radius: 10px;
            padding: 16px 18px;
            border: 1px solid #e5e5e5;
            margin-bottom: 18px;
        }

        .section-title {
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
        }

        .service-item {
            border-radius: 10px;
            border: 1px solid #e5e5e5;
            padding: 14px 12px;
            background: #ffffff;
        }

        .service-item h3 {
            font-size: 14px;
            margin-bottom: 6px;
        }

        .service-item p {
            font-size: 12px;
            color: #555;
        }

        .badge {
            display: inline-block;
            font-size: 11px;
            margin-top: 8px;
            padding: 3px 7px;
            border-radius: 999px;
            background: #facc15;
            color: #111111;
        }

        @media (max-width: 900px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                display: flex;
                gap: 10px;
                justify-content: space-between;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="brand">Ace<span>Fit</span> Admin</div>
            <nav>
                <a href="accounts.php">Accounts</a>
                <a href="#" class="active">Services</a>
                <a href="request.php">Request</a>
            </nav>
        </aside>

        <!-- MAIN -->
        <main>
            <div class="topbar">
                <div class="topbar-title">Services</div>
                <div class="topbar-sub">Configure the services offered by AceFit to volleyball players and teams.</div>
            </div>

            <div class="card">
                <div class="section-title">Available Services</div>
                <div class="services-grid">
                    <div class="service-item">
                        <h3>Custom Team Jerseys</h3>
                        <p>Provide full jersey sets with names, numbers, and team logos for volleyball teams.</p>
                        <span class="badge">Team Package</span>
                    </div>

                    <div class="service-item">
                        <h3>Gear Bundles</h3>
                        <p>Curated bundles including shoes, kneepads, and socks for individual players.</p>
                        <span class="badge">Player Bundle</span>
                    </div>

                    <div class="service-item">
                        <h3>Bulk Ball Orders</h3>
                        <p>Discounted rates for official volleyballs for schools, clubs, and training camps.</p>
                        <span class="badge">Bulk</span>
                    </div>

                    <div class="service-item">
                        <h3>Court Equipment Setup</h3>
                        <p>Assistance in setting up nets, antennas, and court markings for events.</p>
                        <span class="badge">Add-on</span>
                    </div>

                    <div class="service-item">
                        <h3>Pre-Order Reservations</h3>
                        <p>Allow customers to reserve upcoming sneaker drops and limited volleyball gear.</p>
                        <span class="badge">Pre-order</span>
                    </div>

                    <div class="service-item">
                        <h3>Team Fitting Session</h3>
                        <p>In-store or on-site fitting for teams to ensure correct shoe and jersey sizes.</p>
                        <span class="badge">In-Person</span>
                    </div>
                </div>
            </div>

            <div class="card" style="text-align:center;">
                <p style="font-size:13px; color:#555;">
                    You can later convert these boxes into dynamic services loaded from your database.
                </p>
            </div>
        </main>
    </div>

</body>

</html>