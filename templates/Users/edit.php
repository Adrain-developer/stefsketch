<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form content">
    <h3><?= __('Editar Usuario') ?></h3>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Modificar') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password', ['value' => '']); // Deja vacío por seguridad
            echo $this->Form->control('role', ['options' => ['admin' => 'Admin', 'author' => 'Autor', 'visitor' => 'Visitante']]);
            echo $this->Form->control('blog_author_id', ['options' => $blogAuthors]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Actualizar')) ?>
    <?= $this->Form->end() ?>
</div>
