<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogSubcategory $blogSubcategory
 * @var string[]|\Cake\Collection\CollectionInterface $blogPosts
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blogSubcategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blogSubcategory->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Blog Subcategories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blogSubcategories form content">
            <?= $this->Form->create($blogSubcategory) ?>
            <fieldset>
                <legend><?= __('Edit Blog Subcategory') ?></legend>
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
