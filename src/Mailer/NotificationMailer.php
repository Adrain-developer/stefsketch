<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\Routing\Router;

class NotificationMailer extends Mailer
{
    public function sendNotification($user, $notification)
    {
        // $user is entity (Users), $notification is entity or array
        $subject = $notification->title ?? 'Notificación';
        $templateVars = [
            'user' => $user,
            'notification' => $notification,
            'url' => isset($notification->url) ? Router::url($notification->url, true) : null
        ];

        $this
            ->setTo($user->email)
            ->setSubject($subject)
            ->setViewVars($templateVars)
            ->setTemplate('notification') // templates/email/html/notification.php
            ->setEmailFormat('html');

        return $this->deliver();
    }
}
