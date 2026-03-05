<div class="main-content">
    <div class="container-categories" style="text-align: center; max-width: 600px;">
        <h2 class="title"><?= h($blogCategory->name) ?></h2>


        <div style="margin-top: 40px;">
            <?= $this->Html->link('Volver a Categorías', ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>
</div>