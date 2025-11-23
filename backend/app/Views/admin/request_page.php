<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceFit Volleyball | Requests</title>
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

        .status-pill {
            padding: 3px 7px;
            border-radius: 999px;
            font-size: 11px;
        }

        .status-new {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .status-inprogress {
            background: #fef9c3;
            color: #854d0e;
        }

        .status-done {
            background: #dcfce7;
            color: #166534;
        }

        .request-note {
            font-size: 13px;
            color: #555;
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
                <a href="accounts.php">Accounts</a>
                <a href="services.php">Services</a>
                <a href="#" class="active">Request</a>
            </nav>
        </aside>

        <!-- MAIN -->
        <main>
            <div class="topbar">
                <div class="topbar-title">Requests</div>
                <div class="topbar-sub">View and manage customer or team requests for AceFit services and products.</div>
            </div>

            <div class="card">
                <div class="section-title">Recent Requests</div>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Request ID</th>
                                <th>Customer</th>
                                <th>Type</th>
                                <th>Details</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RQ-001</td>
                                <td>Team Titans</td>
                                <td>Custom Jersey</td>
                                <td>Update jersey numbers for 2 players.</td>
                                <td><span class="status-pill status-new">New</span></td>
                            </tr>
                            <tr>
                                <td>RQ-002</td>
                                <td>Lara Cruz</td>
                                <td>Size Change</td>
                                <td>Exchange volleyball shoes from size 7 to 7.5.</td>
                                <td><span class="status-pill status-inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>RQ-003</td>
                                <td>Coach Nam</td>
                                <td>Bulk Order</td>
                                <td>Request for quotation: 10 training balls + 2 nets.</td>
                                <td><span class="status-pill status-done">Done</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <p class="request-note">
                    This section can later be connected to a form or database where customers submit actual requests
                    from your main AceFit website.
                </p>
            </div>
        </main>
    </div>

</body>

</html>