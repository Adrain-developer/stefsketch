<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogSubcategory $blogSubcategory
 * @var \Cake\Collection\CollectionInterface|string[] $blogPosts
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Blog Subcategories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blogSubcategories form content">
            <?= $this->Form->create($blogSubcategory) ?>
            <fieldset>
                <legend><?= __('Add Blog Subcategory') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
                <?= $this->Form->control('blog_category_id', [
                    'label' => 'Categoría',
                    'options' => $blogCategories,
                    'empty' => 'Selecciona una categoría'
                ]) ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
