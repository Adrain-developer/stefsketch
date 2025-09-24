<?php

$user = $this->request->getAttribute('identity');

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
    <legend>🎨 <strong>Editar Proyecto</strong></legend>
    <a href="javascript:history.back()" class="back-button">←</a>

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
        
        <?php if ($this->request->getAttribute('identity')->role === 'admin'): ?>
          <?= $this->Form->control('blog_author_id', [
              'label' => 'Ilustrador',
              'options' => $blogAuthors,
              'empty' => 'Seleccione un ilustrador',
              'class' => 'neo-select'
          ]) ?>
        <?php else: ?>
          <?= $this->Form->hidden('blog_author_id', [
              'value' => $this->request->getAttribute('identity')->blog_author_id
          ]) ?>
        <?php endif; ?>
      </div>

      <div class="col-md-6">
        <?= $this->Form->control('banner', [
          'type' => 'file',
          'accept' => 'image/*',
          'label' => 'Imagen Principal del Proyecto',
          'class' => 'neo-input',
          'id' => 'bannerInput'
        ]) ?>

        <div id="bannerPreviewContainer">
          <?php if (!empty($blogPost->banner)) : ?>
            <img id="bannerPreview" src="/img/<?= h($blogPost->banner) ?>" alt="Banner actual" style="max-width: 100%; margin-top: 10px; border-radius: 8px;" />
          <?php else : ?>
            <img id="bannerPreview" src="#" style="display:none; max-width: 100%; margin-top:10px; border-radius: 8px;" />
          <?php endif; ?>
        </div>
      </div>
    </div>
    
    <hr class="my-4">
  </fieldset>

  <!-- SECCIÓN 2: Categorización Simplificada -->
  <fieldset>
    <legend>📂 <strong>Categorización</strong></legend>
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
        'label' => 'Describe tu proyecto',
        'placeholder' => 'Cuéntanos sobre tu proceso creativo, inspiración, técnicas utilizadas...',
        'rows' => 6
      ]) ?>
      <small class="form-text text-muted">
        Opcional: Describe el proceso, inspiración, cliente, etc.
      </small>
    </div>
    
    <hr class="my-4">
  </fieldset>

  <!-- SECCIÓN 4: Galería del Proceso -->
  <fieldset>
    <legend>🖼️ <strong>Galería del Proyecto</strong></legend>
    
    <div class="form-group">
      <label class="form-label">Imágenes del Proceso/Variaciones</label>
      
      <!-- Mostrar galería existente con opción de eliminar -->
      <div id="galleryPreview" class="gallery-grid">
        <?php
        $images = json_decode($blogPost->gallery, true);
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
  <div class="text-center mt-4">
    <?= $this->Form->button('💾 Actualizar Proyecto', [
        'class' => 'neo-button btn-primary',
        'id' => 'submit-button'
    ]) ?>
  </div>

  <?= $this->Form->end() ?>
</div>

<style>
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

.back-button {
    position: fixed;
    top: 20px;
    left: 20px;
    width: 50px;
    height: 50px;
    background: #4299e1;
    color: white;
    border: none;
    border-radius: 50%;
    font-size: 20px;
    cursor: pointer;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.back-button:hover {
    background: #3182ce;
    transform: scale(1.1);
    color: white;
    text-decoration: none;
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

<script>
document.addEventListener('DOMContentLoaded', () => {
    // PREVIEW DEL BANNER
    const bannerInput = document.getElementById('bannerInput');
    const bannerPreview = document.getElementById('bannerPreview');
    
    if (bannerInput) {
        bannerInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    bannerPreview.src = e.target.result;
                    bannerPreview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // GALERÍA MÚLTIPLE CON DRAG & DROP (NUEVAS IMÁGENES)
    const dragDropZone = document.getElementById('multiImageDragDrop');
    const galleryInput = document.getElementById('galleryInput');
    const imagesGrid = document.getElementById('imagesGrid');
    let selectedFiles = [];

    // Eventos de Drag & Drop
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dragDropZone.addEventListener(eventName, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(eventName => {
        dragDropZone.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dragDropZone.addEventListener(eventName, unhighlight, false);
    });

    dragDropZone.addEventListener('drop', handleDrop, false);
    dragDropZone.addEventListener('click', () => galleryInput.click());
    galleryInput.addEventListener('change', handleInputChange);

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    function highlight(e) {
        dragDropZone.classList.add('dragover');
    }

    function unhighlight(e) {
        dragDropZone.classList.remove('dragover');
    }

    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        handleFiles(files);
    }

    function handleInputChange(e) {
        const files = e.target.files;
        handleFiles(files);
    }

    function handleFiles(files) {
        ([...files]).forEach(addFile);
        updateGalleryInput();
        renderImages();
    }

    function addFile(file) {
        if (selectedFiles.length >= 10) {
            alert('Máximo 10 imágenes nuevas permitidas');
            return;
        }
        
        if (file.type.startsWith('image/')) {
            selectedFiles.push(file);
        }
    }

    function removeFile(index) {
        selectedFiles.splice(index, 1);
        updateGalleryInput();
        renderImages();
    }

    function updateGalleryInput() {
        const dt = new DataTransfer();
        selectedFiles.forEach(file => dt.items.add(file));
        galleryInput.files = dt.files;
    }

    function renderImages() {
        imagesGrid.innerHTML = '';
        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imageDiv = document.createElement('div');
                imageDiv.className = 'grid-image';
                imageDiv.innerHTML = `
                    <img src="${e.target.result}" alt="Nueva imagen ${index + 1}">
                    <button type="button" class="remove-image" onclick="removeFile(${index})">×</button>
                `;
                imagesGrid.appendChild(imageDiv);
            };
            reader.readAsDataURL(file);
        });
    }

    // Hacer removeFile global para que funcione desde el HTML
    window.removeFile = removeFile;

    // ✅ FUNCIÓN PARA ELIMINAR IMÁGENES EXISTENTES
    let imagesToRemove = [];
    
    window.removeExistingImage = function(index, imagePath) {
        if (confirm('¿Estás seguro de que quieres eliminar esta imagen?')) {
            // Agregar imagen a la lista de eliminación
            imagesToRemove.push(imagePath);
            
            // Actualizar campo oculto con imágenes a eliminar
            document.getElementById('removeImagesInput').value = JSON.stringify(imagesToRemove);
            
            // Marcar visualmente como eliminando
            const imageDiv = document.getElementById('existing-img-' + index);
            imageDiv.classList.add('removing');
            
            // Deshabilitar el input hidden de esta imagen
            const hiddenInput = document.getElementById('existing-input-' + index);
            if (hiddenInput) {
                hiddenInput.disabled = true;
            }
            
            // Opcional: Ocultar después de un momento
            setTimeout(() => {
                imageDiv.style.display = 'none';
            }, 1000);
        }
    };

    // SELECTIZE PARA CAMPOS EDITABLES
    if (typeof $ !== 'undefined' && $.fn.selectize) {
        // Tags (múltiple con creación y valores pre-seleccionados)
        $('#tagInput').selectize({
            plugins: ['remove_button'],
            delimiter: ',',
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input
                };
            },
            placeholder: 'Escriba tags/técnicas'
        });

        // Tipo de Trabajo (single con creación)
        $('#eventTypeInput').selectize({
            create: function(input) {
                return {
                    value: input,
                    text: input
                };
            },
            placeholder: 'Seleccione o escriba nuevo tipo',
            persist: false
        });

        // Categoría Principal (single con creación)
        $('#categoryInput').selectize({
            create: function(input) {
                return {
                    value: input,
                    text: input
                };
            },
            placeholder: 'Seleccione o escriba nueva categoría',
            persist: false
        });
    }

    // ✅ EDITOR MARKDOWN - EasyMDE
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
                {
                    name: "insertImageShortcode",
                    action: function customFunction(editor) {
                        let index = prompt("¿Qué número de imagen deseas insertar? (Ejemplo: 0 para [img:0])");
                        if (index !== null && index !== "") {
                            editor.codemirror.replaceSelection("[img:" + index + "]");
                        }
                    },
                    className: "fa fa-image",
                    title: "Insertar imagen de galería"
                }
            ],
            placeholder: "Describe tu proyecto: proceso creativo, inspiración, técnicas utilizadas..."
        });

        // Sincronizar contenido del editor al enviar el formulario
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById("markdown-editor").value = easyMDE.value();
            easyMDE.codemirror.save();
        });
    }
});
</script>