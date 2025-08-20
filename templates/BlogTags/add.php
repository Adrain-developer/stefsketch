<h2>Nueva Etiqueta</h2>
<?= $this->Form->create($blogTag) ?>
<?= $this->Form->control('name', ['label' => 'Nombre de la etiqueta']) ?>
<?= $this->Form->button('Guardar') ?>
<?= $this->Form->end() ?>
