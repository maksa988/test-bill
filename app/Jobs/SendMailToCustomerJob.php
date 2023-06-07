<?php

namespace App\Jobs;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailToCustomerJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Order $order)
    {
    }

    public function handle()
    {
        Mail::send('emails.order-confirmation', ['order' => $this->order], function ($message) {
            $message->to($this->order->customer_email);
            $message->subject(config('emails.customer.subject'));
            $message->attach(storage_path('app/bill.txt'));
        });
    }
}
