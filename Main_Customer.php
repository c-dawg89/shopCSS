<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquor Shop - Kundenbereich</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            flex-direction: row;
        }

        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            border-right: 2px solid #ddd;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #1e3c72;
            font-size: 1rem;
            padding: 8px 16px;
            display: block;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #1e3c72;
            color: #fff;
        }

        .content {
            margin-left: 270px;
            padding: 40px;
            color: #fff;
            flex: 1;
        }

        .content h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .product-card {
            background-color: #fff;
            color: #333;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-card .product-info {
            flex: 1;
        }

        .product-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .product-card p {
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .product-card .quantity-input {
            width: 60px;
            margin-right: 10px;
        }

        .product-card .btn {
            background-color: #1e3c72;
            color: #fff;
            border-radius: 30px;
        }

        .product-card .btn:hover {
            background-color: #2a5298;
        }

        .cart-button {
            background-color: #ff9800;
            color: #fff;
            border-radius: 30px;
        }

        .cart-button:hover {
            background-color: #e68900;
        }
    </style>
</head>

<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h2>Kategorien</h2>
        <ul>
            <li><a href="#">Whisky</a></li>
            <li><a href="#">Wein</a></li>
            <li><a href="#">Vodka</a></li>
            <li><a href="#">Rum</a></li>
            <li><a href="#">Gin</a></li>
            <li><a href="#">Liköre</a></li>
            <li><a href="#">Tequila</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Willkommen im Liquor Shop</h1>
        <p>Entdecken Sie unsere Auswahl an exklusiven Spirituosen und Weinen, die speziell für Sie kuratiert wurden.</p>

        <!-- Beispiel Produktkarten -->
        <div class="product-card">
            <div class="product-info">
                <h3>Whisky - Glenfiddich 18 Jahre</h3>
                <p>Ein seltener und feiner Single Malt Scotch Whisky, gereift für 18 Jahre in Eichenfässern.</p>
            </div>
            <div style="display: flex; align-items: center;">
    <input type="number" class="form-control quantity-input" value="1" min="1" max="30" step="1">
    <button class="btn cart-button">In den Warenkorb</button>
</div>

        </div>

        <div class="product-card">
            <div class="product-info">
                <h3>Rotwein - Château Margaux 2015</h3>
                <p>Ein vollmundiger und samtiger Bordeaux-Rotwein mit Noten von schwarzen Früchten und Vanille.</p>
            </div>
            <div style="display: flex; align-items: center;">
    <input type="number" class="form-control quantity-input" value="1" min="1" max="30" step="1">
    <button class="btn cart-button">In den Warenkorb</button>
</div>

        </div>
        
        <!-- Weitere Produkte hier hinzufügen -->
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
