<style>

/* Contenedor principal */
.event-types-container {
    background: rgba(255, 255, 255, 0.15);
    border-radius: 16px;
    padding: 30px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    margin: 20px 0;
}

.event-types-header {
    margin-bottom: 24px;
}

.event-types-title {
    font-size: 28px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 8px;
}

.event-types-subtitle {
    font-size: 14px;
    color: #718096;
}

/* ========================================
   🖥️ VISTA ESCRITORIO - TABLA
   ======================================== */
.event-types-table {
    width: 100%;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 
        8px 8px 20px #d1d9e6,
        -8px -8px 20px #ffffff;
    margin-bottom: 20px;
}

.event-types-table thead {
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.event-types-table th {
    padding: 16px 20px;
    text-align: left;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: white;
}

.event-types-table tbody tr {
    border-bottom: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}

.event-types-table tbody tr:last-child {
    border-bottom: none;
}

.event-types-table tbody tr:hover {
    background: #f7fafc;
    transform: translateX(4px);
}

.event-types-table td {
    padding: 16px 20px;
    color: #2d3748;
    font-size: 15px;
}

.event-types-table td:first-child {
    font-weight: 600;
}

/* Botones de acción */
.action-link {
    display: inline-block;
    padding: 6px 14px;
    margin: 0 4px;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 
        4px 4px 8px #d1d9e6,
        -4px -4px 8px #ffffff;
}

.action-link.view {
    background: #f0f0f3;
    color: #667eea;
}

.action-link.view:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
}

.action-link.edit {
    background: #f0f0f3;
    color: #48bb78;
}

.action-link.edit:hover {
    background: #48bb78;
    color: white;
    transform: translateY(-2px);
}

.action-link.delete {
    background: #f0f0f3;
    color: #f56565;
}

.action-link.delete:hover {
    background: #f56565;
    color: white;
    transform: translateY(-2px);
}

/* Botón agregar nuevo */
.btn-add-new {
    display: inline-block;
    padding: 12px 24px;
    background: #f0f0f3;
    border-radius: 12px;
    color: #667eea;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 
        6px 6px 12px #d1d9e6,
        -6px -6px 12px #ffffff;
}

.btn-add-new:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
    box-shadow: 
        8px 8px 16px #d1d9e6,
        -8px -8px 16px #ffffff;
}

/* ========================================
   📱 VISTA MÓVIL - CARDS OPTIMIZADAS
   ======================================== */
.event-types-cards {
    display: none;
}

.event-type-card {
    background: white;
    border-radius: 12px;
    padding: 16px 20px;
    margin-bottom: 12px;
    box-shadow: 
        6px 6px 15px #d1d9e6,
        -6px -6px 15px #ffffff;
    transition: all 0.3s ease;
}

.event-type-card:hover {
    transform: translateX(4px);
    box-shadow: 
        8px 8px 18px #d1d9e6,
        -8px -8px 18px #ffffff;
}

.event-type-card-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
}

.event-type-card-name {
    font-size: 16px;
    font-weight: 700;
    color: #2d3748;
    flex: 1;
}

.event-type-card-actions {
    display: flex;
    align-items: center;
    gap: 12px;
    white-space: nowrap;
}

.event-type-card-actions .action-link {
    padding: 6px 12px;
    font-size: 13px;
    box-shadow: 
        3px 3px 6px #d1d9e6,
        -3px -3px 6px #ffffff;
}

.event-type-card-actions .separator {
    color: #cbd5e0;
    font-weight: 300;
}

/* Botón agregar en móvil */
.btn-add-mobile {
    display: none;
    width: 100%;
    margin-top: 16px;
    text-align: center;
}

/* Empty state */
.event-types-empty {
    text-align: center;
    padding: 60px 20px;
    color: #718096;
}

.event-types-empty-icon {
    font-size: 64px;
    margin-bottom: 16px;
    opacity: 0.5;
}

.event-types-empty-text {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
}

.event-types-empty-subtext {
    font-size: 14px;
}

/* ========================================
   📱 RESPONSIVE
   ======================================== */
@media (max-width: 768px) {
    .event-types-container {
        padding: 20px 15px;
    }
    
    .event-types-title {
        font-size: 24px;
    }
    
    /* Ocultar tabla en móvil */
    .event-types-table {
        display: none;
    }
    
    /* Mostrar cards en móvil */
    .event-types-cards {
        display: block;
    }
    
    /* Ocultar botón desktop, mostrar móvil */
    .btn-add-desktop {
        display: none;
    }
    
    .btn-add-mobile {
        display: block;
    }
}

/* ========================================
   📄 PAGINADO
   ======================================== */
.pagination-container {
    margin-top: 30px;
    padding-top: 20px;
    border-top: 2px solid #e2e8f0;
}

.pagination-info {
    text-align: center;
    font-size: 14px;
    color: #718096;
    margin-bottom: 16px;
    font-weight: 500;
}

.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

.page-link {
    display: inline-block;
    min-width: 40px;
    height: 40px;
    padding: 0 12px;
    background: #f0f0f3;
    border: none;
    border-radius: 10px;
    color: #4a5568;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    text-align: center;
    line-height: 40px;
    transition: all 0.3s ease;
    box-shadow: 
        4px 4px 8px #d1d9e6,
        -4px -4px 8px #ffffff;
}

.page-link:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
    box-shadow: 
        6px 6px 12px #d1d9e6,
        -6px -6px 12px #ffffff;
}

.page-link.active {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    box-shadow: 
        inset 4px 4px 8px rgba(0, 0, 0, 0.2),
        inset -4px -4px 8px rgba(255, 255, 255, 0.1);
    cursor: default;
    pointer-events: none;
}

.page-link.disabled {
    opacity: 0.4;
    cursor: not-allowed;
    pointer-events: none;
}

@media (max-width: 768px) {
    .pagination {
        gap: 6px;
    }
    
    .page-link {
        min-width: 36px;
        height: 36px;
        line-height: 36px;
        font-size: 13px;
        padding: 0 10px;
    }
    
    .pagination-info {
        font-size: 13px;
    }
}
</style>

<div class="event-types-container">
    <div class="event-types-header">
        <h1 class="event-types-title">🎨 Tipo de Trabajo</h1>
        <p class="event-types-subtitle">Ej: Digital Art, Traditional, Commissions</p>
    </div>

    <?php if (empty($eventTypes)): ?>
        <div class="event-types-empty">
            <div class="event-types-empty-icon">🎨</div>
            <div class="event-types-empty-text">No hay Tipo de trabajo</div>
            <div class="event-types-empty-subtext">Crea tu primer tipo de trabajo para comenzar</div>
        </div>
    <?php else: ?>
        
        <!-- 🖥️ VISTA ESCRITORIO - TABLA -->
        <table class="event-types-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventTypes as $eventType): ?>
                <tr>
                    <td><?= h($eventType->name) ?></td>
                    <td>
                        <?= $this->Html->link('Ver', ['action' => 'view', $eventType->id], ['class' => 'action-link view']) ?>
                        <?= $this->Html->link('Editar', ['action' => 'edit', $eventType->id], ['class' => 'action-link edit']) ?>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $eventType->id], [
                            'confirm' => '¿Estás segura de eliminar este tipo de evento?',
                            'class' => 'action-link delete'
                        ]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- 📱 VISTA MÓVIL - CARDS OPTIMIZADAS -->
        <div class="event-types-cards">
            <?php foreach ($eventTypes as $eventType): ?>
            <div class="event-type-card">
                <div class="event-type-card-content">
                    <span class="event-type-card-name"><?= h($eventType->name) ?></span>
                    <div class="event-type-card-actions">
                        <?= $this->Html->link('Editar', ['action' => 'edit', $eventType->id], ['class' => 'action-link edit']) ?>
                        <span class="separator">|</span>
                        <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $eventType->id], [
                            'confirm' => '¿Estás segura de eliminar este tipo de trabajo?',
                            'class' => 'action-link delete'
                        ]) ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>

    <!-- Botón agregar nuevo (desktop) -->
    <div class="btn-add-desktop">
        <?= $this->Html->link('+ Agregar nuevo tipo de trabajo', ['action' => 'add'], ['class' => 'btn-add-new']) ?>
    </div>

    <!-- Botón agregar nuevo (móvil) -->
    <div class="btn-add-mobile">
        <?= $this->Html->link('+ Agregar nuevo', ['action' => 'add'], ['class' => 'btn-add-new']) ?>
    </div>

    <!-- 📄 PAGINADO -->
    <?php if ($this->Paginator->total() > 1): ?>
    <div class="pagination-container">
        <div class="pagination-info">
            <?= $this->Paginator->counter('Mostrando {{start}} - {{end}} de {{count}} tipos de trabajo') ?>
        </div>
        
        <nav class="pagination">
            <?= $this->Paginator->first('« Primera', ['class' => 'page-link']) ?>
            <?= $this->Paginator->prev('‹ Anterior', ['class' => 'page-link']) ?>
            <?= $this->Paginator->numbers([
                'class' => 'page-link',
                'currentClass' => 'page-link active'
            ]) ?>
            <?= $this->Paginator->next('Siguiente ›', ['class' => 'page-link']) ?>
            <?= $this->Paginator->last('Última »', ['class' => 'page-link']) ?>
        </nav>
    </div>
    <?php endif; ?>
</div>