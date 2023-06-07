<!DOCTYPE html>
<html>
<head>
    <title>Уведомление о новом заказе</title>
</head>
<body>
<h1>Уведомление о новом заказе #{{ $order->id }}</h1>
<p>Имя: {{ $order->customer_name }}</p>
<p>Email: {{ $order->customer_email }}</p>
<p>Адрес: {{ $order->customer_address }}</p>
<p>Товар: #{{ $order->product_id }}</p>
</body>
</html>
