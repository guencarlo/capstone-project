<section class="menu-section" id="menu">
    <h2 class="section-title">AUTOMOTIVE</h2>
    <div class="section-content">
        <ul class="menu-list">
            <li class="menu-item">
                <img src="picture/one.jpg" alt="Hot Beverages" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">Rhein Auto Services</h3>
                    <p class="description">Expert car maintenance and repair services.</p>
                    <p class="contact">Phone: +123 456 7890</p>
                    <p class="text">
                        <a href="https://www.facebook.com/Mranyhaw" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                        </a>
                    </p>
                </div>
            </li>
            <li class="menu-item">
                <img src="picture/two.jpg" alt="Car Repair" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">AutoFix Garage</h3>
                    <p class="description">Reliable car repair and diagnostics.</p>
                    <p class="contact">Phone: +987 654 3210</p>
                    <p class="text">
                        <a href="https://www.facebook.com/AutoFixGarage" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                        </a>
                    </p>
                </div>
            </li>
            <li class="menu-item">
                <img src="picture/three.jpg" alt="Car Wash" class="menu-image" />
                <div class="menu-details">
                    <h3 class="name">Shiny Car Wash</h3>
                    <p class="description">Premium car wash and detailing services.</p>
                    <p class="contact">Phone: +456 789 1234</p>
                    <p class="text">
                        <a href="https://www.facebook.com/ShinyCarWash" target="_blank" rel="noopener noreferrer">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" width="30" height="30">
                        </a>
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <div class="back-button-container">
        <button onclick="window.location.href='front.php'" class="back-button">Back</button>
    </div>
</section>

<style>
    .menu-section {
        text-align: center;
        padding: 20px;
        background-color: #f9f9f9;
    }

    .menu-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .menu-item {
        margin: 15px;
        text-align: center;
        width: 200px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .menu-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .menu-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .menu-details {
        padding: 15px;
    }

    .name {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .description {
        font-size: 14px;
        color: #555;
        margin-bottom: 10px;
    }

    .contact {
        font-size: 14px;
        color: #333;
        margin-bottom: 10px;
    }

    .text img {
        margin-top: 5px;
        transition: transform 0.3s;
    }

    .text img:hover {
        transform: scale(1.1);
    }

    .back-button-container {
        margin-top: 20px;
    }

    .back-button {
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .back-button:hover {
        background-color: #0056b3;
    }
</style>
