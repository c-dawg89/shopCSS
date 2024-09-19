<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquor Shop - Warenkorb</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 40px;
        }

        .cart-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 90%;
            max-width: 800px;
        }
        /* zum Test */
        .cart-header {
            font-size: 2rem;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 20px;
        }
        .cart-header {
            font-size: 2rem;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item h4 {
            font-size: 1.2rem;
            margin: 0;
            color: #333;
        }

        .cart-item p {
            margin: 0;
            color: #555;
        }

        .cart-item .quantity-input {
            width: 60px;
            margin-right: 10px;
        }

        .cart-item .remove-button {
            background-color: #ff4d4d;
            color: #fff;
            border-radius: 30px;
            margin-left: 10px;
        }

        .cart-item .remove-button:hover {
            background-color: #e60000;
        }

        .cart-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
        }

        .total-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .checkout-button {
            background-color: #1e3c72;
            color: #fff;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .checkout-button:hover {
            background-color: #2a5298;
        }
    </style>
</head>

<body>
    <!-- Warenkorb Container -->
    <div class="cart-container">
        <h2 class="cart-header">Ihr Warenkorb</h2>

        <!-- Beispiel Warenkorbartikel -->
        <div class="cart-item" data-price="89.99">
            <div>
                <h4>Whisky - Glenfiddich 18 Jahre</h4>
                <p>Preis: 89,99 €</p>
            </div>
            <div style="display: flex; align-items: center;">
                <!-- Mengenfeld -->
                <input type="number" class="form-control quantity-input" value="1" min="1" max="30" step="1" onchange="updateTotal()">
                <button class="btn remove-button">Entfernen</button>
            </div>
        </div>

        <div class="cart-item" data-price="249.99">
            <div>
                <h4>Rotwein - Château Margaux 2015</h4>
                <p>Preis: 249,99 €</p>
            </div>
            <div style="display: flex; align-items: center;">
                <!-- Mengenfeld -->
                <input type="number" class="form-control quantity-input" value="1" min="1" max="30" step="1" onchange="updateTotal()">
                <button class="btn remove-button">Entfernen</button>
            </div>
        </div>

        <!-- Warenkorb Fußbereich -->
        <div class="cart-footer">
            <span class="total-price">Gesamt: <span id="total">339,98</span> €</span>
            <button class="btn checkout-button">Zur Kasse</button>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript zur dynamischen Aktualisierung des Gesamtpreises -->
    <script>
        function updateTotal() {
            let total = 0;
            document.querySelectorAll('.cart-item').forEach(function(item) {
                const price = parseFloat(item.getAttribute('data-price'));
                const quantity = item.querySelector('.quantity-input').value;
                total += price * quantity;
            });
            document.getElementById('total').innerText = total.toFixed(2);
        }
    </script>
</body>

</html>
