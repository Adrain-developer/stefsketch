<h1 class="mb-4">Nuevo Autor</h1>

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
        <?= $this->Form->control('img', [
            'label' => 'Imagen de perfil',
            'type' => 'file',
            'class' => 'form-control-file'
        ]) ?>
    </div>

    <div class="mt-4">
        <?= $this->Form->button('Guardar', ['class' => 'btn btn-primary px-4']) ?>
    </div>

    <?= $this->Form->end() ?>
</div>
