<div class="glass-card">
    <h2><?= $this->fetch('title') ?></h2>
    <?= $this->Form->create($eventType) ?>
    <fieldset>
        <legend><?= __('Información del Tipo de Evento') ?></legend>
        <?= $this->Form->control('name') ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), ['class' => 'neu-button']) ?>
    <?= $this->Form->end() ?>
</div>
