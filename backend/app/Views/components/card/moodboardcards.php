<!-- app/Views/fragments/cards_fragment.php -->
<section>
    <style>
        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 25px;
            width: 260px;
            transition: all 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #f5c518;
            box-shadow: 0 0 15px rgba(245, 197, 24, 0.4);
        }

        .card h3 {
            color: #f5c518;
            margin-bottom: 10px;
        }

        .card p {
            color: #333;
        }

        .card a {
            color: #f5c518;
            text-decoration: none;
            font-weight: 600;
        }

        .card a:hover {
            text-decoration: underline;
        }
    </style>

    <h2>Card Samples</h2>
    <div class="cards">
        <div class="card">
            <h3>Elite Volleyball Gear</h3>
            <p>Professional-grade apparel and equipment designed for performance and comfort.</p>
            <a href="#">Read more</a>
        </div>

        <div class="card">
            <h3>Training Support</h3>
            <p>Access personalized training plans, drills, and expert advice to boost your game.</p>
            <a href="#">Read more</a>
        </div>

        <div class="card">
            <h3>Community Spirit</h3>
            <p>Join a passionate community of volleyball enthusiasts and share your journey.</p>
            <a href="#">Read more</a>
        </div>
    </div>
</section>