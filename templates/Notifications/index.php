<?= $this->Form->create(null, ['url' => ['action' => 'cleanOrphanNotifications']]) ?>
<?= $this->Form->button('Limpiar notificaciones huérfanas', ['confirm' => '¿Estás seguro? Esta acción no se puede deshacer.']) ?>
<?= $this->Form->end() ?>