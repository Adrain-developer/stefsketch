<?php foreach ($posts as $post): ?>
    <div class="card mb-3 shadow-sm glass-card">
        <a href="<?= $this->Url->build(['action' => 'view', $post->slug]) ?>">
            <?= $this->Html->image($post->banner, ['class' => 'card-img-top']) ?>
        </a>
        <div class="card-body">
            <h5><?= h($post->title) ?></h5>
            <p class="small text-muted"><?= h($post->event_type->name ?? '') ?> - <?= h($post->blog_category->name ?? '') ?></p>
            <?= $this->Html->link('Leer más', ['action' => 'view', $post->slug], ['class' => 'btn btn-outline-primary btn-sm']) ?>
        </div>
    </div>
<?php endforeach; ?>