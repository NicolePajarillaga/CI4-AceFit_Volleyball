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
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2.5rem 1.5rem;
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

        /* Footer */
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 1rem 0;
            border-top: 4px solid #f5c518;
            margin-top: 2.5rem;
        }

        footer .highlight {
            color: #f5c518;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Include main site header -->

        <!-- Page Title -->
        <div class="page-title">
            <h1>AceFit Volleyball Roadmap</h1>
            <p>A visual overview of AceFit Volleyball’s system features and milestones.</p>
        </div>

        <!-- Cards -->
        <div class="cards">

            <!-- User Management -->
            <div class="card">
                <div class="card-header">
                    <h2>User Management</h2>
                    <span class="badge bg-gold" style="color:#222;">In Progress</span>
                </div>
                <p>Manage user accounts for clients and employees, including registration, role updates, and access control.</p>
                <p class="priority">Priority: High</p>
            </div>

            <!-- Services Management -->
            <div class="card">
                <div class="card-header">
                    <h2>Services & Shop Management</h2>
                    <span class="badge bg-gold" style="color:#222;">Planned</span>
                </div>
                <p>Add and manage shop items such as shoes, apparel, and volleyball equipment. Update stock, pricing, and descriptions.</p>
                <p class="priority">Priority: Medium</p>
            </div>

            <!-- Request Handling -->
            <div class="card">
                <div class="card-header">
                    <h2>Request System</h2>
                    <span class="badge bg-gold" style="color:#222;">Backlog</span>
                </div>
                <p>Allow users to submit return or exchange requests for purchased items. Admins can manage and update these requests.</p>
                <p class="priority">Priority: Low</p>
            </div>

            <!-- Training Schedule -->
            <div class="card">
                <div class="card-header">
                    <h2>Training Schedule Management</h2>
                    <span class="badge bg-gold" style="color:#222;">Planned</span>
                </div>
                <p>Schedule and organize volleyball training sessions, with role-based visibility for clients and staff.</p>
                <p class="priority">Priority: Medium</p>
            </div>

            <!-- Feedback & Community -->
            <div class="card">
                <div class="card-header">
                    <h2>Feedback & Community</h2>
                    <span class="badge bg-gold" style="color:#222;">In Progress</span>
                </div>
                <p>Introduce feedback and discussion features to engage clients and improve the AceFit experience.</p>
                <p class="priority">Priority: High</p>
            </div>

        </div>

        <!-- Divider -->
        <div class="divider"></div>

        <!-- Completed Section -->
        <h2 style="font-weight:700; font-size:1.5rem; margin-bottom:1.25rem;">Completed</h2>

        <div class="card">
            <div class="card-header">
                <h2>System Setup</h2>
                <span class="badge bg-gold" style="color:#222;">Done</span>
            </div>
            <p>Initial setup of the AceFit Volleyball system with Login and Signup Account.</p>
            <p class="priority">Priority: High</p>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        © 2025 <span class="highlight">AceFit Volleyball</span>. All Rights Reserved.
    </footer>
</body>

</html>