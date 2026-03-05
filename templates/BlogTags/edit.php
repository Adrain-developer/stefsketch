<div class="main-content">
    <div class="form-container" style="max-width: 500px;">
        <h2 class="form-title" style="text-align: center;">Editar Etiqueta</h2>
        
        <?= $this->Form->create($blogTag) ?>
        
        <div style="margin-bottom: 25px;">
            <label class="form-label">Nombre de la etiqueta</label>
            <?= $this->Form->control('name', [
                'label' => false,
                'class' => 'form-input'
            ]) ?>
        </div>

        <div style="display: flex; gap: 15px; justify-content: space-between;">
            <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-secondary', 'style' => 'width: 100%; text-align: center;']) ?>
            <?= $this->Form->button('Actualizar', ['class' => 'btn btn-primary', 'style' => 'width: 100%;']) ?>
        </div>
        
        <?= $this->Form->end() ?>
    </div>
</div>