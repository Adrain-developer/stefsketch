<div class="glass-card">
    <h2><?= h($eventType->name) ?></h2>
    <p><strong>Creado:</strong> <?= h($eventType->created) ?></p>
    <p><strong>Modificado:</strong> <?= h($eventType->modified) ?></p>
    <?= $this->Html->link('Editar', ['action' => 'edit', $eventType->id], ['class' => 'neu-button']) ?>
    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $eventType->id], [
        'confirm' => '¿Estás segura de eliminar este tipo de evento?',
        'class' => 'neu-button'
    ]) ?>
    <?= $this->Html->link('Regresar', ['action' => 'index'], ['class' => 'neu-button']) ?>
</div>
