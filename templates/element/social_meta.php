<?php
use Cake\Routing\Router;

/**
 * Metadatos para compartir el enlace en redes sociales.
 *
 * Cubre Open Graph (Facebook, Messenger, WhatsApp, Instagram, LinkedIn) y
 * Twitter Cards (X). Cada página puede sobrescribir los valores estableciendo
 * en el controlador/vista: $metaTitle, $metaDescription y $metaImage (ruta
 * relativa a webroot, ej. 'img/mi-post.jpg').
 *
 * @var \App\View\AppView $this
 * @var string|null $metaTitle
 * @var string|null $metaDescription
 * @var string|null $metaImage
 */
$siteName = 'Stef Sketch';
$title = !empty($metaTitle) ? $metaTitle : 'Stef Sketch · Ilustración que cuenta historias';
$description = !empty($metaDescription)
    ? $metaDescription
    : 'Soy Estefanía Palma, ilustradora mexicana en Puebla. Transformo historias en imágenes llenas de color y emoción.';
$imagePath = !empty($metaImage) ? $metaImage : 'img/img_metadata.jpg';

// Los scrapers de redes sociales exigen URLs absolutas.
$imageUrl = Router::url('/' . ltrim($imagePath, '/'), true);
try {
    $canonicalUrl = Router::url($this->request->getRequestTarget(), true);
} catch (\Throwable $e) {
    $canonicalUrl = Router::url('/', true);
}

// Dimensiones reales de la imagen (mejora la previsualización en las redes).
$imgWidth = 800;
$imgHeight = 500;
$imgAbsPath = WWW_ROOT . str_replace('/', DS, ltrim($imagePath, '/'));
if (is_file($imgAbsPath) && ($size = @getimagesize($imgAbsPath))) {
    $imgWidth = $size[0];
    $imgHeight = $size[1];
}
?>
<meta name="description" content="<?= h($description) ?>">
<link rel="canonical" href="<?= h($canonicalUrl) ?>">

<!-- Open Graph: Facebook, Messenger, WhatsApp, Instagram, LinkedIn -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= h($siteName) ?>">
<meta property="og:title" content="<?= h($title) ?>">
<meta property="og:description" content="<?= h($description) ?>">
<meta property="og:url" content="<?= h($canonicalUrl) ?>">
<meta property="og:locale" content="es_MX">
<meta property="og:image" content="<?= h($imageUrl) ?>">
<meta property="og:image:secure_url" content="<?= h($imageUrl) ?>">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="<?= h((string)$imgWidth) ?>">
<meta property="og:image:height" content="<?= h((string)$imgHeight) ?>">
<meta property="og:image:alt" content="<?= h($title) ?>">

<!-- Twitter / X -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= h($title) ?>">
<meta name="twitter:description" content="<?= h($description) ?>">
<meta name="twitter:image" content="<?= h($imageUrl) ?>">
<meta name="twitter:image:alt" content="<?= h($title) ?>">
