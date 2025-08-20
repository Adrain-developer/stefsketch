<!-- templates/Error/no_access.php -->

<?php $this->assign('title', 'Acceso no autorizado'); ?>

<div class="container py-5">
    <div class="text-center p-4 shadow-lg rounded" style="background: rgba(255,255,255,0.25); backdrop-filter: blur(10px); border-radius: 15px;">
        <h1 style="font-size: 3rem; color: #dc3545;"><i class="fas fa-lock"></i> Acceso Denegado</h1>
        <p class="lead">Esta sección está restringida solo para administradores.</p>
        <a href="<?= $this->Url->build('/blog-posts/index') ?>" class="btn btn-outline-danger mt-3">Volver al inicio</a>
    </div>
</div>

