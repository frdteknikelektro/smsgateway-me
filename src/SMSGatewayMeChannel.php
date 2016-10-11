<?php

namespace NotificationChannels\SMSGatewayMe;

use NotificationChannels\SMSGatewayMe\Exceptions\CouldNotSendNotification;
use NotificationChannels\SMSGatewayMe\Events\MessageWasSent;
use NotificationChannels\SMSGatewayMe\Events\SendingMessage;
use Illuminate\Notifications\Notification;

class SMSGatewayMeChannel
{
    public function __construct()
    {
        // Initialisation code here
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\SMSGatewayMe\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
