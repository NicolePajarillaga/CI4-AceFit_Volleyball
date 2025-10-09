<a href="/" class="home-btn">
    <span>&larr;</span> Home
</a>

<style>
    .home-btn {
        position: absolute;
        top: 30px;
        left: 30px;
        background-color: #f5c518;
        color: #222;
        padding: 12px 20px;
        border-radius: 50px;
        font-size: 18px;
        text-decoration: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
        z-index: 3;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
    }

    .home-btn:hover {
        background-color: #222;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }

    .home-btn span {
        font-size: 22px;
        line-height: 0;
    }
</style>