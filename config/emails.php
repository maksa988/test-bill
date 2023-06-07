<?php

return [
    'manager' => [
        'to' => env('MANAGER_EMAIL'),
        'subject' => 'Уведомление о новом заказе',
    ],
    'customer' => [
        'subject' => 'Подтверждение заказа',
    ],
];
