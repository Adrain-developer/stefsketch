<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogBanner $banner
 * @var array $config
 * @var string $key
 */
$this->assign('title', 'Editar ' . $config['name']);
?>
<style>
/* ===== Editar banner (admin) ===== */
.banner-edit-wrap { max-width: 900px; margin: 30px auto; padding: 0 15px; }
.banner-edit-head { text-align: center; margin-bottom: 26px; }
.banner-edit-head small { display:block; color: rgba(255,255,255,0.6); margin-top: 6px; }

.layer-edit {
    background: rgba(0,0,0,0.35);
    border: 1px solid rgba(40,235,227,0.18);
    border-radius: 16px;
    padding: 20px;
    margin-bottom: 22px;
    display: grid; grid-template-columns: 200px 1fr; gap: 22px; align-items: start;
}
.layer-edit .le-preview {
    position: relative;
    width: 100%; height: 160px;
    border-radius: 12px; overflow: hidden;
    background: repeating-conic-gradient(#2a2a2a 0% 25%, #1c1c1c 0% 50%) 50% / 22px 22px;
    display: flex; align-items: center; justify-content: center;
}
.layer-edit .le-preview img { width: 100%; height: 100%; object-fit: contain; }
.le-badge {
    position: absolute; top: 8px; left: 8px;
    font-size: 10px; font-weight: 700; padding: 3px 9px; border-radius: 20px; text-transform: uppercase;
}
.le-badge.custom { background: #28ebe3; color: #000; }
.le-badge.default { background: rgba(255,255,255,0.15); color: #fff; }

.layer-edit .le-title { color: #28ebe3; font-weight: 700; margin: 0 0 6px; font-size: 16px; }
.layer-edit .le-help { color: rgba(255,255,255,0.65); font-size: 13px; margin-bottom: 12px; }
.le-specs { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 14px; }
.le-spec { font-size: 12px; background: rgba(40,235,227,0.1); border: 1px solid rgba(40,235,227,0.25); color: #28ebe3; padding: 4px 10px; border-radius: 20px; }
.le-file input[type=file] { color: #fff; font-size: 13px; }
.le-remove { margin-top: 12px; display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(255,255,255,0.8); }
.le-remove input { width: 16px; height: 16px; accent-color: #ff4d4d; }

.banner-text-fields { margin-top: 4px; }
.banner-text-fields label { display:block; color:#28ebe3; font-weight:700; margin-bottom:8px; }
.banner-actions { display:flex; gap:15px; justify-content:space-between; margin-top: 10px; }

@media (max-width: 690px) {
    .layer-edit { grid-template-columns: 1fr; }
}
</style>

<div class="banner-edit-wrap">
    <div class="banner-edit-head">
        <h2><i class="fas fa-pen"></i> <?= h($config['name']) ?></h2>
        <small><?= h($config['section']) ?></small>
    </div>

    <div class="glass-card">
        <?= $this->Form->create($banner, ['type' => 'file', 'id' => 'banner-form']) ?>

        <?php foreach ($config['layers'] as $layer => $meta): ?>
            <?php
                $isCustom = $banner->hasCustomLayer($layer);
                $src = $isCustom ? $banner->$layer : $meta['default'];
            ?>
            <div class="layer-edit">
                <div class="le-preview">
                    <span class="le-badge <?= $isCustom ? 'custom' : 'default' ?>">
                        <?= $isCustom ? 'Personalizada' : 'Por defecto' ?>
                    </span>
                    <img src="/img/<?= h($src) ?>" alt="<?= h($meta['label']) ?>" data-default="/img/<?= h($meta['default']) ?>" loading="lazy">
                </div>
                <div class="le-body">
                    <h4 class="le-title"><?= h($meta['label']) ?></h4>
                    <p class="le-help"><?= h($meta['help']) ?></p>
                    <div class="le-specs">
                        <span class="le-spec"><i class="fas fa-file-image"></i> <?= h($meta['format']) ?></span>
                        <span class="le-spec"><i class="fas fa-ruler-combined"></i> <?= h($meta['size']) ?></span>
                    </div>
                    <div class="le-file">
                        <?= $this->Form->control($layer, [
                            'type' => 'file',
                            'label' => false,
                            'accept' => 'image/png,image/jpeg,image/webp',
                        ]) ?>
                    </div>
                    <?php if ($isCustom): ?>
                        <label class="le-remove">
                            <input type="checkbox" name="remove[<?= h($layer) ?>]" value="1">
                            <i class="fas fa-trash-alt"></i> Quitar imagen (volver a la versión por defecto)
                        </label>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (!empty($config['has_text'])): ?>
            <div class="banner-text-fields">
                <div style="margin-bottom: 20px;">
                    <label>Título</label>
                    <?= $this->Form->control('heading', [
                        'label' => false,
                        'class' => 'form-control',
                        'value' => $banner->heading,
                        'placeholder' => $config['text']['heading'],
                        'maxlength' => 255,
                    ]) ?>
                </div>
                <div style="margin-bottom: 24px;">
                    <label>Párrafo</label>
                    <?= $this->Form->control('paragraph', [
                        'type' => 'textarea',
                        'label' => false,
                        'class' => 'form-control',
                        'rows' => 3,
                        'value' => $banner->paragraph,
                        'placeholder' => $config['text']['paragraph'],
                    ]) ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="banner-actions">
            <?= $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-secondary', 'style' => 'flex:1; text-align:center;']) ?>
            <?= $this->Form->button('<i class="fas fa-save"></i> Guardar cambios', ['class' => 'btn btn-primary', 'style' => 'flex:1;', 'escapeTitle' => false]) ?>
        </div>

        <?= $this->Form->end() ?>
    </div>
</div>

<script>
(function () {
    // UX: preview del archivo elegido y exclusión mutua con "Quitar imagen".
    document.querySelectorAll('.layer-edit').forEach(function (box) {
        var fileInput = box.querySelector('input[type=file]');
        var removeInput = box.querySelector('input[type=checkbox]');
        var img = box.querySelector('.le-preview img');
        var badge = box.querySelector('.le-badge');

        if (fileInput) {
            fileInput.addEventListener('change', function () {
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) { img.src = e.target.result; };
                    reader.readAsDataURL(fileInput.files[0]);
                    if (badge) { badge.textContent = 'Nueva'; badge.className = 'le-badge custom'; }
                    if (removeInput) { removeInput.checked = false; }
                }
            });
        }

        if (removeInput) {
            removeInput.addEventListener('change', function () {
                if (removeInput.checked) {
                    if (fileInput) { fileInput.value = ''; }
                    var def = img.getAttribute('data-default');
                    if (def) { img.src = def; }
                    if (badge) { badge.textContent = 'Por defecto'; badge.className = 'le-badge default'; }
                }
            });
        }
    });
})();
</script>
