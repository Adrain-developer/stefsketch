<h1 class="mb-4">Editar Autor</h1>

<div class="p-4 rounded" style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border-radius: 1rem; box-shadow: 8px 8px 16px #d1d9e6, -8px -8px 16px #ffffff;">
    <?= $this->Form->create($blogAuthor, ['type' => 'file']) ?>

    <div class="form-group">
        <?= $this->Form->control('name', ['label' => 'Nombre', 'class' => 'form-control']) ?>
    </div>

    <div class="form-group">
        <?= $this->Form->control('email', ['label' => 'Correo electrónico', 'class' => 'form-control']) ?>
    </div>

    <div class="form-group">
        <?= $this->Form->control('bio', ['label' => 'Biografía', 'class' => 'form-control', 'type' => 'textarea', 'rows' => 3]) ?>
    </div>

    <div class="form-group">
        <?= $this->Form->control('facebook', ['label' => 'Facebook', 'class' => 'form-control']) ?>
    </div>

    <div class="form-group">
        <?= $this->Form->control('instagram', ['label' => 'Instagram', 'class' => 'form-control']) ?>
    </div>

    <div class="form-group">
        <?= $this->Form->control('tiktok', ['label' => 'TikTok', 'class' => 'form-control']) ?>
    </div>

    <div class="form-group">
        <?php if (!empty($blogAuthor->img)): ?>
            <label>Imagen actual:</label><br>
            <img src="/img/<?= h($blogAuthor->img) ?>" alt="Imagen del autor" class="mb-3" style="max-width: 150px; border-radius: 0.5rem; box-shadow: 4px 4px 10px rgba(0,0,0,0.1);">
        <?php endif; ?>
        <?= $this->Form->control('img', [
            'label' => 'Reemplazar imagen',
            'type' => 'file',
            'class' => 'form-control-file'
        ]) ?>
    </div>

    <div class="mt-4">
        <?= $this->Form->button('Actualizar', ['class' => 'btn btn-success px-4']) ?>
    </div>

    <?= $this->Form->end() ?>
</div>
