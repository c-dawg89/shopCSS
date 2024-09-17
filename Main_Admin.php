<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquor Shop - Adminbereich</title>
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
            margin-left: 270px; /* Platz für die Sidebar */
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

        .card {
            background-color: #fff;
            color: #333;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .card .btn {
            background-color: #1e3c72;
            color: #fff;
            border-radius: 30px;
            margin-right: 5px;
        }

        .card .btn:hover {
            background-color: #2a5298;
        }
    </style>
</head>

<body>
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <h2>Admin Navigation</h2>
        <ul>
            <li><a href="#">Kategorien verwalten</a></li>
            <li><a href="#">Produkte verwalten</a></li>
            <li><a href="#">Bestellungen</a></li>
            <li><a href="#">Benutzerverwaltung</a></li>
            <li><a href="#">Berichte</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1>Kategorien verwalten</h1>

        <!-- Kategorie Verwaltung -->
        <div class="card">
            <h3>Neue Kategorie hinzufügen</h3>
            <form action="add_category.php" method="post">
                <div class="form-group">
                    <label for="category-name">Kategoriename</label>
                    <input type="text" name="category-name" class="form-control" id="category-name" placeholder="Kategorie eingeben" required>
                </div>
                <button type="submit" class="btn btn-primary">Hinzufügen</button>
            </form>
        </div>

        <div class="card">
            <h3>Bestehende Kategorien</h3>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Whisky
                    <div>
                        <button class="btn btn-warning btn-sm">Bearbeiten</button>
                        <button class="btn btn-danger btn-sm">Löschen</button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Wein
                    <div>
                        <button class="btn btn-warning btn-sm">Bearbeiten</button>
                        <button class="btn btn-danger btn-sm">Löschen</button>
                    </div>
                </li>
                <!-- Weitere Kategorien hier hinzufügen -->
            </ul>
        </div>

        <!-- Produktverwaltung -->
        <h1>Produkte verwalten</h1>
        <div class="card">
            <h3>Neues Produkt hinzufügen</h3>
            <form action="add_product.php" method="post">
                <div class="form-group">
                    <label for="product-name">Produktname</label>
                    <input type="text" name="product-name" class="form-control" id="product-name" placeholder="Produkt eingeben" required>
                </div>
                <div class="form-group">
                    <label for="product-category">Kategorie</label>
                    <select class="form-control" id="product-category" name="product-category">
                        <option>Whisky</option>
                        <option>Wein</option>
                        <option>Vodka</option>
                        <!-- Weitere Optionen hier hinzufügen -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="product-price">Preis</label>
                    <input type="number" name="product-price" class="form-control" id="product-price" placeholder="Preis eingeben" required>
                </div>
                <button type="submit" class="btn btn-primary">Hinzufügen</button>
            </form>
        </div>

        <div class="card">
            <h3>Bestehende Produkte</h3>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Glenfiddich 18 Jahre
                    <div>
                        <button class="btn btn-warning btn-sm">Bearbeiten</button>
                        <button class="btn btn-danger btn-sm">Löschen</button>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Château Margaux 2015
                    <div>
                        <button class="btn btn-warning btn-sm">Bearbeiten</button>
                        <button class="btn btn-danger btn-sm">Löschen</button>
                    </div>
                </li>
                <!-- Weitere Produkte hier hinzufügen -->
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
