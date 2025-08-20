<h2>Editar Etiqueta</h2>
<?= $this->Form->create($blogTag) ?>
<?= $this->Form->control('name', ['label' => 'Nombre de la etiqueta']) ?>
<?= $this->Form->button('Actualizar') ?>
<?= $this->Form->end() ?>
