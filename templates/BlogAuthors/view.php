<h1><?= h($blogAuthor->name) ?></h1>
<h3>Posts del autor:</h3>
<ul>
<?php foreach ($blogAuthor->blog_posts as $post): ?>
    <li><?= $this->Html->link($post->title, ['controller' => 'BlogPosts', 'action' => 'view', $post->id]) ?></li>
<?php endforeach; ?>
</ul>
