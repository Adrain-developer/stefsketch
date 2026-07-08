<?php
/**
 * @var \App\View\AppView $this
 * @var array<string, \App\Model\Entity\BlogBanner> $banners
 * @var array $bannersConfig
 */
$this->assign('title', 'Banners de portada');
?>
<style>
/* ===== Módulo Banners (admin) ===== */
.banners-wrap { max-width: 1100px; margin: 30px auto; padding: 0 15px; }
.banners-head { text-align: center; margin-bottom: 30px; }
.banners-head p { color: rgba(255,255,255,0.65); max-width: 720px; margin: 8px auto 0; }

.banner-card { margin-bottom: 30px; }
.banner-card .banner-card-head {
    display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;
    gap: 15px; margin-bottom: 22px;
}
.banner-card-head h3 { margin: 0; }
.banner-card-head small { display: block; color: rgba(255,255,255,0.6); font-weight: 400; text-transform: none; }

.layers-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
.layer-box {
    background: rgba(0,0,0,0.35);
    border: 1px solid rgba(40,235,227,0.18);
    border-radius: 14px;
    padding: 14px;
    display: flex; flex-direction: column;
}
.layer-box .layer-name { color: #28ebe3; font-weight: 700; font-size: 14px; margin-bottom: 10px; }
.layer-thumb {
    position: relative;
    width: 100%; height: 140px;
    border-radius: 10px; overflow: hidden;
    background: repeating-conic-gradient(#2a2a2a 0% 25%, #1c1c1c 0% 50%) 50% / 22px 22px;
    display: flex; align-items: center; justify-content: center;
}
.layer-thumb img { width: 100%; height: 100%; object-fit: contain; }
.layer-badge {
    position: absolute; top: 8px; left: 8px;
    font-size: 10px; font-weight: 700; letter-spacing: .5px;
    padding: 3px 9px; border-radius: 20px; text-transform: uppercase;
}
.layer-badge.custom { background: #28ebe3; color: #000; }
.layer-badge.default { background: rgba(255,255,255,0.15); color: #fff; }
.layer-meta { margin-top: 10px; font-size: 12px; color: rgba(255,255,255,0.7); line-height: 1.5; }
.layer-meta strong { color: #fff; }

.banner-text-preview {
    margin-top: 20px; padding: 16px 18px;
    background: rgba(0,0,0,0.35); border: 1px solid rgba(40,235,227,0.18); border-radius: 14px;
}
.banner-text-preview .bt-h { color: #9900ff; font-weight: 700; font-size: 20px; }
.banner-text-preview .bt-p { color: rgba(255,255,255,0.8); margin-top: 6px; }

@media (max-width: 767px) {
    .layers-grid { grid-template-columns: 1fr; }
}
</style>

<div class="banners-wrap">
    <div class="banners-head">
        <h2><i class="fas fa-images"></i> Banners de portada</h2>
        <p>Personaliza las imágenes (3 capas con efecto parallax) y textos de los banners de la portada del portafolio. Todas las imágenes son opcionales: si quitas una, se usará automáticamente la versión por defecto.</p>
    </div>

    <?php foreach ($bannersConfig as $key => $config): ?>
        <?php $banner = $banners[$key]; ?>
        <div class="glass-card banner-card">
            <div class="banner-card-head">
                <div>
                    <h3><?= h($config['name']) ?></h3>
                    <small><?= h($config['section']) ?></small>
                </div>
                <?= $this->Html->link(
                    '<i class="fas fa-pen"></i> Editar banner',
                    ['action' => 'edit', $key],
                    ['class' => 'btn btn-primary', 'escape' => false]
                ) ?>
            </div>

            <div class="layers-grid">
                <?php foreach ($config['layers'] as $layer => $meta): ?>
                    <?php
                        $isCustom = $banner->hasCustomLayer($layer);
                        $src = $isCustom ? $banner->$layer : $meta['default'];
                    ?>
                    <div class="layer-box">
                        <div class="layer-name"><?= h($meta['label']) ?></div>
                        <div class="layer-thumb">
                            <span class="layer-badge <?= $isCustom ? 'custom' : 'default' ?>">
                                <?= $isCustom ? 'Personalizada' : 'Por defecto' ?>
                            </span>
                            <img src="/img/<?= h($src) ?>" alt="<?= h($meta['label']) ?>" loading="lazy">
                        </div>
                        <div class="layer-meta">
                            <strong>Formato:</strong> <?= h($meta['format']) ?><br>
                            <strong>Medida:</strong> <?= h($meta['size']) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (!empty($config['has_text'])): ?>
                <div class="banner-text-preview">
                    <div class="bt-h"><?= h($banner->heading !== null && $banner->heading !== '' ? $banner->heading : $config['text']['heading']) ?></div>
                    <div class="bt-p"><?= h($banner->paragraph !== null && $banner->paragraph !== '' ? $banner->paragraph : $config['text']['paragraph']) ?></div>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
