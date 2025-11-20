<style>
    #items {
        background-color: #f9f9f9;
        padding: 100px 40px;
        text-align: center;
    }

    #items h2 {
        font-size: 36px;
        margin-bottom: 50px;
        color: #222;
        position: relative;
        display: inline-block;
    }

    #items h2::after {
        content: '';
        position: absolute;
        width: 60%;
        height: 3px;
        background-color: #f5c518;
        bottom: -10px;
        left: 20%;
    }

    .item-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 40px;
    }

    .item-card {
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 300px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .item-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .item-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .item-info {
        padding: 20px;
    }

    .item-info h3 {
        font-size: 22px;
        margin-bottom: 10px;
        color: #111;
    }

    .item-info p {
        font-size: 15px;
        color: #666;
        margin-bottom: 15px;
    }

    .item-info .price {
        font-weight: bold;
        color: #f5c518;
        font-size: 18px;
    }

    .item-info a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 15px;
        background-color: #f5c518;
        color: black;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .item-info a:hover {
        background-color: #111;
        color: #fff;
    }
</style>

<section id="items">
    <h2>Our Featured Items</h2>
    <div class="item-container">
        <div class="item-card">
            <img src="https://i.pinimg.com/1200x/3b/7c/91/3b7c91f5dd97299959a93c96556b56eb.jpg" alt="Volleyball Shoes">
            <div class="item-info">
                <h3>Volleyball Shoes</h3>
                <p>Engineered for speed and stability. Lightweight with maximum traction for every jump and dive.</p>
                <p class="price">₱7,999</p>
            </div>
        </div>

        <div class="item-card">
            <img src="https://i.pinimg.com/736x/2e/5f/d8/2e5fd83a30c9918b5a5230735a844a83.jpg" alt="Apparel">
            <div class="item-info">
                <h3>Volleyball Apparel</h3>
                <p>Premium breathable fabric designed for comfort, confidence, and performance on the court.</p>
                <p class="price">₱1,299</p>
            </div>
        </div>

        <div class="item-card">
            <img src="https://i.pinimg.com/1200x/c7/a3/3d/c7a33da0a0596482169f01d3c5e5dfdc.jpg" alt="Equipment">
            <div class="item-info">
                <h3>Volleyball Equipment</h3>
                <p>Professional-grade volleyballs and accessories built for training and tournaments.</p>
                <p class="price">₱999</p>
            </div>
        </div>
    </div>
</section>