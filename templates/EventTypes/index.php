<div class="main-content">
    <div class="container-categories">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; flex-wrap: wrap; gap: 15px;">
            <div>
                <h1 class="title" style="margin:0;">🎨 Tipo de Trabajo</h1>
                <p class="form-subtitle" style="margin: 5px 0 0 0;">Ej: Digital Art, Traditional, Commissions</p>
            </div>
            <?= $this->Html->link('<span class="add-icon">+</span> Nuevo Tipo', ['action' => 'add'], ['class' => 'add-button', 'escape' => false]) ?>
        </div>

        <?php if (empty($eventTypes)): ?>
            <div class="empty-state">
                <div class="empty-icon" style="font-size: 48px; margin-bottom: 20px;">🎨</div>
                <h3>No hay Tipos de trabajo</h3>
                <p>Crea tu primer tipo de trabajo para comenzar</p>
            </div>
        <?php else: ?>
            
            <div class="table-container d-none d-md-block">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th style="text-align: right;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($eventTypes as $eventType): ?>
                        <tr>
                            <td style="font-weight: bold; color: #fff;"><?= h($eventType->name) ?></td>
                            <td style="text-align: right;">
                                <?= $this->Html->link('Ver', ['action' => 'view', $eventType->id], ['class' => 'action-btn btn-view']) ?>
                                <?= $this->Html->link('Editar', ['action' => 'edit', $eventType->id], ['class' => 'action-btn btn-edit']) ?>
                                <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $eventType->id], [
                                    'confirm' => '¿Estás segura de eliminar este tipo de trabajo?', 
                                    'class' => 'action-btn btn-delete'
                                ]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="d-md-none mt-4">
                <?php foreach ($eventTypes as $eventType): ?>
                <div class="mobile-card">
                    <span class="mobile-card-title"><?= h($eventType->name) ?></span>
                    <div style="display: flex; gap: 5px;">
                        <?= $this->Html->link('<i class="fas fa-edit"></i>', ['action' => 'edit', $eventType->id], ['class' => 'action-btn btn-edit', 'escape' => false, 'style' => 'margin:0;']) ?>
                        <?= $this->Form->postLink('<i class="fas fa-trash"></i>', ['action' => 'delete', $eventType->id], [
                            'confirm' => '¿Eliminar?', 
                            'class' => 'action-btn btn-delete', 
                            'escape' => false, 
                            'style' => 'margin:0;'
                        ]) ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>

        <?php if ($this->Paginator->total() > 1): ?>
        <div class="pagination-container">
            <div class="pagination-info">
                <?= $this->Paginator->counter('Mostrando {{start}} - {{end}} de {{count}} tipos') ?>
            </div>
            <nav>
                <ul class="pagination">
                    <?= $this->Paginator->first('«', ['class' => 'page-link']) ?>
                    <?= $this->Paginator->prev('‹', ['class' => 'page-link']) ?>
                    <?= $this->Paginator->numbers(['class' => 'page-link']) ?>
                    <?= $this->Paginator->next('›', ['class' => 'page-link']) ?>
                    <?= $this->Paginator->last('»', ['class' => 'page-link']) ?>
                </ul>
            </nav>
        </div>
        <?php endif; ?>

    </div>
</div>