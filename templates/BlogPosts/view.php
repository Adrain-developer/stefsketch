<div class="blog-post glass-card">
    <h2><?= h($blogPost->title) ?></h2>
    <?php if ($blogPost->subtitle): ?>
        <h4><?= h($blogPost->subtitle) ?></h4>
    <?php endif; ?>

    <?php if ($blogPost->banner): ?>
        <div class="banner">
            <img src="/img/<?= h($blogPost->banner) ?>" alt="Imagen principal del post" class="responsive-img" />
        </div>
    <?php endif; ?>

    <div class="body">
        <?= $this->Text->autoParagraph(h($blogPost->body)) ?>
    </div>

    <?php if ($blogPost->gallery): ?>
        <div class="gallery">
            <h4>Galería</h4>
            <div class="gallery-grid">
                <?php foreach (json_decode($blogPost->gallery) as $image): ?>
                    <img src="/img/<?= h($image) ?>" alt="Imagen de galería" class="gallery-thumb" />
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

    <p><strong>Autor:</strong> <?= h($blogPost->blog_author->name ?? '') ?></p>
    <p><strong>Tipo de evento:</strong> <?= h($blogPost->event_type->name ?? '') ?></p>
    <p><small>Publicado: <?= $blogPost->created->format('d/m/Y') ?></small></p>
</div>




