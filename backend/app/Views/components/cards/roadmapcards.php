<!-- components/cards.php -->
<style>
    /* Cards */
    .cards {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 1rem;
        padding: 1.75rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
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

    .card-header h2 {
        margin: 0;
        font-size: 1.25rem;
        font-weight: 600;
        color: #222;
    }

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

    .card p {
        color: #444;
        margin-top: 0.5rem;
        line-height: 1.6;
    }

    .card p.priority {
        color: #777;
        font-size: 0.8rem;
        font-weight: 500;
        font-style: italic;
        margin-top: 0.75rem;
    }
</style>

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

    <!-- Completed Section -->
    <div class="divider" style="height: 1px; background-color: rgba(245,197,24,0.5); margin: 3rem 0;"></div>

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