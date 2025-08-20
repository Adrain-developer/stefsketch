<?php
/**
 * Element: notifications
 * Requirements: jQuery or vanilla JS (this file's JS uses vanilla fetch)
 *
 * Usage: echo $this->element('notifications');
 */
$user = $this->request->getAttribute('identity');
?>
<div id="notification-widget" class="notification-widget" style="position:relative;">
    <button id="notif-toggle" class="notif-btn" aria-label="Notificaciones" style="position:relative;">
        <span class="badge" id="notif-count" style="display:none; position:absolute; top:-6px; right:-6px; background:#e74c3c; color:#fff; border-radius:50%; padding:3px 6px; font-size:12px;">0</span>
        🔔
    </button>

    <div id="notif-dropdown" class="notif-dropdown" style="display:none; position:absolute; right:0; top:36px; width:320px; background:#fff; border:1px solid #ddd; box-shadow:0 6px 18px rgba(0,0,0,.08); z-index:9999;">
        <div style="padding:8px 12px; border-bottom:1px solid #eee; display:flex; justify-content:space-between; align-items:center;">
            <strong>Notificaciones</strong>
            <button id="notif-mark-all" class="btn-link" style="font-size:12px;">Marcar todas leídas</button>
        </div>
        <div id="notif-list" style="max-height:320px; overflow:auto;"></div>
        <div style="padding:8px; border-top:1px solid #eee; text-align:center;">
            <a href="<?= $this->Url->build(['controller'=>'Notifications','action'=>'index']) ?>">Ver todas</a>
        </div>
    </div>
</div>

<?= $this->Html->script('/js/notifications.js') ?>
<script>
    // Inicializa el id del usuario para JS (solo si autenticado)
    window.NOTIF_CURRENT_USER_ID = <?= $user ? (int)$user->id : 'null' ?>;
</script>
