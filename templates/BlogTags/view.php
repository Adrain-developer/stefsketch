<div class="main-content">
    <div class="container-categories" style="text-align: center; max-width: 600px;">
        <h2 class="title" style="font-size: 36px;"><?= h($blogTag->name) ?></h2>
        
      
        
        <div style="margin-top: 40px; display: flex; gap: 15px; justify-content: center;">
            <?= $this->Html->link('Volver', ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
            <?= $this->Html->link('Editar Tag', ['action' => 'edit', $blogTag->id], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>