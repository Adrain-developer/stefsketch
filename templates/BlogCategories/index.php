<?php $currentUser = $this->request->getAttribute('identity'); ?>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    /*background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);*/
    min-height: 100vh;
    color: #2d3748;
}

.main-content {
    padding: 20px;
}

.container-categories {
    max-width: 1200px;
    margin: 0 auto;
    background: #f7fafc;
    border-radius: 30px;
    padding: 40px;
    box-shadow: 
        20px 20px 60px #d1d9e6,
        -20px -20px 60px #ffffff;
    position: relative;
    overflow: hidden;
}

.container-categories::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #667eea, #764ba2, #f093fb, #f5576c);
    background-size: 300% 300%;
    animation: gradientShift 3s ease infinite;
}

@keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.header {
    text-align: center;
    margin-bottom: 40px;
}

.title {
    font-size: clamp(28px, 5vw, 42px);
    font-weight: 800;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 20px;
    letter-spacing: -0.5px;
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

.categories-grid {
    display: grid;
    gap: 24px;
    margin-top: 40px;
}

@media (min-width: 768px) {
    .categories-grid {
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    }
}

.category-card {
    background: #f7fafc;
    border-radius: 24px;
    padding: 28px;
    box-shadow: 
        12px 12px 30px #d1d9e6,
        -12px -12px 30px #ffffff;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.category-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #667eea, #764ba2);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.category-card:hover::before {
    transform: scaleX(1);
}

.category-card:hover {
    transform: translateY(-8px);
    box-shadow: 
        16px 16px 40px #d1d9e6,
        -16px -16px 40px #ffffff;
}

.category-name {
    font-size: 24px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 20px;
    letter-spacing: -0.3px;
}

.category-actions {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.action-btn {
    padding: 10px 20px;
    border: none;
    border-radius: 15px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    min-width: 80px;
    text-align: center;
    cursor: pointer;
    background: #f7fafc;
}

.btn-view {
    color: #4299e1;
    box-shadow: 
        6px 6px 15px #d1d9e6,
        -6px -6px 15px #ffffff;
}

.btn-edit {
    color: #ed8936;
    box-shadow: 
        6px 6px 15px #d1d9e6,
        -6px -6px 15px #ffffff;
}

.btn-delete {
    color: #e53e3e;
    box-shadow: 
        6px 6px 15px #d1d9e6,
        -6px -6px 15px #ffffff;
}

.action-btn:hover {
    transform: translateY(-2px);
    box-shadow: 
        8px 8px 20px #d1d9e6,
        -8px -8px 20px #ffffff;
}

.action-btn:active {
    transform: translateY(0);
    box-shadow: 
        2px 2px 8px #d1d9e6,
        -2px -2px 8px #ffffff;
}

.empty-state {
    text-align: center;
    padding: 60px 20px;
    color: #718096;
}

.empty-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: #f7fafc;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 36px;
    box-shadow: 
        10px 10px 25px #d1d9e6,
        -10px -10px 25px #ffffff;
}

@media (max-width: 767px) {
    .main-content {
        padding: 10px;
    }
    
    .container-categories {
        padding: 20px;
        border-radius: 20px;
    }

    .category-card {
        padding: 20px;
    }

    .category-actions {
        justify-content: center;
    }

    .action-btn {
        flex: 1;
        min-width: 70px;
        font-size: 12px;
        padding: 8px 12px;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.category-card {
    animation: fadeInUp 0.6s ease forwards;
}

@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}
.loader-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}
.loader {
    border: 6px solid rgba(0, 0, 0, 0.1);
    border-top: 6px solid #3498db;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    animation: spin 0.8s linear infinite;
}
@keyframes spin {
    to { transform: rotate(360deg); }
}
</style>

<div class="main-content">
    <div class="container-categories">
        <div class="header">
            <h1 class="title">Categorías del Blog</h1>
            <?= $this->Html->link(
                '<div class="add-icon">+</div>Nueva Categoría',
                ['action' => 'add'],
                [
                    'class' => 'add-button',
                    'escape' => false
                ]
            ) ?>
        </div>

        <?php if (!empty($blogCategories)): ?>
            <div class="">
                <div id="categories-container" class="categories-grid">
                    <?= $this->element('BlogCategories/load_more', [
                    'blogCategories' => $blogCategories,
                    'currentUser' => $currentUser
                ]) ?>
                    
            </div>
    <div id="load-more-indicator" class="loader-container text-center mt-4">
        <div class="loader"></div>
    </div>
    </div>
        <?php else: ?>
            <div class="empty-state">
                <div class="empty-icon">📂</div>
                <h3>No hay categorías disponibles</h3>
                <p>Comienza creando tu primera categoría</p>
            </div>
        <?php endif; ?>
    </div>
</div>


<script>
let currentPage = 1;
let loading = false;

window.addEventListener('scroll', () => {
    if (loading) return;

    const scrollPosition = window.scrollY + window.innerHeight;
    const threshold = document.body.offsetHeight - 200;

    if (scrollPosition > threshold) {
        loading = true;
        currentPage++;

        fetch(`/blog-categories/load-more?page=${currentPage}`, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newCards = doc.body.children;

            if (newCards.length === 0) {
                document.getElementById('load-more-indicator').textContent = "No hay más categorías.";
            } else {
                const container = document.querySelector('.categories-grid');
                Array.from(newCards).forEach(el => container.appendChild(el));
                loading = false;
            }
        })
        .catch(error => {
            console.error('Error cargando más categorías:', error);
        });
    }
    
});
</script>



<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animación de entrada suave para las tarjetas
    const cards = document.querySelectorAll('.category-card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Mejorar la confirmación de eliminación
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            const categoryName = this.closest('.category-card').querySelector('.category-name').textContent;
            const confirmation = confirm(`¿Estás seguro de que deseas eliminar la categoría "${categoryName}"?`);
            
            if (!confirmation) {
                e.preventDefault();
                return false;
            }
        });
    });
});
</script>