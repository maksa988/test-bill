<?php

namespace App\Listeners;

use App\Events\OrderCreatedEvent;
use App\Jobs\SendMailToCustomerJob;
use App\Jobs\SendMailToManagerJob;

class SendOrderNotificationListener
{
    public function handle(OrderCreatedEvent $event)
    {
        SendMailToManagerJob::dispatch($event->order);
        SendMailToCustomerJob::dispatch($event->order);
    }
}
