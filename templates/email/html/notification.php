<?php
/** @var \App\Model\Entity\User $user */
/** @var \App\Model\Entity\Notification $notification */
/** @var string|null $url */
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?= h($notification->title) ?></title>
</head>
<body style="font-family: Arial, sans-serif; color:#333; line-height:1.4;">
  <div style="max-width:600px; margin:0 auto; padding:20px;">
    <h2><?= h($notification->title) ?></h2>
    <?php if (!empty($notification->body)): ?>
      <p><?= nl2br(h($notification->body)) ?></p>
    <?php endif; ?>

    <?php if (!empty($url)): ?>
      <p style="text-align:center; margin-top:24px;">
        <a href="<?= h($url) ?>" style="display:inline-block; padding:10px 18px; background:#2d6cdf; color:#fff; text-decoration:none; border-radius:6px;">Ver en el sitio</a>
      </p>
    <?php endif; ?>

    <hr style="border:none; border-top:1px solid #eee; margin-top:18px;" />
    <p style="font-size:12px; color:#888;">Si no quieres recibir estos correos puedes <a href="<?= $this->Url->build(['controller'=>'Users','action'=>'notificationPreferences'], true) ?>">cambiar tus preferencias</a>.</p>
  </div>
</body>
</html>
