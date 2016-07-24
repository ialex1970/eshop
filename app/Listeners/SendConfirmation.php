<?php

namespace App\Listeners;

use App\Events\OrderEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendConfirmation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderEvent  $event
     * @return void
     */
    public function handle(OrderEvent $event)
    {
        $order_message = $event->message;
        Mail::send('email.order-message-confirmation', ['order_message' => $order_message], function ($m) use ($order_message) {
            $m->from('seller@eshop.com', 'Seller');
            $m->to($order_message->user->email, $order_message->user->name);
            $m->subject('Мы получили Ваш заказ');
        } );
    }
}
