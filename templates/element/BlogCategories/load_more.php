<?php foreach ($blogCategories as $index => $category): ?>
    <div class="category-card" style="animation-delay: <?= $index * 0.1 ?>s;">
        <h3 class="category-name"><?= h($category->name) ?></h3>
        <div class="category-actions">
            <?= $this->Html->link('Ver', ['action' => 'view', $category->id], ['class' => 'action-btn btn-view']) ?>
            <?= $this->Html->link('Editar', ['action' => 'edit', $category->id], ['class' => 'action-btn btn-edit']) ?>
            <?php if ($currentUser && $currentUser->role === 'admin'): ?>
                <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $category->id], [
                    'class' => 'action-btn btn-delete',
                    'confirm' => '¿Estás seguro de eliminar esta categoría?'
                ]) ?>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>
