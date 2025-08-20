<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\ResultSetInterface $users
 */
?>
<div class="users index content">
    <h3><?= __('Usuarios') ?></h3>
    <!--<?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>-->
    <?= $this->Html->link('➕ Nuevo Autor', ['action' => 'addAuthor'], ['class' => 'button']) ?>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('role') ?></th>
                    <th><?= $this->Paginator->sort('blog_author_id') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->id) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= $user->has('blog_author') ? $this->Html->link($user->blog_author->name ?? 'Ver', ['controller' => 'BlogAuthors', 'action' => 'view', $user->blog_author->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link('Ver', ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $user->id], ['confirm' => '¿Estás seguro?']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('« Primero') ?>
                <?= $this->Paginator->prev('← Anterior') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('Siguiente →') ?>
                <?= $this->Paginator->last('Último »') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} usuarios')) ?></p>
        </div>

    </div>
</div>
