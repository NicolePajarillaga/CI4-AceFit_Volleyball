<?php
$session = session();

// Redirect if NOT logged in
if (! $session->has('user')) {
    return redirect()->to('/login');
}

// Redirect if NOT ADMIN
if ($session->get('user')['type'] !== 'admin') {
    return redirect()->to('/');
}
?>

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
            padding: 20px;
            border: 1px solid #e5e5e5;
            text-align: center;
        }

        /* LOGOUT BUTTON */
        .logout-btn {
            display: block;
            width: 100%;
            margin-top: 15px;
            padding: 10px 0;
            background: #facc15;
            color: #111111;
            border-radius: 6px;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
        }

        .logout-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <div class="layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="brand">Ace<span>Fit</span> Admin</div>

            <nav>
                <a href="/admin/dashboard_page" class="active">Dashboard</a>
                <a href="#">Accounts</a>
                <a href="#">Services</a>
                <a href="#">Request</a>
            </nav>

            <!-- LOGOUT -->
            <a href="/logout" class="logout-btn">Logout</a>
        </aside>

        <!-- MAIN -->
        <main>
            <div class="topbar">
                <div class="topbar-title">Dashboard</div>
                <div class="topbar-sub">Overview of AceFit’s volleyball apparel and equipment shop.</div>
            </div>

            <div class="card">
                <h2 style="font-size: 20px; font-weight:600; margin-bottom:6px;">
                    Welcome to AceFit Dashboard
                </h2>
                <p style="font-size: 13px; color:#555;">
                    Select a section on the left sidebar to manage Accounts, Services, or Requests.
                </p>
            </div>
        </main>

    </div>

</body>

</html>