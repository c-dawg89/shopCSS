<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ihr Besen Shop - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start; /* Ändert das Zentrieren des Inhalts, um ihn höher zu platzieren */
        }

        .header-container {
            text-align: center;
			margin-top: 30px;
            margin-bottom: 20px; /* Reduzierter Abstand, um den Header höher zu platzieren */
        }

        .header-title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header-subtitle {
            font-size: 1.2rem;
            color: #ddd;
            margin-top: -10px;
            letter-spacing: 2px;
        }

        .login-container {
            width: 100%;
            max-width: 500px;
            padding: 2rem;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-top: 10px; /* Geringerer Abstand nach oben für die Login-Container */
        }

        .header-image {
            width: 100%;
            height: auto;
            margin-bottom: -20px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            overflow: hidden;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            border-radius: 30px;
        }

        .text-center {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <!-- Fancy Header -->
    <div class="header-container">
        <h1 class="header-title">Liquor Shop</h1>
        <p class="header-subtitle">Exquisite Spirits & Fine Wines</p>
    </div>

    <!-- Fancy Header Image -->
    <div class="header-image">
        <img src="shopCSS/bilder/bild.jpg" alt="Liquor Shop" class="img-fluid">
    </div>

    <div class="login-container">
        <h3 class="text-center">Admin Login</h3>
        <form action="check_admin.php" method="post">
            <div class="form-group">
                <label for="admin-email">E-Mail</label>
                <input type="email" name="abn" class="form-control" id="admin-email" placeholder="E-Mail eingeben">
            </div>
            <div class="form-group">
                <label for="admin-password">Passwort</label>
                <input type="password" name="apw" class="form-control" id="admin-password" placeholder="Passwort eingeben">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Anmelden</button>
        </form>
    </div>

    <div class="login-container mt-4">
        <h3 class="text-center">Kunden Login</h3>
        <form action="check_kunde.php" method="post">
            <div class="form-group">
                <label for="customer-email">E-Mail</label>
                <input type="email" name="kbn" class="form-control" id="customer-email" placeholder="E-Mail eingeben">
            </div>
            <div class="form-group">
                <label for="customer-password">Passwort</label>
                <input type="password" name="kpw" class="form-control" id="customer-password" placeholder="Passwort eingeben">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Anmelden</button>
        </form>
        <p class="text-center mt-3">
            <a href="Register.php">Hier Registrieren</a>
        </p>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
