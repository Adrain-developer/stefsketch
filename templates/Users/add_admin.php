<div class="users form content">
    <h3><?= __('Crear Usuario Administrador') ?></h3>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Nuevo Admin') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
