<h2>Subcategorías de: <?= h($category->name) ?></h2>

<?php if (!empty($category->blog_subcategories)): ?>
    <ul>
        <?php foreach ($category->blog_subcategories as $subcat): ?>
            <li><?= h($subcat->name) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No hay subcategorías relacionadas.</p>
<?php endif; ?>
