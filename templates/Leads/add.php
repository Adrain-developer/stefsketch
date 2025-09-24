<?php
$this->assign('title', 'Contacto');
?>

<!-- Esta vista solo se usa si acceden directamente a /leads/add -->
<div class="contact-form-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="glass-card p-4">
                    <h2 class="text-center mb-4">💬 Contáctanos</h2>
                    
                    <?= $this->Form->create($lead, ['id' => 'contactForm']) ?>
                    
                    <!-- Honeypot anti-spam (campo oculto) -->
                    <div style="display: none;">
                        <?= $this->Form->control('website', ['label' => false, 'tabindex' => '-1']) ?>
                    </div>
                    
                    <?= $this->Form->control('name', [
                        'label' => 'Nombre *',
                        'class' => 'form-control',
                        'required' => true,
                        'placeholder' => 'Tu nombre completo'
                    ]) ?>
                    
                    <?= $this->Form->control('email', [
                        'label' => 'Email *',
                        'class' => 'form-control',
                        'required' => true,
                        'placeholder' => 'tu@email.com'
                    ]) ?>
                    
                    <?= $this->Form->control('phone', [
                        'label' => 'Teléfono',
                        'class' => 'form-control',
                        'placeholder' => '+52 123 456 7890'
                    ]) ?>
                    
                    <?= $this->Form->control('message', [
                        'label' => 'Mensaje *',
                        'type' => 'textarea',
                        'class' => 'form-control',
                        'required' => true,
                        'rows' => 4,
                        'placeholder' => 'Cuéntanos sobre tu proyecto o consulta...'
                    ]) ?>
                    
                    <div class="d-grid mt-3">
                        <?= $this->Form->button('📨 Enviar Mensaje', ['class' => 'btn btn-primary']) ?>
                    </div>
                    
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>