<?php
$this->assign('title', 'Editar Lead');
?>

<div class="leads-edit">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>✏️ Editar Lead</h1>
        <?= $this->Html->link('← Volver', ['action' => 'view', $lead->id], ['class' => 'btn btn-secondary']) ?>
    </div>

    <div class="glass-card p-4">
        <?= $this->Form->create($lead) ?>
        
        <div class="row">
            <div class="col-md-6">
                <?= $this->Form->control('name', [
                    'label' => 'Nombre',
                    'class' => 'form-control'
                ]) ?>
            </div>
            <div class="col-md-6">
                <?= $this->Form->control('email', [
                    'label' => 'Email',
                    'class' => 'form-control'
                ]) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?= $this->Form->control('phone', [
                    'label' => 'Teléfono',
                    'class' => 'form-control'
                ]) ?>
            </div>
            <div class="col-md-6">
                <?= $this->Form->control('status', [
                    'label' => 'Estado',
                    'type' => 'select',
                    'options' => [
                        'nuevo' => 'Nuevo',
                        'contactado' => 'Contactado', 
                        'convertido' => 'Convertido',
                        'descartado' => 'Descartado'
                    ],
                    'class' => 'form-select'
                ]) ?>
            </div>
        </div>

        <?= $this->Form->control('message', [
            'label' => 'Mensaje',
            'type' => 'textarea',
            'rows' => 5,
            'class' => 'form-control'
        ]) ?>

        <div class="mt-3">
            <?= $this->Form->button('💾 Guardar Cambios', ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link('Cancelar', ['action' => 'view', $lead->id], ['class' => 'btn btn-secondary ms-2']) ?>
        </div>

        <?= $this->Form->end() ?>
    </div>
</div>