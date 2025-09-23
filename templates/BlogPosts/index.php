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


<?= $this->Html->script('https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js', ['block' => true]) ?>

<?= $this->Html->css(['custom-admin'.'.css?ver=001']) ?>

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
                placeholder="Buscar por título..." value="<?= $this->request->getQuery('search') ?>">
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


        <!-- Tabla -->
        <div class="table-wrapper table-responsive">
            <table class="table-glass table">
                <thead>
                    <tr>
                        <th>Portada</th>
                        <th>Título Post</th>
                        <th>Evento</th>
                        <th>Tema</th>
                        <th>SubTemas</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogPosts as $post): ?>
                    <tr>
                        <td>
                            <?php if ($post->banner): ?>
                                <a href="<?= $this->Url->build(['action' => 'edit', $post->id]) ?>">
                                    <?= $this->Html->image($post->banner, ['class' => 'thumbnail-sm']) ?>
                                </a>
                            <?php else: ?>
                                <span style="color:#aaa;">N/A</span>
                            <?php endif; ?>
                        </td>
                        
                        <td><?= h($post->title) ?></td>
                        <td><?= $post->event_type->name ?? '<span style="color:#aaa;">Sin evento</span>' ?></td>
                        
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
           
            <?php foreach ($blogPosts as $post): ?>
                <div class="card mb-2 shadow-sm" style="border-radius: 18px; position: relative; overflow: hidden;">                    
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