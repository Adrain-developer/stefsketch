<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogSubcategory $blogSubcategory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Blog Subcategory'), ['action' => 'edit', $blogSubcategory->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Blog Subcategory'), ['action' => 'delete', $blogSubcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogSubcategory->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Blog Subcategories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Blog Subcategory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blogSubcategories view content">
            <h3><?= h($blogSubcategory->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($blogSubcategory->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($blogSubcategory->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($blogSubcategory->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($blogSubcategory->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Blog Posts') ?></h4>
                <?php if (!empty($blogSubcategory->blog_posts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Blog Author Id') ?></th>
                            <th><?= __('Event Type Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Subtitle') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('Banner') ?></th>
                            <th><?= __('Gallery') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Blog Category Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($blogSubcategory->blog_posts as $blogPosts) : ?>
                        <tr>
                            <td><?= h($blogPosts->id) ?></td>
                            <td><?= h($blogPosts->blog_author_id) ?></td>
                            <td><?= h($blogPosts->event_type_id) ?></td>
                            <td><?= h($blogPosts->title) ?></td>
                            <td><?= h($blogPosts->subtitle) ?></td>
                            <td><?= h($blogPosts->slug) ?></td>
                            <td><?= h($blogPosts->body) ?></td>
                            <td><?= h($blogPosts->banner) ?></td>
                            <td><?= h($blogPosts->gallery) ?></td>
                            <td><?= h($blogPosts->created) ?></td>
                            <td><?= h($blogPosts->modified) ?></td>
                            <td><?= h($blogPosts->blog_category_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'BlogPosts', 'action' => 'view', $blogPosts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'BlogPosts', 'action' => 'edit', $blogPosts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'BlogPosts', 'action' => 'delete', $blogPosts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPosts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
