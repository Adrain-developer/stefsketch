<?php
/**
 * Favicon del sitio (web pública y panel admin).
 *
 * @var \App\View\AppView $this
 */
$favicon = $this->Url->build('/img/LOGO-MORADO.ico');
?>
<link rel="icon" href="<?= h($favicon) ?>" type="image/x-icon">
<link rel="shortcut icon" href="<?= h($favicon) ?>" type="image/x-icon">
