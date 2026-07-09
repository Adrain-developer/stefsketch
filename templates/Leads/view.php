<?php
$this->assign('title', 'Lead: ' . $lead->name);
?>

<style>
    #statusSelect option {
    background-color: #343a40;
    color: #ffffff; /* Ajusta el color del texto si es necesario */
}
</style>

<div class="lead-view">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>📧 Detalles del Lead</h1>
        <?= $this->Html->link('← Volver a lista', ['action' => 'index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <div class="row">
        <!-- Información Principal -->
        <div class="col-md-8">
            <div class="glass-card p-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5>👤 Información de Contacto</h5>
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Nombre:</strong></td>
                                <td><?= h($lead->name) ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>
                                    <a href="mailto:<?= h($lead->email) ?>" class="text-decoration-none">
                                        <?= h($lead->email) ?>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Teléfono:</strong></td>
                                <td>
                                    <?php if ($lead->phone): ?>
                                        <a href="tel:<?= h($lead->phone) ?>" class="text-decoration-none">
                                            <?= h($lead->phone) ?>
                                        </a>
                                    <?php else: ?>
                                        <span class="text-muted">No proporcionado</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h5>📊 Información del Sistema</h5>
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Estado:</strong></td>
                                <td><?= $lead->getStatusBadge() ?></td>
                            </tr>
                            <tr>
                                <td><strong>Fecha:</strong></td>
                                <td><?= $lead->created->format('d/m/Y H:i') ?></td>
                            </tr>
                            <tr>
                                <td><strong>Fuente:</strong></td>
                                <td>
                                    <?php if ($lead->source): ?>
                                        <code><?= h($lead->source) ?></code>
                                    <?php else: ?>
                                        <span class="text-muted">No disponible</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <!--<tr>
                                <td><strong>IP:</strong></td>
                                <td><code><?= h($lead->ip_address) ?></code></td>
                            </tr>-->
                        </table>
                    </div>
                </div>

                <hr>

                <div class="mb-3">
                    <h5>💬 Mensaje</h5>
                    <div class="p-3 bg-dark rounded">
                        <?= nl2br(h($lead->message)) ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Acciones -->
        <div class="col-md-4">
            <div class="glass-card p-4">
                <h5>⚡ Acciones Rápidas</h5>
                
                <!-- Cambiar Estado -->
                <div class="mb-3">
                    <label class="form-label">Cambiar Estado:</label>
                    <select class="form-select bg-dark" id="statusSelect">
                        <option value="nuevo" <?= $lead->status === 'nuevo' ? 'selected' : '' ?>>🆕 Nuevo</option>
                        <option value="contactado" <?= $lead->status === 'contactado' ? 'selected' : '' ?>>📞 Contactado</option>
                        <option value="convertido" <?= $lead->status === 'convertido' ? 'selected' : '' ?>>✅ Convertido</option>
                        <option value="descartado" <?= $lead->status === 'descartado' ? 'selected' : '' ?>>❌ Descartado</option>
                    </select>
                </div>

                <div class="d-grid gap-2">
                    <!-- Email directo -->
                    <a href="mailto:<?= h($lead->email) ?>?subject=Re: Tu consulta en nuestro portafolio&body=Hola <?= h($lead->name) ?>,

Gracias por contactarnos..." class="btn btn-primary">
                        📧 Responder por Email
                    </a>

                    <!-- WhatsApp si hay teléfono -->
                    <?php if ($lead->phone): ?>
                        <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $lead->phone) ?>?text=Hola <?= h($lead->name) ?>, recibimos tu mensaje..." 
                           target="_blank" class="btn btn-success">
                            📱 WhatsApp
                        </a>
                    <?php endif; ?>

                    <!-- Editar -->
                    <?= $this->Html->link('✏️ Editar', ['action' => 'edit', $lead->id], ['class' => 'btn btn-warning']) ?>

                    <!-- Eliminar -->
                    <?= $this->Form->postLink('🗑️ Eliminar', ['action' => 'delete', $lead->id], [
                        'confirm' => '¿Seguro que quieres eliminar este lead?',
                        'class' => 'btn btn-danger'
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('statusSelect').addEventListener('change', function() {
    const leadId = <?= $lead->id ?>;
    const newStatus = this.value;
    
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
            location.reload();
        }
    });
});
</script>