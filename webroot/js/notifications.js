const COUNT = document.getElementById('notif-count');
const LIST = document.getElementById('notif-list');
const BTN = document.getElementById('notif-btn');

function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
}

function markRead(ids) {
    if (!ids || !ids.length) return Promise.resolve();
    return fetch('/notifications/mark-read.json', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-Token': document.querySelector('meta[name="csrfToken"]').content
        },
        body: JSON.stringify({ids: ids})
    }).then(res => {
        if (!res.ok) throw new Error('Failed to mark read');
        return res.json();
    });
}

function renderList(items) {
    if (!LIST) return;
    LIST.innerHTML = '';
    if (!items.length) {
        LIST.innerHTML = '<div style="padding:12px; color:#666">No hay notificaciones</div>';
        return;
    }
    items.forEach(function(n) {
        const div = document.createElement('div');
        div.className = 'notif-item';
        div.style = 'padding:10px; border-bottom:1px solid #f1f1f1; cursor:pointer;';
        if (n.is_read == 0) div.style.background = '#f9fbff';
        const title = document.createElement('div');
        title.innerHTML = '<strong>' + escapeHtml(n.title) + '</strong>';
        const body = document.createElement('div');
        body.style = 'font-size:13px; color:#555; margin-top:4px;';
        body.textContent = n.body ? n.body : '';
        const time = document.createElement('div');
        time.style = 'font-size:11px; color:#999; margin-top:6px;';
        time.textContent = n.created;
        div.appendChild(title);
        div.appendChild(body);
        div.appendChild(time);

        div.addEventListener('click', function(e) {
            e.preventDefault();
            if (n.is_read) {
                // Para notificaciones públicas o ya leídas, solo redirigir
                if (n.url) window.location.href = n.url;
                return;
            }
            markRead([n.id]).then(function() {
                fetchNotifications();
                if (n.url) window.location.href = n.url;
            }).catch(function(err) {
                console.error('Error marcando notificación como leída:', err);
            });
        });

        LIST.appendChild(div);
    });
}

function fetchNotifications() {
    const user = document.querySelector('meta[name="user-id"]');
    const url = user ? '/notifications/check.json' : '/notifications/public.json';
    
    fetch(url, {
        headers: { 'Accept': 'application/json' }
    }).then(res => {
        if (!res.ok) throw new Error('Notif fetch error');
        return res.json();
    }).then(data => {
        if (COUNT) COUNT.textContent = data.count || 0;
        renderList(data.data || []);
    }).catch(err => {
        console.error(err);
        if (COUNT) COUNT.textContent = '0';
        if (LIST) LIST.innerHTML = '<div style="padding:12px; color:#666">Error al cargar</div>';
    });
}

if (BTN) {
    BTN.addEventListener('click', function() {
        LIST.style.display = LIST.style.display === 'block' ? 'none' : 'block';
    });
}

setInterval(fetchNotifications, 15000);
fetchNotifications();