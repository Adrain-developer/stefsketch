<style>
.blog-card {
    border-radius: 16px;
    overflow: hidden;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.1), -6px -6px 10px rgba(255, 255, 255, 0.1);
    transition: transform 0.2s ease;
}

.blog-card:hover {
    transform: scale(1.02);
}

.card-banner {
    height: 200px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.event-type {
    position: absolute;
    bottom: 8px;
    left: 8px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 4px 8px;
    border-radius: 6px;
    font-size: 12px;
}

.post-title {
    font-weight: bold;
    font-size: 1.1rem;
}

.card-buttons .btn {
    margin-right: 5px;
    border-radius: 12px;
}

.subcategories .badge {
    margin-right: 4px;
    margin-top: 5px;
}
.glass-card, .glass-box, .filter-bar {
  backdrop-filter: blur(12px);
  background: rgba(255, 255, 255, 0.15);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.1);
}
.post-image {
  height: 200px;
  background-size: cover;
  background-position: center;
  cursor: pointer;
  border-radius: 12px 12px 0 0;
}
.sticky-sidebar {
  position: sticky;
  top: 100px;
}
</style>



<div class="blog-filters sticky-top bg-white shadow-sm px-3 py-2 rounded">
    <?= $this->Form->create(null, ['type' => 'get', 'id' => 'filterForm']) ?>
        <?= $this->Form->control('event_type_id', ['label' => false, 'options' => $eventTypes, 'empty' => 'Tipo de Evento', 'id' => 'filterEventType']) ?>
        <?= $this->Form->control('blog_category_id', ['label' => false, 'options' => $blogCategories, 'empty' => 'Categoría', 'id' => 'filterCategory']) ?>
        <?= $this->Form->control('search', ['label' => false, 'placeholder' => 'Buscar...', 'id' => 'filterText']) ?>
    <?= $this->Form->end() ?>
</div>

<div class="row mt-4">
    <div class="col-md-8">
        <div id="postsContainer">
            <?= $this->element('blog/ajax_index_items', ['posts' => $posts]) ?>
        </div>
        <div id="loading" style="display:none;" class="text-center my-4">
            <span class="spinner-border text-primary"></span> Cargando más...
        </div>
    </div>
    <div class="col-md-4 d-none d-md-block">
        <div class="position-sticky" style="top: 90px;">
            <h5>Categorías</h5>
            <ul class="list-group">
                <?php foreach ($blogCategories as $id => $cat): ?>
                    <li class="list-group-item"><?= $cat ?></li>
                <?php endforeach; ?>
            </ul>

            <h5 class="mt-4">Tags</h5>
            <div>
                <?php foreach ($blogTags as $tag): ?>
                    <span class="badge badge-pill badge-primary"><?= h($tag) ?></span>
                <?php endforeach; ?>
            </div>

            <h5 class="mt-4">Populares</h5>
            <ul class="list-unstyled">
                <?php foreach ($popularPosts as $post): ?>
                    <li><a href="<?= $this->Url->build(['action' => 'view', $post->eventoslug->slug]) ?>"><?= h($post->title) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

<div id="scrollSentinel" class="text-center my-4">
  <span class="spinner-border text-secondary" role="status"></span>
</div>
 <div id="endOfPostsMessage" class="text-center text-muted mt-4" style="display:none;">
        🎉 Has llegado al final de las publicaciones.
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const postsContainer = document.querySelector("#postsContainer");
  const sentinel = document.querySelector("#scrollSentinel");
  const endMessage = document.querySelector("#endOfPostsMessage");

  let currentPage = 1;
  let loading = false;
  let noMorePosts = false;
  let observer;
  

  // Función para obtener los parámetros del filtro
  function getFilterParams() {
    return {
      event_type_id: document.querySelector("#filterEventType")?.value || "",
      blog_category_id: document.querySelector("#filterCategory")?.value || "",
      search: document.querySelector("#filterText")?.value || ""
    };
  }

  // Construye la URL con filtros
  function buildUrl(page = 1) {
    const params = getFilterParams();
    return `/blog?page=${page}&event_type_id=${params.event_type_id}&blog_category_id=${params.blog_category_id}&search=${params.search}`;
  }

  // Función para cargar más posts (infinite scroll o filtros)
  function loadPosts(page = 1, append = true) {
    if (loading || noMorePosts) return;

    loading = true;
    fetch(buildUrl(page), {
      headers: { "X-Requested-With": "XMLHttpRequest" }
    })
    .then(res => {
      if (!res.ok) throw new Error("Sin más resultados");
      return res.text();
    })
    .then(html => {
      const cleaned = html.trim();
      if (!cleaned) {
        noMorePosts = true;
        endMessage.style.display = "block";
        observer?.disconnect();
        return;
      }

      if (append) {
        postsContainer.insertAdjacentHTML("beforeend", cleaned);
      } else {
        postsContainer.innerHTML = cleaned;
        endMessage.style.display = "none";
      }

      loading = false;
    })
    .catch(() => {
      noMorePosts = true;
      endMessage.style.display = "block";
      observer?.disconnect();
    });
  }

  // Función para iniciar el observer (scroll infinito)
  function initObserver() {
    if (observer) observer.disconnect(); // Limpia anterior
    observer = new IntersectionObserver(entries => {
      if (entries[0].isIntersecting && !loading && !noMorePosts) {
        currentPage++;
        loadPosts(currentPage);
      }
    });
    observer.observe(sentinel);
  }

  // Función al cambiar filtros (evento)
  function applyFilters() {
    currentPage = 1;
    noMorePosts = false;
    loading = false;
    loadPosts(1, false); // Reemplaza contenido
    initObserver();      // Reinicia scroll infinito
  }

  // Eventos para filtros
  document.querySelector("#filterEventType")?.addEventListener("change", applyFilters);
  document.querySelector("#filterCategory")?.addEventListener("change", applyFilters);
  document.querySelector("#filterText")?.addEventListener("input", debounce(applyFilters, 400));

  // Utilidad debounce (para búsquedas por texto)
  function debounce(func, wait) {
    let timeout;
    return function () {
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(this), wait);
    };
  }

  // Inicializa
  loadPosts(1, false); // Primera carga
  initObserver();
});

</script>

