<div class="main-content">
    <div class="container-categories" style="text-align: center; max-width: 600px;">
        <h2 class="title" style="font-size: 36px;"><?= h($eventType->name) ?></h2>
        
        <!--<div style="margin-top: 30px; background: rgba(0,0,0,0.2); padding: 20px; border-radius: 16px; color: rgba(255,255,255,0.8); font-size: 16px; line-height: 2;">
            <p style="margin-bottom: 10px;"><strong>ID del Tipo:</strong> <?= $eventType->id ?></p>
            <p style="margin-bottom: 10px;"><strong>Fecha de Creación:</strong> <?= h($eventType->created) ?></p>
            <p style="margin-bottom: 0;"><strong>Última Modificación:</strong> <?= h($eventType->modified) ?></p>
        </div>-->
        
        <div style="margin-top: 40px; display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $eventType->id], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $eventType->id], [
                'confirm' => '¿Estás segura de eliminar este tipo de evento?', 
                'class' => 'btn btn-danger',
                'style' => 'background: #fc8181 !important; color: #000 !important; border:none;'
            ]) ?>
        </div>
    </div>
</div>