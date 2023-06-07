<?php

namespace App\Http\Controllers;

use App\Events\OrderCreatedEvent;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show()
    {
        return view('order-form');
    }

    public function store(Request $request)
    {
        // Вынести в отдельный FormRequest, но обычно я это делаю после того как функционал работает и рефакторю
        // Для экономии времени для этого ТЗ оставил тут
        $data = $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'address' => ['required', 'string', 'min:10'],
            'product_id' => ['required', 'in:1,2,3,4,5'], // В идеальном варианте отдельная таблица и модель, но тут упрощаем
        ]);

        $order = Order::create([
             'customer_name' => $data['name'],
             'customer_email' => $data['email'],
             'customer_address' => $data['address'],

             'product_id' => $data['product_id'],
        ]);

        OrderCreatedEvent::dispatch($order);

        return redirect()->back()->with('success', 'Заказ успешно оформлен.');
    }
}
