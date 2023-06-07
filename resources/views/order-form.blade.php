<!DOCTYPE html>
<html>
<head>
    <title>Оформление заказа</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body, html {
            padding: 0;
            margin: 0;

            font-family:Figtree, sans-serif;

            width: 100%;
            height: 100%;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            height: 100%;
        }

        .container > *:first-child {
            margin-top: auto;
        }

        .container > *:last-child {
            margin-bottom: auto;
        }

        .header {
            display: block;
            width: 100%;
            text-align: center;
        }

        .content {

        }

        .content label {
            width: 60px;
            display: inline-block;
            margin-right: 8px;
        }

        .content input,
        .content select {
            width: 200px;
            border-radius: 3px;
            padding: 5px;
            margin-bottom: 8px;
            border: 1px solid #aeb3af;
        }

        .content select {
            width: 212px;
        }

        .content button {
            margin-top: 5px;
            background: #3f6fb7;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 20px;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Оформление заказа</h1>
        </div>

        <div class="content">
            <form method="post" action="{{ route('order.store') }}">
                @csrf
                <label for="name">Имя:</label>
                <input type="text" name="name" id="name" required><br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required><br>

                <label for="address">Адрес:</label>
                <input type="text" name="address" id="address" required><br>

                <label for="product_id">Товар:</label>
                <select name="product_id">
                    <option disabled selected>Оберіть товар</option>
                    <option {{ old('product_id') == 1 ? 'selected' : null }} value="1">iPhone 13</option>
                    <option {{ old('product_id') == 2 ? 'selected' : null }} value="2">iPhone 14</option>
                    <option {{ old('product_id') == 3 ? 'selected' : null }} value="3">iPhone 14 Max</option>
                    <option {{ old('product_id') == 4 ? 'selected' : null }} value="4">iPhone 14 Pro</option>
                    <option {{ old('product_id') == 5 ? 'selected' : null }} value="5">iPhone 14 Pro Max</option>
                </select><br>

                <button>Оформить заказ</button>
            </form>
        </div>
    </div>
</body>
</html>
