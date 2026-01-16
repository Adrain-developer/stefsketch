<?php

$user = $this->request->getAttribute('identity');
$this->assign('title', 'Editando: ' . h($blogPost->title));
?>

<style>
    .glass-card {
  background: rgba(255, 255, 255, 0.15);
  border-radius: 16px;
  padding: 30px;
  backdrop-filter: blur(10px);
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
  color: #333;
}

.neo-input, .neo-select {
  background: #f0f0f3;
  border-radius: 12px;
  border: none;
  padding: 10px 15px;
  box-shadow: inset 5px 5px 10px #d1d1d1,
              inset -5px -5px 10px #ffffff;
  width: 100%;
  margin-bottom: 15px;
}

.neo-button {
  background: #f0f0f3;
  border: none;
  border-radius: 12px;
  padding: 10px 20px;
  box-shadow: 5px 5px 10px #d1d1d1,
              -5px -5px 10px #ffffff;
  cursor: pointer;
  transition: 0.3s ease;
}

.neo-button:hover {
  background:rgb(213, 250, 199);
  color: rgb(4, 250, 25);
}

.neo-grid input[type="file"] {
  display: block;
  margin: 5px 0;
}
.selectize-control.multi .selectize-input [data-value] {
    background-image: linear-gradient(to bottom, #eff4fb, #e3f1fd)!important;
    text-shadow: 0px 0px 3px rgb(0 157 255 / 30%) !important;
}
.selectize-control.multi .selectize-input > div {
    color: #158ce3 !important;
    border: 1px solid #3173e7 !important;
}
.selectize-control.plugin-remove_button [data-value] .remove {
    border-left: 1px solid #3173e7 !important;
}
.selectize-control.plugin-remove_button [data-value] .remove {
color: rgb(239 39 39) !important;
}
.selectize-control.multi .selectize-input.has-items {
      background: #f0f0f3;
    border-radius: 12px;
    border: none;
    padding: 10px 15px;
    box-shadow: inset 5px 5px 10px #d1d1d1, inset -5px -5px 10px #ffffff;
    width: 100%;
    margin-bottom: 15px;
}

        /* ========================================
   BOTÓN SUBMIT FIJO EN PARTE INFERIOR
   ======================================== */
.submit-button-container {
    position: sticky !important;
    bottom: 12px !important;
    left: 0 !important;
    right: 0 !important;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    z-index: 999 !important;
    display: table-row-group;
    align-items: center;
    border-top: 1px solid #e2e8f0;
    opacity: 0;
    transform: translateY(100%);
    transition: opacity 0.4s ease, transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.submit-button-container.visible {
    opacity: 1;
    transform: translateY(0);
}

.submit-button-container .neo-button {
    min-width: 250px;
    padding: 15px 30px;
    font-size: 18px;
    font-weight: 600;
    color: #1faf4d;
    background-color: #ebfff0;
}
.btn-primary:hover {
    color: #fff;
    background-color: #00d948ff !important;
    border-color: #00d948ff !important;
}

.btn-primary.focus,.btn-primary:focus {
    color: #fff;
    background-color: #00d948ff !important;
    border-color: #00d948ff !important;
    box-shadow: 0 0 0 .2rem rgba(38,143,255,.5)
}

/* Espacio al final del formulario para que no se tape contenido */
.blogPostForm {
    padding-bottom: 100px;
}

/* Responsive móvil */
@media (max-width: 768px) {
    .submit-button-container {
        padding: 12px 15px;
    }
    
    .submit-button-container .neo-button {
        min-width: 100%;
        font-size: 16px;
        padding: 14px 20px;
    }
}

/* ========================================
   ⏳ LOADING OVERLAY
   ======================================== */
#loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.85);
    backdrop-filter: blur(8px);
    z-index: 999999;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: fadeIn 0.3s ease;
}

.loading-content {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    padding: 40px 60px;
    text-align: center;
    box-shadow: 
        8px 8px 20px rgba(0, 0, 0, 0.3),
        -8px -8px 20px rgba(255, 255, 255, 0.1);
    animation: scaleIn 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.loading-spinner {
    width: 60px;
    height: 60px;
    border: 5px solid #e0e0e0;
    border-top: 5px solid #4299e1;
    border-radius: 50%;
    margin: 0 auto 20px;
    animation: spin 1s linear infinite;
}

.loading-text {
    font-size: 22px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 10px;
}

.loading-subtext {
    font-size: 14px;
    color: #718096;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes scaleIn {
    from { 
        opacity: 0;
        transform: scale(0.8);
    }
    to { 
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Responsive */
@media (max-width: 768px) {
    .loading-content {
        padding: 30px 40px;
    }
    
    .loading-text {
        font-size: 18px;
    }
    
    .loading-subtext {
        font-size: 12px;
    }
}
</style>
<style>
    /* DRAG & DROP BANNER */
.banner-drag-drop-zone {
    border: 2px dashed #cbd5e0;
    border-radius: 12px;
    padding: 30px 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: #f8fafc;
}

.banner-drag-drop-zone:hover {
    border-color: #4299e1;
    background: #ebf8ff;
}

.banner-drag-drop-zone.dragover {
    border-color: #3182ce;
    background: #bee3f8;
}

.remove-banner {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #e53e3e;
    color: white;
    border: none;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    cursor: pointer;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
}

.remove-banner:hover {
    background: #c53030;
    transform: scale(1.1);
}
/* ESTILOS ESPECÍFICOS PARA PORTAFOLIO */
.multi-drag-drop-zone {
    border: 2px dashed #e2e8f0;
    border-radius: 12px;
    padding: 40px 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    background: #f8fafc;
    margin-top: 15px;
}

.multi-drag-drop-zone:hover {
    border-color: #4299e1;
    background: #ebf8ff;
}

.multi-drag-drop-zone.dragover {
    border-color: #3182ce;
    background: #bee3f8;
}

.upload-icon {
    font-size: 48px;
    margin-bottom: 16px;
    opacity: 0.6;
}

.upload-title {
    font-size: 18px;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 8px;
}

.upload-subtitle {
    color: #718096;
    font-size: 14px;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
    gap: 10px;
    margin-bottom: 20px;
}

.existing-image {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
}

.existing-image .remove-existing-image {
    position: absolute;
    top: 4px;
    right: 4px;
    background: #e53e3e;
    color: white;
    border: none;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    cursor: pointer;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
}

.existing-image .remove-existing-image:hover {
    background: #c53030;
}

.existing-image.removing {
    opacity: 0.5;
    transition: opacity 0.3s ease;
}

.existing-image.removing::after {
    content: 'Eliminando...';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.8);
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 10px;
    z-index: 15;
}

.images-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
    gap: 16px;
    margin-top: 20px;
}

.grid-image {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    background: #f7fafc;
    aspect-ratio: 1;
}

.grid-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.remove-image {
    position: absolute;
    top: 4px;
    right: 4px;
    background: #e53e3e;
    color: white;
    border: none;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    cursor: pointer;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.remove-image:hover {
    background: #c53030;
}

/* Responsive */
@media (max-width: 768px) {
    .images-grid, .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        gap: 12px;
    }
    
    .multi-drag-drop-zone {
        padding: 30px 15px;
    }
    
    .upload-icon {
        font-size: 36px;
    }
}
</style>

<?php
// Verificar si el post ya tiene programación activa
$hasScheduling = !empty($blogPost->scheduled_at);
$scheduledDateTime = $hasScheduling ? $blogPost->scheduled_at->format('Y-m-d\TH:i') : '';
?>

<!-- FORMULARIO EDIT SIMPLIFICADO PARA PORTAFOLIO -->
<div class="blogPostForm glass-card">
  <?= $this->Form->create($blogPost, ['type' => 'file']) ?>

  <fieldset>
    <legend>🖌 <strong>Editar Proyecto</strong></legend>

    <!-- SECCIÓN 1: Información Principal -->
    <div class="row">
      <div class="col-md-6">
        <?= $this->Form->control('title', [
            'label' => 'Nombre del Proyecto', 
            'class' => 'neo-input',
            'placeholder' => 'Ej: Ilustración Fantasy Dragon'
        ]) ?>
        
        <!-- OCULTAR SUBTÍTULO - NO ES NECESARIO PARA PORTAFOLIO -->
        <?= $this->Form->hidden('subtitle', ['value' => '']) ?>
        
        <?= $this->Form->hidden('blog_author_id', [
            'value' => $blogPost->blog_author_id
        ]) ?>
      </div>

<div class="col-md-6">
    <!-- ZONA DRAG & DROP (oculta si ya hay banner) -->
    <div class="banner-drag-drop-zone" id="bannerDragDrop" style="<?= !empty($blogPost->banner) ? 'display:none;' : '' ?>">
        <div class="upload-icon">🖼️</div>
        <div class="upload-text">
            <div class="upload-title">Imagen Principal del Proyecto</div>
            <div class="upload-subtitle">Arrastra aquí o haz clic para seleccionar</div>
        </div>
    </div>
    
    <?= $this->Form->control('banner', [
        'type' => 'file',
        'accept' => 'image/*',
        'label' => false,
        'style' => 'display: none;',
        'id' => 'bannerInput'
    ]) ?>
    
    <!-- PREVIEW (muestra imagen existente o nueva) -->
    <div id="bannerPreviewContainer" style="margin-top: 15px; <?= empty($blogPost->banner) ? 'display:none;' : '' ?>">
        <div style="position: relative;">
            <img id="bannerPreview" 
                 src="<?= !empty($blogPost->banner) ? '/img/' . h($blogPost->banner) : '#' ?>" 
                 style="width: 100%; max-height: 300px; object-fit: cover; border-radius: 12px; display: block;" />
            <button type="button" class="remove-banner" onclick="removeBanner()">×</button>
        </div>
    </div>
</div>
    
    <hr class="my-4">
  </fieldset>

  <!-- SECCIÓN 2: Categorización Simplificada -->
  <fieldset>
    <legend>🎨 <strong>Categorización</strong></legend>
    <div class="row">
      <div class="col-md-4">
        <?= $this->Form->control('event_type_id', [
          'label' => 'Tipo de Trabajo',
          'options' => $eventTypes,
          'empty' => 'Seleccione o escriba nuevo tipo',
          'class' => 'select-tags selectize-tags',
          'id' => 'eventTypeInput'
        ]) ?>
        <small class="form-text text-muted">
          Ej: Digital Art, Traditional, Commissions
        </small>
      </div>
      
      <div class="col-md-4">
        <?= $this->Form->control('blog_category_id', [
          'label' => 'Categoría Principal',
          'options' => $blogCategories,
          'empty' => 'Seleccione o escriba nueva categoría',
          'class' => 'select-tags selectize-tags',
          'id' => 'categoryInput'
        ]) ?>
        <small class="form-text text-muted">
          Ej: Personajes, Paisajes, Concept Art
        </small>
      </div>
      
      <div class="col-md-4">
        <?php
        $selectedTags = [];
        if (!empty($blogPost->blog_tags)) {
            foreach ($blogPost->blog_tags as $tag) {
                $selectedTags[] = $tag->id;
            }
        }
        ?>
        <?= $this->Form->control('blog_tags._ids', [
          'label' => 'Tags/Técnicas',
          'options' => $blogTags,
          'multiple' => true,
          'class' => 'select-tags selectize-tags',
          'id' => 'tagInput',
          'value' => $selectedTags
        ]) ?>
        <small class="form-text text-muted">
          Ej: #Photoshop, #Procreate, #Digital
        </small>
      </div>
    </div>

    <!-- OCULTAR SUBCATEGORÍAS - NO NECESARIAS PARA PORTAFOLIO -->
    <?= $this->Form->hidden('blog_subcategories._ids', ['value' => '']) ?>
    
    <!-- SLUG OCULTO - SE GENERA AUTOMÁTICAMENTE -->
    <?= $this->Form->control('slug', ['type' => 'hidden']) ?>
    
    <hr class="my-4">
  </fieldset>

  <!-- SECCIÓN 3: Descripción del Proyecto -->
  <fieldset>
    <legend>📝 <strong>Descripción del Proyecto</strong></legend>
    <div class="form-group">
      <?= $this->Form->control('body', [
        'type' => 'textarea',
        'id' => 'markdown-editor',
        'required' => false,
        'label' => false,
        'placeholder' => 'Cuéntanos sobre tu proceso creativo, inspiración, técnicas utilizadas...',
        'rows' => 6
      ]) ?>
      
    </div>
    
    <hr class="my-4">
  </fieldset>

  <!-- SECCIÓN 4: Galería del Proceso -->
  <fieldset>
    <legend>🖼️ <strong>Galería del Proyecto</strong></legend>
    
    <div class="form-group">    
      <!-- Mostrar galería existente con opción de eliminar -->
      <div id="galleryPreview" class="gallery-grid">
        <?php
        $images = json_decode($blogPost->gallery ?? '[]', true);
        if (is_array($images)) {
          foreach ($images as $index => $img): ?>
            <div class="existing-image" id="existing-img-<?= $index ?>">
              <img src="/img/<?= h($img) ?>" style="width: 120px; height: 120px; object-fit: cover; border-radius: 10px;" />
              <button type="button" class="remove-existing-image" onclick="removeExistingImage(<?= $index ?>, '<?= h($img) ?>')">×</button>
              <input type="hidden" name="existing_gallery[]" value="<?= h($img) ?>" id="existing-input-<?= $index ?>">
            </div>
          <?php endforeach;
        } ?>
      </div>
      
      <!-- Campo oculto para imágenes a eliminar -->
      <input type="hidden" name="remove_images" id="removeImagesInput" value="">
      
      <div class="multi-drag-drop-zone" id="multiImageDragDrop">
        <div class="upload-icon">🖼️</div>
        <div class="upload-text">
          <div class="upload-title">Agregar más imágenes del proceso</div>
          <div class="upload-subtitle">Arrastra nuevas imágenes aquí o haz clic para seleccionar</div>
        </div>
        <input type="file" id="galleryInput" name="gallery[]" multiple accept="image/*" style="display: none;">
      </div>
      
      <div class="images-grid" id="imagesGrid">
        <!-- Las nuevas imágenes seleccionadas aparecerán aquí -->
      </div>
      
      <small class="form-text text-muted">
        Nuevas imágenes: sketches, WIP, versiones alternativas, detalles, etc.
      </small>
    </div>
  </fieldset>

  <!-- CAMPOS OCULTOS PARA SIMPLIFICAR -->
  <?= $this->Form->hidden('status', ['value' => 'activo']) ?>
  <?= $this->Form->hidden('scheduled_at', ['value' => null]) ?>
  <?= $this->Form->hidden('enable_scheduling', ['value' => false]) ?>

  <!-- BOTÓN DE ENVÍO -->
<div class="submit-button-container">
    <?= $this->Form->button('💾 Actualizar Proyecto', [
        'class' => 'neo-button btn-primary',
        'id' => 'submit-button',
        'type' => 'submit'
    ]) ?>
  </div>

  <?= $this->Form->end() ?>
</div>


<script>
// ========================================
// 🎨 FUNCIONES GLOBALES DEL BANNER
// ========================================
window.removeBanner = function() {
    const bannerInput = document.getElementById('bannerInput');
    const bannerPreview = document.getElementById('bannerPreview');
    const bannerPreviewContainer = document.getElementById('bannerPreviewContainer');
    const bannerDragDrop = document.getElementById('bannerDragDrop');
    
    if (bannerInput) bannerInput.value = '';
    if (bannerPreview) bannerPreview.src = '#';
    if (bannerPreviewContainer) bannerPreviewContainer.style.display = 'none';
    if (bannerDragDrop) bannerDragDrop.style.display = 'block';
}

document.addEventListener('DOMContentLoaded', async () => {

    // ========================================
    // 🎨 BANNER DRAG & DROP
    // ========================================
    const bannerDragDrop = document.getElementById('bannerDragDrop');
    const bannerInput = document.getElementById('bannerInput');
    const bannerPreview = document.getElementById('bannerPreview');
    const bannerPreviewContainer = document.getElementById('bannerPreviewContainer');

    if (bannerDragDrop && bannerInput) {
        ['dragenter', 'dragover'].forEach(e => {
            bannerDragDrop.addEventListener(e, (evt) => {
                evt.preventDefault();
                evt.stopPropagation();
                bannerDragDrop.classList.add('dragover');
            });
        });

        ['dragleave', 'drop'].forEach(e => {
            bannerDragDrop.addEventListener(e, (evt) => {
                evt.preventDefault();
                evt.stopPropagation();
                bannerDragDrop.classList.remove('dragover');
            });
        });

        bannerDragDrop.addEventListener('drop', (e) => {
            if (e.dataTransfer.files.length > 0) {
                updateBanner(e.dataTransfer.files[0]);
            }
        });

        bannerDragDrop.addEventListener('click', () => bannerInput.click());

        bannerInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                updateBanner(e.target.files[0]);
            }
        });

        function updateBanner(file) {
            const ext = file.name.toLowerCase().split('.').pop();
            if (ext === 'heic' || ext === 'heif') {
                bannerInput.value = '';
                alert('❌ Formato HEIC no soportado');
                return;
            }

            const dt = new DataTransfer();
            dt.items.add(file);
            bannerInput.files = dt.files;

            const reader = new FileReader();
            reader.onload = (e) => {
                bannerPreview.src = e.target.result;
                bannerPreviewContainer.style.display = 'block';
                bannerDragDrop.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    }

    // ========================================
    // 🗑️ ELIMINACIÓN DE IMÁGENES EXISTENTES
    // ========================================
    const removeImagesInput = document.getElementById('removeImagesInput');
    let imagesToRemove = [];

    window.removeExistingImage = function(index, imagePath) {
        const imageElement = document.getElementById(`existing-img-${index}`);
        
        if (imageElement) {
            // Ocultar visualmente con animación
            imageElement.classList.add('removing');
            
            // Agregar a la lista de eliminación
            if (!imagesToRemove.includes(imagePath)) {
                imagesToRemove.push(imagePath);
            }
            
            if (removeImagesInput) {
                removeImagesInput.value = JSON.stringify(imagesToRemove);
            }
            
            // Después de la animación, ocultar completamente
            setTimeout(() => {
                imageElement.style.display = 'none';
            }, 300);
        }
    }

    // ========================================
    // 🖼️ GALERÍA (NUEVAS IMÁGENES)
    // ========================================
    const dragDropZone = document.getElementById('multiImageDragDrop');
    const galleryInput = document.getElementById('galleryInput');
    const imagesGrid = document.getElementById('imagesGrid');
    let selectedFiles = [];

    if (dragDropZone && galleryInput) {
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dragDropZone.addEventListener(eventName, (e) => {
                e.preventDefault();
                e.stopPropagation();
            }, false);
        });

        ['dragenter', 'dragover'].forEach(eventName => {
            dragDropZone.addEventListener(eventName, () => {
                dragDropZone.classList.add('dragover');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dragDropZone.addEventListener(eventName, () => {
                dragDropZone.classList.remove('dragover');
            }, false);
        });

        dragDropZone.addEventListener('drop', (e) => {
            handleFiles(e.dataTransfer.files);
        }, false);

        dragDropZone.addEventListener('click', () => galleryInput.click());
        
        galleryInput.addEventListener('change', (e) => {
            handleFiles(e.target.files);
        });
    }

    function handleFiles(files) {
        const validFiles = [];
        const heicFiles = [];

        for (const file of Array.from(files)) {
            const extension = file.name.toLowerCase().split('.').pop();
            if (extension === 'heic' || extension === 'heif') {
                heicFiles.push(file.name);
            } else {
                validFiles.push(file);
            }
        }

        if (heicFiles.length > 0) {
            alert(
                `❌ ${heicFiles.length} archivo(s) HEIC detectado(s):\n\n` +
                heicFiles.join('\n') + '\n\n' +
                '📱 Convierte las fotos a JPG primero.'
            );
        }

        if (validFiles.length > 0) {
            for (const file of validFiles) {
                if (!selectedFiles.find(f => f.name === file.name && f.size === file.size)) {
                    selectedFiles.push(file);
                }
            }
            updateGalleryInput();
            renderImages();
        }
    }

    function updateGalleryInput() {
        const dataTransfer = new DataTransfer();
        selectedFiles.forEach(file => dataTransfer.items.add(file));
        galleryInput.files = dataTransfer.files;
    }

    function renderImages() {
        imagesGrid.innerHTML = '';
        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = (e) => {
                const div = document.createElement('div');
                div.className = 'grid-image';
                div.innerHTML = `
                    <img src="${e.target.result}" alt="Nueva imagen ${index + 1}" />
                    <button type="button" class="remove-image" onclick="removeNewImage(${index})">×</button>
                `;
                imagesGrid.appendChild(div);
            };
            reader.readAsDataURL(file);
        });
    }

    window.removeNewImage = function(index) {
        selectedFiles.splice(index, 1);
        updateGalleryInput();
        renderImages();
    }

    // ========================================
    // 🏷️ SELECTIZE
    // ========================================
    if (typeof $ !== 'undefined' && $.fn.selectize) {
        $('#tagInput').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return { value: input, text: input };
            },
            placeholder: 'Escriba tags/técnicas'
        });

        $('#eventTypeInput').selectize({
            create: function(input) {
                return { value: input, text: input };
            },
            placeholder: 'Seleccione o escriba nuevo tipo',
            persist: false
        });

        $('#categoryInput').selectize({
            create: function(input) {
                return { value: input, text: input };
            },
            placeholder: 'Seleccione o escriba nueva categoría',
            persist: false
        });
    }

    // ========================================
    // 📝 EASYMDE
    // ========================================
    const editorElement = document.getElementById("markdown-editor");
    if (editorElement && typeof EasyMDE !== 'undefined') {
        const easyMDE = new EasyMDE({
            element: editorElement,
            spellChecker: false,
            toolbar: [
                "bold", "italic", "strikethrough", "heading", "|",
                "ordered-list", "unordered-list", "|",
                "quote", "code", "horizontal-rule", "link", "|",
                "preview", "side-by-side", "fullscreen", "|",
                
            ],
            placeholder: "Describe tu proyecto: proceso creativo, inspiración, técnicas utilizadas..."
        });

        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById("markdown-editor").value = easyMDE.value();
            easyMDE.codemirror.save();
        });
    }
});

// ========================================
// ⏳ LOADING OVERLAY
// ========================================
const form = document.querySelector('form');
const submitButton = document.getElementById('submit-button');

if (form && submitButton) {
    form.addEventListener('submit', function(e) {
        const overlay = document.createElement('div');
        overlay.id = 'loading-overlay';
        overlay.innerHTML = `
            <div class="loading-content">
                <div class="loading-spinner"></div>
                <div class="loading-text">⏳ Editando proyecto...</div>
                <div class="loading-subtext">Por favor espera, esto puede tardar unos segundos</div>
            </div>
        `;
        document.body.appendChild(overlay);

        submitButton.disabled = true;
        submitButton.textContent = '⌛ Guardando...';
        submitButton.style.opacity = '0.6';
        submitButton.style.cursor = 'not-allowed';
    });
}

// ========================================
// MOSTRAR BOTÓN AL HACER SCROLL
// ========================================
(function() {
    const submitButton = document.querySelector('.submit-button-container');
    let scrollThreshold = 50;
    
    if (submitButton) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > scrollThreshold) {
                submitButton.classList.add('visible');
            } else {
                submitButton.classList.remove('visible');
            }
        });
        
        window.addEventListener('load', function() {
            if (window.scrollY > scrollThreshold) {
                submitButton.classList.add('visible');
            }
        });
    }
})();

// ========================================
// SCROLL AUTOMÁTICO EN INPUTS SELECTIZE (MÓVIL)
// ========================================
(function() {
    const isMobile = window.innerWidth <= 768;
    
    if (isMobile) {
        setTimeout(function() {
            const selectizeInputs = document.querySelectorAll('.selectize-control');
            
            selectizeInputs.forEach(function(selectizeControl) {
                const input = selectizeControl.querySelector('.selectize-input');
                
                if (input) {
                    input.addEventListener('click', function() {
                        setTimeout(function() {
                            const inputRect = input.getBoundingClientRect();
                            const inputTop = inputRect.top + window.scrollY;
                            
                            window.scrollTo({
                                top: inputTop - 100,
                                behavior: 'smooth'
                            });
                        }, 100);
                    });
                }
            });
        }, 500);
    }
})();
</script>