<h1>Autores del Blog</h1>
<?= $this->Html->link('Nuevo Autor', ['action' => 'add']) ?>
<table>
<thead><tr><th>Nombre</th><th>Acciones</th></tr></thead>
<tbody>
<?php foreach ($blogAuthors as $author): ?>
<tr>
    <td><?= h($author->name) ?></td>
    <td>
        <?= $this->Html->link('Ver', ['action' => 'view', $author->id]) ?>
        <?= $this->Html->link('Editar', ['action' => 'edit', $author->id]) ?>
        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $author->id], ['confirm' => '¿Estás seguro?']) ?>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
