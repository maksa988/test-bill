<?php

namespace App\Jobs;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailToManagerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Order $order)
    {
    }

    public function handle()
    {
        Mail::send('emails.order-notification', ['order' => $this->order], function ($message) {
            $message->to(config('emails.manager.to'));
            $message->subject(config('emails.manager.subject'));
            $message->attach(storage_path('app/bill.txt'));
        });
    }
}
