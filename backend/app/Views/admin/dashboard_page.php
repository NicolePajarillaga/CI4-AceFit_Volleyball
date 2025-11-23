<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceFit Volleyball | Admin Dashboard</title>
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
            /* BLACK */
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
            /* YELLOW */
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
            /* YELLOW */
            color: #111111;
            /* BLACK TEXT */
        }

        /* MAIN */
        main {
            flex: 1;
            padding: 20px 24px 30px;
            background-color: #f9f9f9;
            /* LIGHT WHITE */
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

        /* STATS */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
            margin-bottom: 22px;
        }

        .card {
            background: #ffffff;
            border-radius: 10px;
            padding: 14px 16px;
            border: 1px solid #e5e5e5;
        }

        .card-title {
            font-size: 12px;
            color: #555;
        }

        .card-value {
            font-size: 22px;
            font-weight: 600;
            margin-top: 3px;
            color: #111111;
        }

        .card-tag {
            font-size: 11px;
            margin-top: 6px;
            background: #facc15;
            /* YELLOW */
            padding: 3px 7px;
            border-radius: 999px;
            color: #111111;
            display: inline-block;
        }

        /* CONTENT GRID */
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 16px;
        }

        .section-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        /* TABLE */
        .table-wrapper {
            max-height: 260px;
            overflow-y: auto;
        }

        th {
            background: #facc15;
            /* YELLOW */
            color: #111111;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        th,
        td {
            padding: 8px 10px;
            border-bottom: 1px solid #ddd;
        }

        .status-pill {
            padding: 3px 7px;
            border-radius: 999px;
            font-size: 11px;
        }

        .paid {
            background: #dcfce7;
            color: #166534;
        }

        .pending {
            background: #fef9c3;
            color: #854d0e;
        }

        /* QUICK ACTIONS */
        .quick-actions {
            display: grid;
            gap: 8px;
        }

        .qa-item {
            border-radius: 10px;
            padding: 10px 12px;
            background: #ffffff;
            border: 1px dashed #000000;
            cursor: pointer;
        }

        .qa-item:hover {
            border: 1px solid #facc15;
            /* YELLOW */
        }

        .tagline-box {
            margin-top: 12px;
            background: #facc15;
            /* YELLOW */
            padding: 12px;
            color: #111111;
            border-radius: 10px;
        }

        .tagline-title {
            font-weight: 600;
            margin-bottom: 4px;
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

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {
            .stats-grid {
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
                <a href="#" class="active">Accounts</a>
                <a href="#">Services</a>
                <a href="#">Request</a>
            </nav>
        </aside>

        <!-- MAIN -->
        <main>

            <!-- TOPBAR -->
            <div class="topbar">
                <div class="topbar-title">Dashboard</div>
                <div class="topbar-sub">Overview of AceFit’s volleyball apparel and equipment shop.</div>
            </div>

            <!-- CONTENT OR STATS -->
            <div class="card" style="padding: 20px; text-align:center;">
                <h2 style="font-size: 20px; font-weight:600; margin-bottom:6px;">Welcome to AceFit Dashboard</h2>
                <p style="font-size: 13px; color:#555;">
                    Select a section on the left sidebar to manage Accounts, Services, or Requests.
                </p>
            </div>

        </main>
    </div>

</body>

</html>