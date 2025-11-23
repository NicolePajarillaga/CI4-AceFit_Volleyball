<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceFit Volleyball | Accounts</title>
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
            margin-bottom: 10px;
        }

        .table-wrapper {
            max-height: 320px;
            overflow-y: auto;
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

        th {
            background: #facc15;
            color: #111111;
            position: sticky;
            top: 0;
        }

        .role-pill {
            font-size: 11px;
            padding: 3px 7px;
            border-radius: 999px;
            background: #111111;
            color: #ffffff;
        }

        .role-employee {
            background: #e5e5e5;
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
                <a href="services.php">Services</a>
                <a href="request.php">Request</a>
            </nav>
        </aside>

        <!-- MAIN -->
        <main>
            <div class="topbar">
                <div class="topbar-title">Accounts</div>
                <div class="topbar-sub">Manage admin and staff accounts who handle AceFit operations.</div>
            </div>

            <div class="card">
                <div class="section-title">User Accounts</div>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Account ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>AC-001</td>
                                <td>Juan Dela Cruz</td>
                                <td>juan@acefit.com</td>
                                <td><span class="role-pill">Admin</span></td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>AC-002</td>
                                <td>Maria Santos</td>
                                <td>maria@acefit.com</td>
                                <td><span class="role-pill role-employee">Employee</span></td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>AC-003</td>
                                <td>Rico Reyes</td>
                                <td>rico@acefit.com</td>
                                <td><span class="role-pill role-employee">Employee</span></td>
                                <td>Inactive</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card" style="text-align:center;">
                <p style="font-size:13px; color:#555;">
                    This is a sample layout. You can connect this table to your database later to list real users.
                </p>
            </div>
        </main>
    </div>

</body>

</html>