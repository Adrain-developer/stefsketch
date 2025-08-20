<h2>Etiquetas del Blog</h2>
<?= $this->Html->link('Nueva etiqueta', ['action' => 'add'], ['class' => 'button']) ?>

<table>
<thead><tr><th>Nombre</th><th>Acciones</th></tr></thead>
<tbody>
<?php foreach ($blogTags as $tag): ?>
<tr>
    <td><?= h($tag->name) ?></td>
    <td>
        <?= $this->Html->link('Ver', ['action' => 'view', $tag->id]) ?> |
        <?= $this->Html->link('Editar', ['action' => 'edit', $tag->id]) ?> |
        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $tag->id], ['confirm' => '¿Seguro?']) ?>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
