<?php
$this->assign('title', 'Gestión de Leads');
?>

<div class="leads-index">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>📧 Gestión de Leads</h1>
    </div>

    <!-- Dashboard de Estadísticas -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="glass-card p-3 text-center">
                <h3 class="text-primary"><?= $stats['total'] ?></h3>
                <p class="mb-0">Total Leads</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="glass-card p-3 text-center">
                <h3 class="text-warning"><?= $stats['nuevos'] ?></h3>
                <p class="mb-0">Nuevos</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="glass-card p-3 text-center">
                <h3 class="text-info"><?= $stats['hoy'] ?></h3>
                <p class="mb-0">Hoy</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="glass-card p-3 text-center">
                <h3 class="text-success"><?= $stats['convertidos'] ?></h3>
                <p class="mb-0">Convertidos</p>
            </div>
        </div>
    </div>

    <!-- Filtros -->
    <div class="glass-card p-3 mb-4">
        <?= $this->Form->create(null, ['type' => 'get', 'class' => 'row g-3']) ?>
            <div class="col-md-4">
                <?= $this->Form->control('search', [
                    'label' => 'Buscar',
                    'placeholder' => 'Nombre, email o mensaje...',
                    'class' => 'form-control',
                    'value' => $this->request->getQuery('search')
                ]) ?>
            </div>
            <div class="col-md-3">
                <?= $this->Form->control('status', [
                    'label' => 'Estado',
                    'type' => 'select',
                    'options' => [
                        'nuevo' => 'Nuevo',
                        'contactado' => 'Contactado',
                        'convertido' => 'Convertido',
                        'descartado' => 'Descartado'
                    ],
                    'empty' => 'Todos los estados',
                    'class' => 'form-select',
                    'value' => $this->request->getQuery('status')
                ]) ?>
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <button type="submit" class="btn btn-primary me-2">🔍 Buscar</button>
                <?= $this->Html->link('🔄 Limpiar', ['action' => 'index'], ['class' => 'btn btn-outline-secondary']) ?>
            </div>
        <?= $this->Form->end() ?>
    </div>

    <!-- Tabla de Leads -->
    <div class="glass-card">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('created', 'Fecha') ?></th>
                        <th><?= $this->Paginator->sort('name', 'Nombre') ?></th>
                        <th><?= $this->Paginator->sort('email', 'Email') ?></th>
                        <th>Teléfono</th>
                        <th>Mensaje</th>
                        <th><?= $this->Paginator->sort('status', 'Estado') ?></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($leads as $lead): ?>
                    <tr>
                        <td>
                            <small>
                                <?= $lead->created->format('d/m/Y') ?><br>
                                <span class="text-muted"><?= $lead->created->format('H:i') ?></span>
                            </small>
                        </td>
                        <td>
                            <strong><?= h($lead->name) ?></strong>
                        </td>
                        <td>
                            <a href="mailto:<?= h($lead->email) ?>" class="text-decoration-none">
                                <?= h($lead->email) ?>
                            </a>
                        </td>
                        <td>
                            <?php if ($lead->phone): ?>
                                <a href="tel:<?= h($lead->phone) ?>" class="text-decoration-none">
                                    <?= h($lead->phone) ?>
                                </a>
                            <?php else: ?>
                                <span class="text-muted">-</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div style="max-width: 200px;">
                                <?= $this->Text->truncate(h($lead->message), 80, ['ellipsis' => '...']) ?>
                            </div>
                        </td>
                        <td>
                            <div class="status-container" data-lead-id="<?= $lead->id ?>">
                                <?= $lead->getStatusBadge() ?>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <?= $this->Html->link('👁️', ['action' => 'view', $lead->id], [
                                    'class' => 'btn btn-sm btn-outline-info',
                                    'title' => 'Ver detalles'
                                ]) ?>
                                
                                <!-- Dropdown para cambiar estado -->
                                <div class="dropdown">
    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Estado
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item change-status" href="#" data-id="<?= $lead->id ?>" data-status="nuevo">🆕 Nuevo</a></li>
        <li><a class="dropdown-item change-status" href="#" data-id="<?= $lead->id ?>" data-status="contactado">📞 Contactado</a></li>
        <li><a class="dropdown-item change-status" href="#" data-id="<?= $lead->id ?>" data-status="convertido">✅ Convertido</a></li>
        <li><a class="dropdown-item change-status" href="#" data-id="<?= $lead->id ?>" data-status="descartado">❌ Descartado</a></li>
    </ul>
</div>
                                
                                <?= $this->Form->postLink('🗑️', ['action' => 'delete', $lead->id], [
                                    'confirm' => '¿Seguro que quieres eliminar este lead?',
                                    'class' => 'btn btn-sm btn-outline-danger',
                                    'title' => 'Eliminar'
                                ]) ?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Paginación -->
        <div class="d-flex justify-content-between align-items-center p-3">
            <div>
                <small class="text-muted">
                    <?= $this->Paginator->counter('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} leads') ?>
                </small>
            </div>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <?= $this->Paginator->first('« Primera') ?>
                    <?= $this->Paginator->prev('‹ Anterior') ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next('Siguiente ›') ?>
                    <?= $this->Paginator->last('Última »') ?>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- JavaScript para cambio de estado -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Cambiar estado via AJAX
    document.querySelectorAll('.change-status').forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const leadId = this.dataset.id;
            const newStatus = this.dataset.status;
            const statusContainer = document.querySelector(`[data-lead-id="${leadId}"]`);
            
            fetch('/leads/update-status', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-CSRF-Token': document.querySelector('meta[name="csrfToken"]').getAttribute('content')
                },
                body: `id=${leadId}&status=${newStatus}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    statusContainer.innerHTML = data.newBadge;
                    
                    // Mostrar notificación temporal
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success alert-dismissible fade show position-fixed';
                    alert.style.top = '20px';
                    alert.style.right = '20px';
                    alert.style.zIndex = '9999';
                    alert.innerHTML = `
                        ${data.message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    `;
                    document.body.appendChild(alert);
                    
                    setTimeout(() => {
                        if (alert.parentNode) alert.parentNode.removeChild(alert);
                    }, 3000);
                }
            });
        });
    });
});
</script>