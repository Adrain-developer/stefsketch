<div class="glass-card">
    <h2>Tipos de Evento</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Creado</th>
                <th>Modificado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventTypes as $eventType): ?>
            <tr>
                <td><?= h($eventType->name) ?></td>
                <td><?= h($eventType->created) ?></td>
                <td><?= h($eventType->modified) ?></td>
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $eventType->id], ['class' => 'neu-button']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $eventType->id], ['class' => 'neu-button']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $eventType->id], [
                        'confirm' => '¿Estás segura de eliminar este tipo de evento?',
                        'class' => 'neu-button'
                    ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Html->link('Agregar nuevo tipo de evento', ['action' => 'add'], ['class' => 'neu-button']) ?>
</div>
