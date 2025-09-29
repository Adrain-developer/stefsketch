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
document.addEventListener('DOMContentLoaded', async () => {
    // ========================================
    // ⏳ ESPERAR CARGA DE HEIC CONVERTER
    // ========================================
    console.log('⏳ Esperando carga de HEIC Converter...');
    let attempts = 0;
    while (!window.heicConverter && attempts < 50) {
        await new Promise(resolve => setTimeout(resolve, 100));
        attempts++;
    }
    if (window.heicConverter) {
        console.log('✅ HEIC Converter cargado correctamente');
    } else {
        console.warn('⚠️ HEIC Converter no disponible');
    }

    // ========================================
    // 🎨 BANNER CON DETECCIÓN HEIC
    // ========================================
    const bannerInput = document.getElementById('bannerInput');
    const bannerPreview = document.getElementById('bannerPreview');

    console.log('🔍 Elementos banner:', {
        input: !!bannerInput,
        preview: !!bannerPreview
    });

    if (bannerInput && bannerPreview) {
        console.log('✅ Registrando event listener en bannerInput (EDIT)');
        
        bannerInput.addEventListener('change', async function(e) {
            console.log('🔥 CHANGE EVENT DISPARADO en bannerInput (EDIT)');
            
            const file = e.target.files[0];
            if (!file) return;
            
            console.log('📁 Archivo:', file.name, file.type || 'sin tipo MIME');
            
            try {
                // Detectar HEIC por extensión
                const extension = file.name.toLowerCase().split('.').pop();
                console.log('📁 Extensión detectada:', extension);
                
                if (extension === 'heic' || extension === 'heif') {
                    console.log('❌ HEIC detectado, rechazando...');
                    
                    // Limpiar el input
                    bannerInput.value = '';
                    
                    // Mostrar mensaje de error
                    alert(
                        '❌ Formato HEIC (iPhone) no soportado\n\n' +
                        '📱 Para subir fotos de iPhone:\n\n' +
                        '1️⃣ Cambia el formato de cámara:\n' +
                        '   Ajustes > Cámara > Formatos > "Más compatible"\n\n' +
                        '2️⃣ O convierte la foto a JPG antes de subirla'
                    );
                    
                    return;
                }

                console.log('✅ Archivo válido, mostrando preview...');

                // Mostrar preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    bannerPreview.src = e.target.result;
                    bannerPreview.style.display = 'block';
                };
                reader.readAsDataURL(file);

            } catch (error) {
                console.error('❌ ERROR:', error);
                alert('Error al procesar imagen: ' + error.message);
            }
        });
    } else {
        console.error('❌ Elementos banner NO encontrados en EDIT');
    }

    // ========================================
    // 🗑️ ELIMINACIÓN DE IMÁGENES EXISTENTES
    // ========================================
    const removeImagesInput = document.getElementById('removeImagesInput');
    let imagesToRemove = [];

    window.removeExistingImage = function(index, imagePath) {
        console.log('🗑️ Eliminando imagen:', imagePath);
        
        const imageElement = document.getElementById(`existing-img-${index}`);
        const inputElement = document.getElementById(`existing-input-${index}`);
        
        if (imageElement && inputElement) {
            // Agregar clase de eliminación
            imageElement.classList.add('removing');
            
            // Agregar a la lista de imágenes a eliminar
            imagesToRemove.push(imagePath);
            if (removeImagesInput) {
                removeImagesInput.value = JSON.stringify(imagesToRemove);
            }
            
            // Remover del DOM después de animación
            setTimeout(() => {
                imageElement.remove();
                inputElement.remove();
            }, 300);
        }
    }

    // ========================================
    // 🖼️ GALERÍA (NUEVAS IMÁGENES) CON DETECCIÓN HEIC
    // ========================================
    const dragDropZone = document.getElementById('multiImageDragDrop');
    const galleryInput = document.getElementById('galleryInput');
    const imagesGrid = document.getElementById('imagesGrid');
    let selectedFiles = [];

    console.log('🔍 Elementos galería:', {
        dragDrop: !!dragDropZone,
        input: !!galleryInput,
        grid: !!imagesGrid
    });

    if (dragDropZone && galleryInput) {
        console.log('✅ Registrando eventos de galería (EDIT)');

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
            console.log('📥 DROP en galería');
            handleFiles(e.dataTransfer.files);
        }, false);

        dragDropZone.addEventListener('click', () => {
            console.log('🖱️ Click en galería drag zone');
            galleryInput.click();
        });
        
        galleryInput.addEventListener('change', (e) => {
            console.log('🔥 CHANGE en galleryInput');
            handleFiles(e.target.files);
        });
    } else {
        console.error('❌ Elementos de galería NO encontrados');
    }

    function handleFiles(files) {
        console.log(`📸 ${files.length} archivo(s) recibidos en galería`);

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

        // Si hay archivos HEIC, mostrar advertencia
        if (heicFiles.length > 0) {
            alert(
                `❌ ${heicFiles.length} archivo(s) HEIC detectado(s):\n\n` +
                heicFiles.join('\n') + '\n\n' +
                '📱 Estos archivos NO son compatibles.\n\n' +
                'Por favor convierte las fotos a JPG primero:\n' +
                '• Ajustes > Cámara > Formatos > "Más compatible"\n' +
                '• O usa una app de conversión HEIC to JPG'
            );
        }

        // Procesar solo archivos válidos
        if (validFiles.length > 0) {
            console.log(`✅ ${validFiles.length} archivos válidos`);

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
        console.log(`💾 ${galleryInput.files.length} archivos en input de galería`);
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
        console.log('🗑️ Removiendo nueva imagen:', index);
        selectedFiles.splice(index, 1);
        updateGalleryInput();
        renderImages();
    }

    // ========================================
    // 🏷️ SELECTIZE - CÓDIGO ORIGINAL SIN TOCAR
    // ========================================
    if (typeof $ !== 'undefined' && $.fn.selectize) {
        console.log('✅ Inicializando Selectize (EDIT)');

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

    // ========================================
    // 📝 EASYMDE - CÓDIGO ORIGINAL SIN TOCAR
    // ========================================
    const editorElement = document.getElementById("markdown-editor");
    if (editorElement && typeof EasyMDE !== 'undefined') {
        console.log('✅ Inicializando EasyMDE (EDIT)');
        
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

        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById("markdown-editor").value = easyMDE.value();
            easyMDE.codemirror.save();
        });
    }
});
</script>