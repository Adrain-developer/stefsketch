<?= $this->Form->create($blogPost) ?>
<fieldset class="glass-card">
    <legend><?= __('Publicar Entrada') ?></legend>
    <?= $this->Form->control('title') ?>
    <?= $this->Form->control('subtitle') ?>
    <?= $this->Form->control('content', ['type' => 'textarea']) ?>
    <?= $this->Form->control('slug') ?>
    <?= $this->Form->control('blog_author_id', ['options' => $blogAuthors]) ?>
    <?= $this->Form->control('event_type_id', ['options' => $eventTypes]) ?>
</fieldset>
<?= $this->Form->button(__('Guardar'), ['class' => 'neu-button']) ?>
<?= $this->Form->end() ?>
