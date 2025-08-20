<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\ResultSetInterface<\App\Model\Entity\BlogPost> $blogPosts
 *  * @var \Cake\Datasource\ResultSetInterface<\App\Model\Entity\EventTypes> $eventType
 */

$user = $this->request->getAttribute('identity');

?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', ['block' => true]) ?>
<?= $this->Html->script('https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js', ['block' => true]) ?>

<style>
.table-glass {
    width: 100%;
    border-collapse: collapse;
    border-radius: 20px;
    backdrop-filter: blur(10px);
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.table-glass thead {
    background: rgba(255, 255, 255, 0.3);
}

.table-glass th,
.table-glass td {
    padding: 0.8rem;
    text-align: left;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.table-glass tr:hover {
    background: rgba(255, 255, 255, 0.1);
}

.table-wrapper {
    overflow-x: auto;
}

.thumbnail-sm {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 12px;
}

.btn-neo {
    background: #e0e0e0;
    border-radius: 12px;
    box-shadow: 5px 5px 10px #bebebe,
        -5px -5px 10px #ffffff;
    padding: 0.3rem 0.6rem;
    font-size: 0.9rem;
    text-decoration: none;
    margin-right: 5px;
    display: inline-block;
}

.btn-neo:hover {
    background: #d4d4d4;
}

.tags-container {
    display: flex;
    flex-wrap: wrap;
    gap: 2px;
    margin: 10px 0;
}

.tag {
    display: inline-block;
    padding: 4px 12px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
}

.tag-blue {
    background-color: #3498db;
    color: white;
}

.tag-blue:hover {
    background-color: #2980b9;
    transform: translateY(-1px);
}

@media (max-width: 767.98px) {
    .table-wrapper {
        display: none;
    }
}

@media only screen and (max-width: 767px) {
    .card-title {
        font-size: 18px;
    }
    .mb-3, .my-3 {
        margin-bottom: 0.4rem !important;
    }

    .card-img, .card-img-top {
        width: 100px;
        height: 100%;
        border-radius: 12px 0 0 12px;
    }
}

.add-button {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 16px 32px;
    background: #f7fafc;
    border: none;
    border-radius: 20px;
    font-weight: 600;
    font-size: 16px;
    color: #4a5568;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 
        8px 8px 20px #d1d9e6,
        -8px -8px 20px #ffffff;
    position: relative;
    overflow: hidden;
}

.add-button::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
    transition: left 0.6s;
}

.add-button:hover::before {
    left: 100%;
}

.add-button:hover {
    transform: translateY(-2px);
    box-shadow: 
        12px 12px 25px #d1d9e6,
        -12px -12px 25px #ffffff;
}

.add-button:active {
    transform: translateY(0);
    box-shadow: 
        4px 4px 10px #d1d9e6,
        -4px -4px 10px #ffffff;
}

.add-icon {
    width: 20px;
    height: 20px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
}

.btn-warning {
    background-color: #ffeaca;
    border-color: #ffc107;
}

.status-circle {
    display: inline-block;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.status-circle-green {
    background-color: #28a745;
    border: 2px solid #1e7e34;
}

.status-circle-green:hover {
    background-color: #218838;
    transform: scale(1.1);
    box-shadow: 0 3px 6px rgba(0,0,0,0.3);
}

.status-circle-orange {
    background-color: #fd7e14;
    border: 2px solid #e55a00;
}

.status-circle-orange:hover {
    background-color: #e55a00;
    transform: scale(1.1);
    box-shadow: 0 3px 6px rgba(0,0,0,0.3);
}

.status-circle-gray {
    background-color: #6c757d;
    border: 2px solid #5a6268;
    opacity: 0.7;
}

.status-circle-blue {
    background-color: #007bff; /* Azul para posts programados */
    border: 2px solid #0056b3;
}

.status-circle[style*="cursor: pointer"]:active {
    transform: scale(0.95);
}

.views-input {
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.views-input:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    outline: none;
}

.views-input.updating {
    border-color: #ffc107;
    background-color: #fff3cd;
}

.views-input.success {
    border-color: #28a745;
    background-color: #d4edda;
}

.views-input.error {
    border-color: #dc3545;
    background-color: #f8d7da;
    animation: shake 0.5s;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    75% { transform: translateX(5px); }
}

/* CSS de botones modernos */
.button-container {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
    align-items: center;
}

.admin-btn {
    display: inline-flex;
    align-items: center;
    padding: 0.75rem 1.25rem;
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    font-size: 0.875rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(79, 172, 254, 0.25);
    white-space: nowrap;
}

.admin-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.admin-btn:hover::before {
    left: 100%;
}

.admin-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(79, 172, 254, 0.35);
    color: white;
    text-decoration: none;
}

.admin-btn i {
    margin-right: 0.5rem;
    font-size: 1rem;
    width: 16px;
    text-align: center;
}

/* Variaciones de color para diferentes tipos de botones */
.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    box-shadow: 0 2px 8px rgba(102, 126, 234, 0.25);
}

.btn-secondary {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    box-shadow: 0 2px 8px rgba(240, 147, 251, 0.25);
}

.btn-info {
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    box-shadow: 0 2px 8px rgba(79, 172, 254, 0.25);
}

.btn-warning {
    background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
    box-shadow: 0 2px 8px rgba(250, 112, 154, 0.25);
}

.btn-danger {
    background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
    box-shadow: 0 2px 8px rgba(255, 107, 107, 0.25);
}

.btn-primary:hover {
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.35);
}

.btn-secondary:hover {
    box-shadow: 0 4px 12px rgba(240, 147, 251, 0.35);
}

.btn-info:hover {
    box-shadow: 0 4px 12px rgba(79, 172, 254, 0.35);
}

.btn-warning:hover {
    box-shadow: 0 4px 12px rgba(250, 112, 154, 0.35);
}

.btn-danger:hover {
    box-shadow: 0 4px 12px rgba(255, 107, 107, 0.35);
}

/* Responsive Design */
@media (max-width: 768px) {
    .button-container {
        gap: 0.5rem;
    }

    .admin-btn {
        padding: 0.625rem 1rem;
        font-size: 0.8rem;
    }

    .admin-btn i {
        font-size: 0.9rem;
        margin-right: 0.4rem;
    }
}

@media (max-width: 480px) {
    .button-container {
        flex-direction: column;
        align-items: stretch;
    }

    .admin-btn {
        justify-content: center;
        padding: 0.75rem 1rem;
        font-size: 0.875rem;
    }
}

/* Animación de entrada */
.admin-btn {
    animation: fadeInUp 0.4s ease-out forwards;
    opacity: 0;
    transform: translateY(10px);
}

.admin-btn:nth-child(1) { animation-delay: 0.05s; }
.admin-btn:nth-child(2) { animation-delay: 0.1s; }
.admin-btn:nth-child(3) { animation-delay: 0.15s; }
.admin-btn:nth-child(4) { animation-delay: 0.2s; }
.admin-btn:nth-child(5) { animation-delay: 0.25s; }
.admin-btn:nth-child(6) { animation-delay: 0.3s; }
.admin-btn:nth-child(7) { animation-delay: 0.35s; }
.admin-btn:nth-child(8) { animation-delay: 0.4s; }

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Estilos base para los botones de acción */
.action-buttons {
    display: flex;
    gap: 6px;
    align-items: center;
    justify-content: flex-start;
    flex-wrap: wrap;
    min-width: 0;
}

.btn-action {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border: none;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Colores específicos por acción */
.btn-view {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
}

.btn-edit {
    background: linear-gradient(135deg, #f59e0b, #d97706);
}

.btn-share {
    background: linear-gradient(135deg, #10b981, #059669);
}

.btn-delete {
    background: linear-gradient(135deg, #ef4444, #dc2626);
}

/* Estados hover */
.btn-view:hover {
    background: linear-gradient(135deg, #2563eb, #1e40af);
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(59, 130, 246, 0.3);
    color: white;
    text-decoration: none;
}

.btn-edit:hover {
    background: linear-gradient(135deg, #f59e0b, #b45309);
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(245, 158, 11, 0.3);
    color: white;
    text-decoration: none;
}

.btn-share:hover {
    background: linear-gradient(135deg, #059669, #047857);
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(16, 185, 129, 0.3);
}

.btn-delete:hover {
    background: linear-gradient(135deg, #dc2626, #b91c1c);
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(239, 68, 68, 0.3);
}

/* Estados activos */
.btn-action:active {
    transform: translateY(0);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
}

/* Efecto de ondas */
.btn-action::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-action:active::before {
    width: 40px;
    height: 40px;
}

/* Tooltip personalizado */
.btn-action {
    position: relative;
}

.btn-action::after {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.9);
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 11px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    pointer-events: none;
    z-index: 1000;
}

.btn-action:hover::after {
    opacity: 1;
    visibility: visible;
    bottom: calc(100% + 5px);
}

/* Responsividad */
@media (max-width: 768px) {
    .action-buttons {
        gap: 4px;
    }
    
    .btn-action {
        width: 28px;
        height: 28px;
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .action-buttons {
        gap: 3px;
    }
    
    .btn-action {
        width: 26px;
        height: 26px;
        font-size: 11px;
    }
}

/* Animación de carga para compartir */
.btn-share.loading {
    animation: pulse 1.5s infinite;
}

@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.7; }
    100% { opacity: 1; }
}

/* Modal de confirmación personalizado */
.confirm-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 10000;
    align-items: center;
    justify-content: center;
}

.confirm-modal.show {
    display: flex;
    animation: fadeIn 0.3s ease;
}

.confirm-content {
    background: white;
    padding: 24px;
    border-radius: 12px;
    max-width: 400px;
    width: 90%;
    text-align: center;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    animation: slideIn 0.3s ease;
}

.confirm-buttons {
    display: flex;
    gap: 12px;
    justify-content: center;
    margin-top: 20px;
}

.confirm-btn {
    padding: 8px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 500;
    transition: all 0.2s ease;
}

.confirm-btn.cancel {
    background: #f3f4f6;
    color: #374151;
}

.confirm-btn.delete {
    background: #ef4444;
    color: white;
}

.confirm-btn:hover.cancel {
    background: #e5e7eb;
}

.confirm-btn:hover.delete {
    background: #dc2626;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideIn {
    from { transform: translateY(-20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}
@media only screen and (max-width: 767px) {
    section.como-funciona {
        padding-top: 25px !important;
    }
}
/* Estilos para feedback visual de los inputs de views */
.views-input.updating {
    background-color: #f8f9fa !important;
    border-color: #6c757d !important;
    cursor: wait;
    opacity: 0.7;
}

.views-input.success {
    background-color: #d4edda !important;
    border-color: #28a745 !important;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25) !important;
}

.views-input.error {
    background-color: #f8d7da !important;
    border-color: #dc3545 !important;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
}

/* Animación suave para las transiciones */
.views-input {
    transition: all 0.3s ease;
}

/* Efecto loading para los botones de compartir */
.share-btn.loading {
    opacity: 0.6;
    pointer-events: none;
}

.share-btn.loading::after {
    content: '';
    width: 12px;
    height: 12px;
    border: 2px solid transparent;
    border-top: 2px solid currentColor;
    border-radius: 50%;
    display: inline-block;
    animation: spin 1s linear infinite;
    margin-left: 5px;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}
</style>

<section id="ventajas" class="como-funciona" style="background-color: #ffffff;">
    <div class="my-4 glass-card" style="padding: 18px;">
        <h2 class="mb-3">Hola <?= $blogAuthorName ?? '<span style="color:#aaa;">Sin autor</span>' ?> | Administra tus Posts</h2>

        <!-- Botones modernos con diseño mejorado -->
        <div class="button-container">
            <?= $this->Html->link('<i class="fas fa-plus-circle"></i>Agregar nuevo post', ['action' => 'add'], [
                'class' => 'admin-btn btn-primary',
                'escape' => false
            ]) ?>

            <?= $this->Html->link('<i class="fas fa-folder-open"></i>Temas', ['controller' => 'BlogCategories', 'action' => 'index'], [
                'class' => 'admin-btn btn-info',
                'escape' => false
            ]) ?>

            <?= $this->Html->link('<i class="fas fa-calendar-alt"></i>Eventos', ['controller' => 'EventTypes', 'action' => 'index'], [
                'class' => 'admin-btn btn-warning',
                'escape' => false
            ]) ?>

            <?php if ($user->role === 'admin'): ?>
                <?= $this->Html->link('<i class="fas fa-sitemap"></i>SubCategorías', ['controller' => 'BlogSubcategories', 'action' => 'index'], [
                    'class' => 'admin-btn btn-secondary',
                    'escape' => false
                ]) ?>

                <?= $this->Html->link('<i class="fas fa-tags"></i>Tags', ['controller' => 'BlogTags', 'action' => 'index'], [
                    'class' => 'admin-btn btn-info',
                    'escape' => false
                ]) ?>

                <?= $this->Html->link('<i class="fas fa-users"></i>Autores', ['controller' => 'BlogAuthors', 'action' => 'index'], [
                    'class' => 'admin-btn btn-primary',
                    'escape' => false
                ]) ?>

                <?= $this->Html->link('<i class="fas fa-user-plus"></i>Agregar Autor', ['controller' => 'Users', 'action' => 'add-author'], [
                    'class' => 'admin-btn btn-warning',
                    'escape' => false
                ]) ?>
            <?php endif; ?>

            <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i>Cerrar Sesión', ['controller' => 'Users', 'action' => 'logout'], [
                'class' => 'admin-btn btn-danger',
                'escape' => false
            ]) ?>
        </div>

        <!-- Filtros -->
        <?= $this->Form->create(null, ['type' => 'get', 'class' => 'form-row mb-3']) ?>
        <div class="col-md-4 mb-2">
            <input type="text" name="search" class="form-control neo-input"
                placeholder="Buscar por título, autor o evento..." value="<?= $this->request->getQuery('search') ?>">
        </div>
        <div class="col-md-4 mb-2">
            <?= $this->Form->control('event_type', [
                'label' => false,
                'type' => 'select',
                'options' => $eventTypes,
                'empty' => 'Todos los tipos',
                'default' => $this->request->getQuery('event_type'),
                'class' => 'form-control neo-select',
                'name' => 'event_type'
            ]) ?>
        </div>
        <div class="col-md-2 mb-2 col-6">
            <?= $this->Form->control('limit', [
                'label' => false,
                'type' => 'select',
                'options' => [
                    '5' => '5 registros',
                    '10' => '10 registros',
                    '25' => '25 registros',
                    '50' => '50 registros',
                    '100' => '100 registros',
                    'all' => 'Todos'
                ],
                'default' => $this->request->getQuery('limit', '5'),
                'class' => 'form-control neo-select',
                'name' => 'limit'
            ]) ?>
        </div>
        <div class="col-md-2 col-6">
            <button type="submit" class="btn btn-primary btn-block neo-button">Filtrar</button>
        </div>
        <?= $this->Form->end() ?>

        <!-- Acciones masivas (separado de la tabla) -->
        <?php if ($user->role === 'admin'): ?>
            <?= $this->Form->create(null, ['id' => 'bulkActionForm', 'url' => ['action' => 'bulk']]) ?>
            <div class="form-row mb-3">
                <div class="col-md-4">
                    <select name="bulk_action" class="form-control neo-select" required>
                        <option value="">Acción masiva</option>
                        <option value="delete">Eliminar seleccionados</option>
                        <option value="activate">Activar</option>
                        <option value="deactivate">Desactivar</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-danger neo-button">Aplicar</button>
                </div>
            </div>
        <?php endif; ?>

        <!-- Tabla -->
        <div class="table-wrapper table-responsive">
            <table class="table-glass table">
                <thead>
                    <tr>
                        <?php if ($user->role === 'admin'): ?>
                            <th><input type="checkbox" id="selectAll"></th>
                        <?php endif; ?>
                        <th>Portada</th>
                        <?php if ($user->role === 'admin'): ?>
                            <th>Vistas</th>
                        <?php endif; ?>
                        <th>Título Post</th>
                        <th>Evento</th>
                        <?php if ($user->role === 'admin'): ?>
                            <th>Autor</th>
                        <?php endif; ?>
                        <th>Tema</th>
                        <th>SubTemas</th>
                        <th>Creado</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogPosts as $post): ?>
                    <tr>
                        <?php if ($user->role === 'admin'): ?>
                            <td>
                                <input type="checkbox" name="ids[]" value="<?= $post->id ?>" class="select-row" form="bulkActionForm">
                            </td>
                        <?php endif; ?>
                        <td>
                            <?php if ($post->banner): ?>
                                <a href="<?= $this->Url->build(['action' => 'edit', $post->id]) ?>">
                                    <?= $this->Html->image($post->banner, ['class' => 'thumbnail-sm']) ?>
                                </a>
                            <?php else: ?>
                                <span style="color:#aaa;">N/A</span>
                            <?php endif; ?>
                        </td>
                        <?php if ($user->role === 'admin'): ?>
                            <td class="text-center">
                                <input type="number" 
                                       class="form-control form-control-sm views-input" 
                                       value="<?= $post->views ?? 0 ?>" 
                                       data-post-id="<?= $post->id ?>"
                                       data-original-value="<?= $post->views ?? 0 ?>"
                                       style="width: 80px; display: inline-block; text-align: center;"
                                       min="0"
                                       form="">
                            </td>
                        <?php endif; ?>
                        <td><?= h($post->title) ?></td>
                        <td><?= $post->event_type->name ?? '<span style="color:#aaa;">Sin evento</span>' ?></td>
                        <?php if ($user->role === 'admin'): ?>
                            <td><?= $post->blog_author->name ?? '<span style="color:#aaa;">Sin autor</span>' ?></td>
                        <?php endif; ?>
                        <td><?= $post->blog_category->name ?? '<span style="color:#aaa;">Sin categoría</span>' ?></td>
                        <td>
                            <?php if (!empty($post->blog_subcategories)): ?>
                                <div class="tags-container">
                                    <?php foreach ($post->blog_subcategories as $subcategory): ?>
                                        <span class="tag tag-blue"><?= h($subcategory->name) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <span style="color:#aaa;">Sin subTemas</span>
                            <?php endif; ?>
                        </td>
                        <td><?= $post->created->format('d M, y') ?></td>
                        <td class="text-center">
                            
                           <?php if ($identity && $identity->role === 'admin'): ?>
                                <?php
                                $circleClass = '';
                                $title = '';
                                $clickable = true;
                                $iconClass = '';
                                $showIcon = false;

                                // Verificar si está programado (tiene scheduled_at y es futuro)
                                $isScheduled = !empty($post->scheduled_at) && $post->scheduled_at > \Cake\I18n\FrozenTime::now();

                                switch ($post->status) {
                                    case 'borrador':
                                        $circleClass = 'status-circle-gray';
                                        $title = 'Borrador - No se puede cambiar';
                                        $clickable = false;
                                        break;
                                        
                                    case 'activo':
                                        $circleClass = 'status-circle-green';
                                        $title = 'Activo - Click para desactivar';
                                        break;
                                        
                                    case 'programado':
                                        if ($isScheduled) {
                                            // Post programado con fecha futura
                                            $circleClass = 'status-circle-blue';
                                            $title = 'Programado para: ' . $post->scheduled_at->format('d/m/Y H:i') . ' - Click para activar ahora';
                                            $iconClass = 'fas fa-clock';
                                            $showIcon = true;
                                        } else {
                                            // Post "publicado" pero sin programación (caso raro)
                                            $circleClass = 'status-circle-orange';
                                            $title = 'Publicado sin programar - Click para activar';
                                        }
                                        break;
                                        
                                    case 'inactivo':
                                        $circleClass = 'status-circle-orange';
                                        $title = 'Inactivo - Click para activar';
                                        break;
                                }

                                if ($clickable) {
                                    echo '<span class="status-circle ' . $circleClass . '" title="' . $title . '" onclick="document.getElementById(\'toggle-form-' . $post->id . '\').submit();" style="cursor: pointer; position: relative;">';
                                    
                                    if ($showIcon) {
                                        echo '<i class="' . $iconClass . '" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 10px; color: white;"></i>';
                                    }
                                    
                                    echo '</span>';
                                } else {
                                    echo '<span class="status-circle ' . $circleClass . '" title="' . $title . '" style="cursor: not-allowed; position: relative;">';
                                    
                                    if ($showIcon) {
                                        echo '<i class="' . $iconClass . '" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 10px; color: white;"></i>';
                                    }
                                    
                                    echo '</span>';
                                }
                                ?>
                            <?php else: ?>
                                <!-- Versión para usuarios no admin (solo informativa) -->
                                <?php
                                $circleClass = '';
                                $title = '';
                                $iconClass = '';
                                $showIcon = false;

                                // Verificar si está programado
                                $isScheduled = !empty($post->scheduled_at) && $post->scheduled_at > \Cake\I18n\FrozenTime::now();

                                switch ($post->status) {
                                    case 'borrador':
                                        $circleClass = 'status-circle-gray';
                                        $title = 'Borrador';
                                        break;
                                        
                                    case 'activo':
                                        $circleClass = 'status-circle-green';
                                        $title = 'Publicado';
                                        break;
                                        
                                    case 'programado':
                                        if ($isScheduled) {
                                            $circleClass = 'status-circle-blue';
                                            $title = 'Programado para: ' . $post->scheduled_at->format('d/m/Y H:i');
                                            $iconClass = 'fas fa-clock';
                                            $showIcon = true;
                                        } else {
                                            $circleClass = 'status-circle-orange';
                                            $title = 'En proceso';
                                        }
                                        break;
                                        
                                    case 'inactivo':
                                        $circleClass = 'status-circle-orange';
                                        $title = 'No disponible';
                                        break;
                                }

                                echo '<span class="status-circle ' . $circleClass . '" title="' . $title . '" style="position: relative;">';
                                
                                if ($showIcon) {
                                    echo '<i class="' . $iconClass . '" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 10px; color: white;"></i>';
                                }
                                
                                echo '</span>';
                                ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="action-buttons">
                                <!-- Botón Ver -->
                                <?= $this->Html->link(
                                    '<i class="fas fa-eye"></i>', 
                                    ['controller' => 'blog', 'action' => h($post->event_type->eventoslug) . '/' . $post->slug], 
                                    [
                                        'class' => 'btn-action btn-view',
                                        'data-tooltip' => 'Ver post',
                                        'escape' => false
                                    ]
                                ) ?>
                                
                                <!-- Botón Editar -->
                                <?= $this->Html->link(
                                    '<i class="fas fa-edit"></i>', 
                                    ['action' => 'edit', $post->id], 
                                    [
                                        'class' => 'btn-action btn-edit',
                                        'data-tooltip' => 'Editar',
                                        'escape' => false
                                    ]
                                ) ?>
                                
                                <!-- Botón Compartir -->
                                <button type="button" 
                                        class="btn-action btn-share share-btn" 
                                        data-tooltip="Compartir"
                                        data-url="<?= $this->Url->build('/blog/' . h($post->event_type->eventoslug) . '/' . $post->slug, ['fullBase' => true]) ?>">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                                
                                <!-- Botón Eliminar (Admin siempre, usuarios normales solo en borrador) -->
                                <?php 
                                $canDelete = false;

                                if ($identity && $identity->role === 'admin') {
                                    // Admin puede eliminar en cualquier estado
                                    $canDelete = true;
                                } elseif ($identity && $post->status === 'borrador') {
                                    // Usuario normal solo puede eliminar si está en borrador
                                    $canDelete = true;
                                }
                                ?>

                                <?php if ($canDelete): ?>
                                    <button type="button" 
                                            class="btn-action btn-delete" 
                                            data-tooltip="Eliminar"
                                            data-post-id="<?= $post->id ?>"
                                            data-post-title="<?= h($post->title) ?>"
                                            onclick="confirmDelete(this)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php if ($user->role === 'admin'): ?>
            <?= $this->Form->end() ?>
        <?php endif; ?>

       <!-- VERSIÓN MÓVIL -->
        <div class="d-block d-md-none mt-4">
            <?php if ($user->role === 'admin'): ?>
                            <input type="checkbox" id="selectAll" class="select-row" style="width: 24px; height: 24px; cursor: pointer;"><span> Seleccionar Todos</span>
                        <?php endif; ?>
            <?php foreach ($blogPosts as $post): 
                #debug($post)?>
                <div class="card mb-2 shadow-sm" style="border-radius: 18px; position: relative; overflow: hidden;">
                    
                    <!-- Checkbox superior izquierdo (solo admin) -->
                    <?php if ($identity && $identity->role === 'admin'): ?>
                        <div style="position: absolute; top: 6px; left: 6px; z-index: 10;">
                            <input type="checkbox" name="ids[]" value="<?= $post->id ?>" class="select-row" form="bulkActionForm" 
                                   style="width: 24px; height: 24px; cursor: pointer;">
                        </div>
                    <?php endif; ?>
                    
                    <!-- Radio buttons superior derecho -->
                    <div style="position: absolute; top: 6px; right: 6px; z-index: 10;">
                        <?php if ($identity && $identity->role === 'admin'): ?>
                            <?php
                                $circleClass = '';
                                $title = '';
                                $clickable = true;
                                $iconClass = '';
                                $showIcon = false;

                            // Verificar si está programado (tiene scheduled_at y es futuro)
                            $isScheduled = !empty($post->scheduled_at) && $post->scheduled_at > \Cake\I18n\FrozenTime::now();


                            switch ($post->status) {
                                    case 'borrador':
                                        $circleClass = 'status-circle-gray';
                                        $title = 'Borrador - No se puede cambiar';
                                        $clickable = false;
                                        break;
                                        
                                    case 'activo':
                                        $circleClass = 'status-circle-green';
                                        $title = 'Activo - Click para desactivar';
                                        break;
                                        
                                    case 'programado':
                                        if ($isScheduled) {
                                            // Post programado con fecha futura
                                            $circleClass = 'status-circle-blue';
                                            $title = 'Programado para: ' . $post->scheduled_at->format('d/m/Y H:i') . ' - Click para activar ahora';
                                            $iconClass = 'fas fa-clock';
                                            $showIcon = true;
                                        } else {
                                            // Post "publicado" pero sin programación (caso raro)
                                            $circleClass = 'status-circle-orange';
                                            $title = 'Publicado sin programar - Click para activar';
                                        }
                                        break;
                                        
                                    case 'inactivo':
                                        $circleClass = 'status-circle-orange';
                                        $title = 'Inactivo - Click para activar';
                                        break;
                                }

                            if ($clickable) {
                                    echo '<span class="status-circle ' . $circleClass . '" title="' . $title . '" onclick="document.getElementById(\'toggle-form-' . $post->id . '\').submit();" style="cursor: pointer; position: relative;">';
                                    
                                    if ($showIcon) {
                                        echo '<i class="' . $iconClass . '" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 10px; color: white;"></i>';
                                    }
                                    
                                    echo '</span>';
                                } else {
                                    echo '<span class="status-circle ' . $circleClass . '" title="' . $title . '" style="cursor: not-allowed; position: relative;">';
                                    
                                    if ($showIcon) {
                                        echo '<i class="' . $iconClass . '" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 10px; color: white;"></i>';
                                    }
                                    
                                    echo '</span>';
                                }
                            ?>
                        <?php else: ?>
                            <?php
                            // Para usuarios no admin - solo referencia visual
                            $circleClass = '';
                            $title = '';

                            switch ($post->status) {
                                case 'borrador':
                                    $circleClass = 'status-circle-gray';
                                    $title = 'Estado: Borrador';
                                    break;
                                case 'activo':
                                    $circleClass = 'status-circle-green';
                                    $title = 'Estado: Activo';
                                    break;
                                case 'programado':
                                    $circleClass = 'status-circle-green';
                                    $title = 'Estado: Programado';
                                    break;
                                case 'publico':
                                    $circleClass = 'status-circle-green';
                                    $title = 'Estado: Público';
                                    break;
                                case 'inactivo':
                                    $circleClass = 'status-circle-orange';
                                    $title = 'Estado: Inactivo';
                                    break;
                                default:
                                    $circleClass = 'status-circle-gray';
                                    $title = 'Estado: ' . ucfirst($post->status);
                                    break;
                            }

                            // Solo visual, sin funcionalidad de click
                            echo '<span class="status-circle ' . $circleClass . '" title="' . $title . '" style="cursor: default; width: 28px; height: 28px; display: inline-block; border-radius: 50%; border: 2px solid rgba(255,255,255,0.8); box-shadow: 0 2px 4px rgba(0,0,0,0.2);"></span>';
                            ?>
                        <?php endif; ?>
                    </div>
                    
                    <div class="row g-0">
                        <?php if ($post->banner): ?>
                            <div class="col-4">
                                <a href="<?= $this->Url->build(['action' => 'edit', $post->id]) ?>">
                                    <?= $this->Html->image($post->banner, [
                                        'class' => 'card-img-top', 
                                        'style' => 'border-radius: 18px 0 0 18px; object-fit: cover;'
                                    ]) ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="<?= $post->banner ? 'col-8' : 'col-12' ?>">
                            <div class="card-body" style="padding: 12px 16px 10px 1px;">
                                <h6 class="card-title mb-2" style="font-size: 14px; font-weight: 600; line-height: 1.3; color: #2c3e50;"><?= h($post->title) ?></h6>
                                
                                <p class="card-text mb-1" style="font-size: 12px; color: #34495e; font-weight: 500;"><?= $post->event_type->name ?? 'Sin tipo' ?></p>
                                <p class="card-text mb-2" style="font-size: 11px; color: #7f8c8d;"><?= $post->blog_category->name ?? '<span style="color:#bdc3c7;">Sin categoría</span>' ?></p>
                                <?php if ($identity && $identity->role === 'admin'): ?>
                                    <div class="mb-2">
                                        <div class="row">
                                        <label style="font-size: 11px; color: #7f8c8d; display: block;">Vistas:</label>
                                        <input type="number" 
                                            class="form-control form-control-sm views-input" 
                                            value="<?= $post->views ?? 0 ?>" 
                                            data-post-id="<?= $post->id ?>"
                                            data-original-value="<?= $post->views ?? 0 ?>"
                                            style="width: 80px; font-size: 12px; text-align: center;"
                                            min="0">
                                            </div>
                                    </div>
                                    <?php endif; ?>
                                                                    
                                <div class="d-flex flex-wrap gap-1" style="margin-top: 8px;">
                                    <?= $this->Html->link('<i class="fas fa-eye"></i>', ['controller' => 'blog', 'action' => h($post->event_type->eventoslug) . '/' . $post->slug], [
                                        'class' => 'btn btn-primary', 
                                        'escape' => false, 
                                        'title' => 'Ver', 
                                        'style' => ' font-size: 12px; border-radius: 8px; margin-right: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.12);'
                                    ]) ?>
                                    
                                    <?= $this->Html->link('<i class="fas fa-edit"></i>', ['action' => 'edit', $post->id], [
                                        'class' => 'btn btn-secondary', 
                                        'escape' => false, 
                                        'title' => 'Editar', 
                                        'style' => ' font-size: 12px; border-radius: 8px; margin-right: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.12);'
                                    ]) ?>
                                    
                                    <a href="javascript:void(0);" class="btn btn-info share-btn" 
                                       data-url="<?= $this->Url->build('/blog/' . h($post->event_type->eventoslug) . '/' . $post->slug, ['fullBase' => true]) ?>" 
                                       title="Compartir" 
                                       style=" font-size: 12px; border-radius: 8px; margin-right: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.12);">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    
                                    <?php if ($identity && $identity->role === 'admin'): ?>
                                        <button type="button" class="btn btn-danger" 
                                                data-post-id="<?= $post->id ?>"
                                                data-post-title="<?= h($post->title) ?>"
                                                onclick="confirmDelete(this)"
                                                title="Eliminar"
                                                style="font-size: 12px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.12);">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- VERSIÓN MÓVIL -->

        <!-- Paginación -->
        <div class="paginator mt-4">
            <?php if ($this->Paginator->total() > 1): ?>
                <nav aria-label="Navegación de páginas">
                    <ul class="pagination justify-content-center">
                        <?php if ($this->Paginator->hasPrev()): ?>
                            <li class="page-item">
                                <?= $this->Paginator->first('<<', ['class' => 'page-link']) ?>
                            </li>
                            <li class="page-item">
                                <?= $this->Paginator->prev('<', ['class' => 'page-link']) ?>
                            </li>
                        <?php endif; ?>

                        <?= $this->Paginator->numbers([
                            'modulus' => 2,
                            'before' => '',
                            'after' => '',
                            'templates' => [
                                'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                                'current' => '<li class="page-item active"><span class="page-link">{{text}}</span></li>'
                            ]
                        ]) ?>

                        <?php if ($this->Paginator->hasNext()): ?>
                            <li class="page-item">
                                <?= $this->Paginator->next('>', ['class' => 'page-link']) ?>
                            </li>
                            <li class="page-item">
                                <?= $this->Paginator->last('>>', ['class' => 'page-link']) ?>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Modal de confirmación personalizado -->
<div id="confirmModal" class="confirm-modal">
    <div class="confirm-content">
        <i class="fas fa-exclamation-triangle" style="font-size: 48px; color: #f59e0b; margin-bottom: 16px;"></i>
        <h3 style="margin: 0 0 8px 0; color: #374151;">Confirmar eliminación</h3>
        <p id="confirmMessage" style="margin: 0 0 20px 0; color: #6b7280;"></p>
        <div class="confirm-buttons">
            <button type="button" class="confirm-btn cancel" onclick="closeConfirmModal()">
                Cancelar
            </button>
            <button type="button" class="confirm-btn delete" onclick="executeDelete()">
                Eliminar
            </button>
        </div>
    </div>
</div>

<!-- Forms ocultos para eliminación individual -->
<div id="hidden-forms">
    <?php foreach ($blogPosts as $post): ?>
        <?php
        // Determinar si puede eliminar (misma lógica que el botón)
        $canDelete = false;
        if ($identity && $identity->role === 'admin') {
            $canDelete = true;
        } elseif ($identity && $post->status === 'borrador') {
            $canDelete = true;
        }
        ?>
        
        <!-- Form para eliminar (Admin siempre, usuarios normales solo en borrador) -->
        <?php if ($canDelete): ?>
            <?= $this->Form->create(null, [
                'id' => 'delete-form-' . $post->id,
                'url' => ['action' => 'delete', $post->id],
                'method' => 'post',
                'style' => 'display: none;'
            ]) ?>
            <?= $this->Form->end() ?>
        <?php endif; ?>
        
        <!-- Form para toggle status (solo para admin y si no es borrador) -->
        <?php if ($identity && $identity->role === 'admin' && $post->status !== 'borrador'): ?>
            <?= $this->Form->create(null, [
                'id' => 'toggle-form-' . $post->id,
                'url' => ['action' => 'toggleStatusActivo', $post->id],
                'method' => 'post',
                'style' => 'display: none;'
            ]) ?>
            <?= $this->Form->end() ?>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<script>
// Variables globales para el modal de confirmación
let deleteData = null;

$(document).ready(function() {
    //console.log('DOM listo con jQuery');
    //console.log('Token CSRF:', $('meta[name="csrfToken"]').attr('content'));
    console.log('Inputs de views encontrados:', $('.views-input').length);
    
    // Compartir enlace - usando la clase share-btn como en la versión funcional
    $(document).on('click', '.share-btn', function() {
        const button = this;
        const url = $(this).data('url');
        
        // Agregar efecto de carga
        $(button).addClass('loading');
        
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(url).then(() => {
                showNotification('¡Enlace copiado al portapapeles!', 'success');
            }).catch(() => {
                prompt('Copia el enlace manualmente:', url);
            }).finally(() => {
                $(button).removeClass('loading');
            });
        } else {
            prompt('Copia el enlace manualmente:', url);
            $(button).removeClass('loading');
        }
    });

    // Función mejorada para actualizar views
    function updateViews(input, postId, newViews, originalValue) {
        // Validaciones mejoradas
        if (newViews === originalValue.toString()) {
            return; // No hay cambios
        }
        
        // Validar que sea un número válido y positivo
        const viewsNumber = parseInt(newViews);
        if (isNaN(viewsNumber) || viewsNumber < 0) {
            showNotification('El valor debe ser un número positivo', 'error');
            input.val(originalValue);
            return;
        }
        
        // Mostrar estado de carga
        input.prop('disabled', true).addClass('updating');
        
        // Obtener token CSRF
        const csrfToken = $('meta[name="csrfToken"]').attr('content');
        
        console.log('=== INICIANDO PETICIÓN AJAX ===');
        console.log('URL:', '<?= $this->Url->build(["action" => "updateViews"]) ?>');
        console.log('Post ID:', postId);
        console.log('New Views:', viewsNumber);
        console.log('CSRF Token:', csrfToken);
        
        $.ajax({
            url: '<?= $this->Url->build(["action" => "updateViews"]) ?>',
            method: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-Token': csrfToken  // ✅ CSRF en headers - SOLUCIÓN AL CONFLICTO
            },
            beforeSend: function() {
                console.log('⏳ Enviando petición AJAX...');
            },
            data: JSON.stringify({  // ✅ Datos como JSON limpio sin token CSRF
                id: postId,
                views: viewsNumber
            }),
            success: function(response) {
                console.log('✅ RESPUESTA EXITOSA:');
                console.log('Response type:', typeof response);
                console.log('Response content:', response);
                
                // Manejar respuesta que pueda venir como string
                if (typeof response === 'string') {
                    try {
                        response = JSON.parse(response);
                    } catch (e) {
                        console.log('Error parsing JSON:', e);
                    }
                }
                
                if (response && response.success) {
                    // Actualizar el valor original con el valor devuelto por el servidor
                    const serverViews = response.newViews || viewsNumber;
                    input.data('original-value', serverViews);
                    input.val(serverViews);
                    
                    // Feedback visual de éxito
                    input.removeClass('updating').addClass('success');
                    showNotification('Views actualizados correctamente', 'success');
                    
                    setTimeout(() => input.removeClass('success'), 1500);
                } else {
                    // Error del servidor
                    showNotification(response.message || 'Error al actualizar views', 'error');
                    input.val(originalValue);
                    input.addClass('error');
                    setTimeout(() => input.removeClass('error'), 2000);
                }
            },
            error: function(xhr, status, error) {
                console.log('❌ ERROR AJAX:');
                console.log('Status:', status);
                console.log('Error:', error);
                console.log('Status Code:', xhr.status);
                console.log('Response Text:', xhr.responseText.substring(0, 500));
                
                let errorMessage = 'Error de conexión. Intenta de nuevo.';
                
                // Manejar diferentes tipos de errores
                if (xhr.status === 404) {
                    errorMessage = 'Función no disponible';
                } else if (xhr.status === 403) {
                    errorMessage = 'No tienes permisos para esta acción';
                } else if (xhr.status === 400) {
                    errorMessage = 'Datos inválidos';
                }
                
                showNotification(errorMessage, 'error');
                input.val(originalValue); // Revertir al valor original
                input.addClass('error');
                setTimeout(() => input.removeClass('error'), 2000);
            },
            complete: function() {
                console.log('🏁 Petición AJAX completada');
                input.prop('disabled', false).removeClass('updating');
            }
        });
    }

    // Editar views - al presionar Enter
    $(document).on('keypress', '.views-input', function(e) {
        console.log('Tecla presionada:', e.which);
        
        if (e.which === 13) { // Enter key
            e.preventDefault(); // Prevenir submit de formularios
            console.log('Enter detectado, iniciando actualización...');
            
            const input = $(this);
            const postId = input.data('post-id');
            const newViews = input.val().trim();
            const originalValue = input.data('original-value');
            
            updateViews(input, postId, newViews, originalValue);
            input.blur(); // Quitar focus del input
        }
        
        // Permitir Escape para cancelar
        if (e.which === 27) { // Escape key
            const input = $(this);
            input.val(input.data('original-value'));
            input.blur();
        }
    });

    // Editar views - al perder el focus
    $(document).on('blur', '.views-input', function() {
        const input = $(this);
        const postId = input.data('post-id');
        const newViews = input.val().trim();
        const originalValue = input.data('original-value');
        
        updateViews(input, postId, newViews, originalValue);
    });

    // Prevenir que los formularios se envíen cuando se presiona Enter en views-input
    $(document).on('keydown', '.views-input', function(e) {
        if (e.which === 13) {
            e.stopPropagation();
        }
    });

    // Validación en tiempo real - solo permitir números
    $(document).on('input', '.views-input', function() {
        let value = $(this).val();
        // Remover caracteres no numéricos
        value = value.replace(/[^0-9]/g, '');
        $(this).val(value);
    });

    // Validación del formulario de acciones masivas
    $(document).on('submit', '#bulkActionForm', function(e) {
        const checkedBoxes = $('.select-row:checked');
        const action = $('select[name="bulk_action"]').val();
        
        if (checkedBoxes.length === 0) {
            e.preventDefault();
            showNotification('Debes seleccionar al menos un post', 'warning');
            return false;
        }
        
        if (!action) {
            e.preventDefault();
            showNotification('Debes seleccionar una acción', 'warning');
            return false;
        }
        
        // Confirmación para acciones destructivas
        if (action === 'delete') {
            const confirmed = confirm(`¿Estás seguro de eliminar ${checkedBoxes.length} post(s) seleccionado(s)?`);
            if (!confirmed) {
                e.preventDefault();
                return false;
            }
        }
        
        // Si llegamos aquí, todo está bien
        showNotification(`Procesando ${checkedBoxes.length} post(s)...`, 'info');
    });

    // Función para seleccionar/deseleccionar todos los checkboxes
    $(document).on('change', '#selectAll', function() {
        const isChecked = $(this).prop('checked');
        console.log('Checkbox selectAll:', isChecked);
        $('.select-row').prop('checked', isChecked);
        console.log('Checkboxes individuales seleccionados:', $('.select-row:checked').length);
        
        // Feedback visual opcional
        if (isChecked) {
            showNotification('Todos los posts seleccionados', 'info');
        } else {
            showNotification('Selección cancelada', 'info');
        }
    });

    // Actualizar el estado del checkbox "Seleccionar todos" basado en los checkboxes individuales
    $(document).on('change', '.select-row', function() {
        const totalCheckboxes = $('.select-row').length;
        const checkedCheckboxes = $('.select-row:checked').length;
        
        $('#selectAll').prop('checked', totalCheckboxes === checkedCheckboxes);
        $('#selectAll').prop('indeterminate', checkedCheckboxes > 0 && checkedCheckboxes < totalCheckboxes);
    });

    // Event listeners para modal
    $(document).on('click', '#confirmModal', function(e) {
        if (e.target === this) {
            closeConfirmModal();
        }
    });
    
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            closeConfirmModal();
        }
    });
});

// Función para confirmar eliminación con modal bonito
function confirmDelete(button) {
    const postId = button.getAttribute('data-post-id');
    const postTitle = button.getAttribute('data-post-title');
    
    deleteData = { postId, postTitle };
    
    document.getElementById('confirmMessage').textContent = 
        `¿Estás seguro de eliminar "${postTitle}"?`;
    
    const modal = document.getElementById('confirmModal');
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
}

// Función para cerrar el modal
function closeConfirmModal() {
    const modal = document.getElementById('confirmModal');
    modal.classList.remove('show');
    document.body.style.overflow = '';
    deleteData = null;
}

// Función para ejecutar la eliminación
function executeDelete() {
    if (deleteData) {
        const form = document.getElementById(`delete-form-${deleteData.postId}`);
        if (form) {
            form.submit();
        }
    }
    closeConfirmModal();
}

// Función mejorada para mostrar notificaciones
function showNotification(message, type = 'info') {
    $('.notification').remove();
    
    const colors = {
        success: '#10b981',
        error: '#ef4444',
        info: '#3b82f6',
        warning: '#f59e0b'
    };
    
    const icons = {
        success: 'fas fa-check-circle',
        error: 'fas fa-exclamation-triangle',
        info: 'fas fa-info-circle',
        warning: 'fas fa-exclamation-circle'
    };
    
    const notification = $(`
        <div class="notification" style="
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px 20px;
            border-radius: 8px;
            color: white;
            font-weight: 500;
            z-index: 10001;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            max-width: 300px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            background: ${colors[type] || colors.info};
            display: flex;
            align-items: center;
            gap: 8px;
        ">
            <i class="${icons[type] || icons.info}"></i>
            <span>${message}</span>
        </div>
    `);
    
    $('body').append(notification);
    
    setTimeout(() => {
        notification.css('transform', 'translateX(0)');
    }, 100);
    
    setTimeout(() => {
        notification.css('transform', 'translateX(100%)');
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}
</script>

<script>
    // JavaScript para mejorar Flash Messages
document.addEventListener('DOMContentLoaded', function() {
    
    // Función para auto-cerrar mensajes después de 5 segundos
    function autoHideFlashMessages() {
        const flashMessages = document.querySelectorAll('.flash-message');
        
        flashMessages.forEach(function(message) {
            // Agregar botón de cerrar
            if (!message.querySelector('.flash-close')) {
                const closeBtn = document.createElement('button');
                closeBtn.innerHTML = '×';
                closeBtn.className = 'flash-close';
                closeBtn.onclick = function() {
                    hideFlashMessage(message);
                };
                message.appendChild(closeBtn);
            }
            
            // Auto-cerrar después de 5 segundos (solo mensajes de éxito)
            if (message.classList.contains('flash-success')) {
                setTimeout(function() {
                    if (message.parentNode) {
                        hideFlashMessage(message);
                    }
                }, 5000);
            }
        });
    }
    
    // Función para ocultar mensaje con animación
    function hideFlashMessage(message) {
        message.classList.add('flash-hiding');
        setTimeout(function() {
            if (message.parentNode) {
                message.parentNode.removeChild(message);
            }
        }, 500);
    }
    
    // Función para crear mensajes dinámicos
    window.showFlashMessage = function(type, text) {
        const container = document.querySelector('.flash-messages-container') || document.body;
        
        const message = document.createElement('div');
        message.className = `flash-message flash-${type}`;
        message.textContent = text;
        
        // Botón de cerrar
        const closeBtn = document.createElement('button');
        closeBtn.innerHTML = '×';
        closeBtn.className = 'flash-close';
        closeBtn.onclick = function() {
            hideFlashMessage(message);
        };
        message.appendChild(closeBtn);
        
        container.appendChild(message);
        
        // Auto-cerrar mensajes de éxito
        if (type === 'success') {
            setTimeout(function() {
                if (message.parentNode) {
                    hideFlashMessage(message);
                }
            }, 5000);
        }
        
        return message;
    };
    
    // Mejorar confirmaciones existentes
    window.confirmAction = function(message, callback) {
        const result = confirm(message);
        if (result && callback) {
            callback();
        }
        return result;
    };
    
    // Confirmación específica para cambio de estado
    window.confirmStatusChange = function(postTitle, currentStatus, newStatus) {
        let message = '';
        let icon = '';
        
        switch (newStatus) {
            case 'activo':
                message = `¿Activar "${postTitle}"?`;
                icon = '🟢';
                break;
            case 'inactivo':
                message = `¿Desactivar "${postTitle}"?`;
                icon = '🟠';
                break;
            case 'programado':
                message = `¿Regresar "${postTitle}" a estado programado?`;
                icon = '🔵';
                break;
            default:
                message = `¿Cambiar estado de "${postTitle}"?`;
                icon = '🔄';
        }
        
        return confirm(`${icon} ${message}`);
    };
    
    // Inicializar al cargar la página
    autoHideFlashMessages();
});

// Función para mostrar mensaje de estado actualizado
function showStatusUpdateMessage(postTitle, newStatus, scheduledDate = null) {
    let message = '';
    let type = 'success';
    
    switch (newStatus) {
        case 'activo':
            message = `✅ "${postTitle}" está ahora ACTIVO y visible al público`;
            break;
        case 'inactivo':
            message = `🟠 "${postTitle}" está ahora INACTIVO y oculto del público`;
            break;
        case 'programado':
            if (scheduledDate) {
                message = `🔵 "${postTitle}" programado para publicarse el ${scheduledDate}`;
            } else {
                message = `🔵 "${postTitle}" regresó a estado programado`;
            }
            break;
        default:
            message = `🔄 Estado de "${postTitle}" actualizado a ${newStatus}`;
    }
    
    if (window.showFlashMessage) {
        window.showFlashMessage(type, message);
    }
}
</script>