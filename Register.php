<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquor Shop - Registrierung</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .header-container {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 30px;
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

        .registration-container {
            width: 100%;
            max-width: 500px;
            padding: 2rem;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
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

    <!-- Registration Form -->
    <div class="registration-container">
        <h3 class="text-center">Konto erstellen</h3>
        <form action="register_process.php" method="post">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="E-Mail eingeben" required>
            </div>
            <div class="form-group">
                <label for="username">Benutzername</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Benutzername eingeben" required>
            </div>
            <div class="form-group">
                <label for="password">Passwort</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Passwort eingeben" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Passwort bestätigen</label>
                <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="Passwort bestätigen" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrieren</button>
        </form>
        <p class="text-center mt-3">
            Bereits ein Konto? <a href="Startseite.php">Hier Anmelden</a>
        </p>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
