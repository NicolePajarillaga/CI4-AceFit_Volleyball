<section>
    <style>
        .button-set {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .light .primary {
            background: #f5c518;
            color: #222;
        }

        .light .secondary {
            background: #222;
            color: #fff;
        }

        .light .border {
            background: transparent;
            border: 2px solid #f5c518;
            color: #f5c518;
        }

        .light .disabled {
            background: #ccc;
            color: #777;
            cursor: not-allowed;
        }

        .dark-mode {
            background: #222;
            padding: 25px;
            border-radius: 10px;
            width: fit-content;
        }

        .dark-mode .btn {
            border: none;
        }

        .dark-mode .primary {
            background: #f5c518;
            color: #222;
        }

        .dark-mode .secondary {
            background: #000;
            color: #fff;
        }

        .dark-mode .border {
            background: transparent;
            border: 2px solid #f5c518;
            color: #f5c518;
        }

        .dark-mode .disabled {
            background: #444;
            color: #aaa;
        }
    </style>

    <h2>Buttons</h2>
    <div class="button-set light">
        <div class="btn-group">
            <button class="btn primary">Primary</button>
            <button class="btn secondary">Secondary</button>
            <button class="btn border">Border</button>
            <button class="btn disabled" disabled>Disabled</button>
        </div>

        <div class="dark-mode">
            <div class="btn-group">
                <button class="btn primary">Primary</button>
                <button class="btn secondary">Secondary</button>
                <button class="btn border">Border</button>
                <button class="btn disabled" disabled>Disabled</button>
            </div>
        </div>
    </div>
</section>