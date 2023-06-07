<!DOCTYPE html>
<html>
<head>
    <title>Подтверждение заказа</title>
</head>
<body>
<h1>Подтверждение заказа</h1>
<p>Ваш заказ #{{ $order->id }} успешно оформлен.</p>
<p>Имя: {{ $order->customer_name }}</p>
<p>Email: {{ $order->customer_email }}</p>
<p>Адрес: {{ $order->customer_address }}</p>
<p>Товар: #{{ $order->product_id }}</p>
</body>
</html>
