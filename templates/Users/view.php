<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users view content">
    <h3><?= h($user->email) ?></h3>
    <table>
        <tr>
            <th>ID</th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th>Rol</th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th>Blog Author</th>
            <td><?= $user->has('blog_author') ? $this->Html->link($user->blog_author->name ?? 'Ver', ['controller' => 'BlogAuthors', 'action' => 'view', $user->blog_author->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Creado</th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th>Modificado</th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="actions">
        <?= $this->Html->link('Editar Usuario', ['action' => 'edit', $user->id]) ?>
        <?= $this->Form->postLink('Eliminar Usuario', ['action' => 'delete', $user->id], ['confirm' => '¿Estás seguro?']) ?>
        <?= $this->Html->link('Volver al listado', ['action' => 'index']) ?>
    </div>
</div>
