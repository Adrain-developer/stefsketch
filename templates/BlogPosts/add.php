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
    background:rgb(255, 255, 255);
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
      background:rgb(255, 255, 255);
    border-radius: 12px;
    border: none;
    padding: 10px 15px;
    box-shadow: inset 5px 5px 10px #d1d1d1, inset -5px -5px 10px #ffffff;
    width: 100%;
    margin-bottom: 15px;
}
.selectize-input {
      background:rgb(255, 255, 255) !important;
    border-radius: 12px !important;
    border: none !important;
    padding: 10px 15px !important;
    box-shadow: inset 5px 5px 10px #d1d1d1, inset -5px -5px 10px #ffffff !important;
    width: 100%  !important;
    margin-bottom: 15px !important;
}
.selectize-dropdown .create {
    color: rgb(197 52 52 / 50%) !important;
    padding: 20px !important;
}
/* Botón de retroceso */
.back-button {
    position: fixed;
    top: 1.5rem;
    left: 0rem;
    z-index: 999999;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    border: none;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    text-decoration: none;
}

.back-button:hover {
    background: rgba(0, 0, 0, 0.8);
    transform: scale(1.1);
}

/* Estilos base heredados de tu diseño actual */
        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 12px;
            font-weight: 600;
            color: #374151;
            font-size: 16px;
        }

        /* Multi-Image Drag & Drop Zone */
        .multi-drag-drop-zone {
            position: relative;
            width: 100%;
            min-height: 200px;
            border: 3px dashed #cbd5e0;
            border-radius: 24px;
            background: #f7fafc;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 
                inset 12px 12px 30px #d1d9e6,
                inset -12px -12px 30px #ffffff;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .multi-drag-drop-zone.drag-over {
            border-color: #667eea;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
            transform: scale(1.02);
            box-shadow: 
                inset 8px 8px 20px #d1d9e6,
                inset -8px -8px 20px #ffffff,
                0 0 20px rgba(102, 126, 234, 0.2);
        }

        .multi-drag-drop-zone.has-files {
            border-color: #48bb78;
            background: linear-gradient(135deg, rgba(72, 187, 120, 0.05) 0%, rgba(56, 178, 172, 0.05) 100%);
            min-height: 120px;
        }

        .multi-drag-drop-zone.at-limit {
            border-color: #f56565;
            background: linear-gradient(135deg, rgba(245, 101, 101, 0.05) 0%, rgba(237, 137, 54, 0.05) 100%);
            cursor: not-allowed;
        }

        .upload-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin-bottom: 16px;
            box-shadow: 
                8px 8px 20px #d1d9e6,
                -8px -8px 20px #ffffff;
            transition: all 0.3s ease;
        }

        .multi-drag-drop-zone.has-files .upload-icon {
            width: 40px;
            height: 40px;
            font-size: 18px;
            margin-bottom: 8px;
        }

        .multi-drag-drop-zone:hover .upload-icon {
            transform: scale(1.1);
        }

        .upload-text {
            text-align: center;
            color: #4a5568;
        }

        .upload-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .multi-drag-drop-zone.has-files .upload-title {
            font-size: 16px;
        }

        .upload-subtitle {
            font-size: 13px;
            color: #718096;
        }

        .file-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        /* Grid de imágenes */
        .images-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .image-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: white;
            box-shadow: 
                8px 8px 20px #d1d9e6,
                -8px -8px 20px #ffffff;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px) scale(0.9);
        }

        .image-card.animate-in {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .image-card.animate-out {
            opacity: 0;
            transform: translateY(-20px) scale(0.8);
        }

        .image-card.updating {
            transform: scale(1.05);
            box-shadow: 
                12px 12px 25px #d1d9e6,
                -12px -12px 25px #ffffff,
                0 0 20px rgba(102, 126, 234, 0.2);
        }

        .image-card:hover {
            transform: translateY(-4px);
            box-shadow: 
                12px 12px 25px #d1d9e6,
                -12px -12px 25px #ffffff;
        }

        .image-card-inner {
            position: relative;
        }

        .grid-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            display: block;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%, transparent 30%, transparent 70%, rgba(0,0,0,0.7) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-card:hover .image-overlay {
            opacity: 1;
        }

        .change-single-image {
            background: rgba(102, 126, 234, 0.9);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .change-single-image:hover {
            background: #667eea;
            transform: translateY(-2px);
        }

        .remove-single-image {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 28px;
            height: 28px;
            background: rgba(239, 68, 68, 0.9);
            border: none;
            border-radius: 50%;
            color: white;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
            z-index: 10;
        }

        .remove-single-image:hover {
            background: #ef4444;
            transform: scale(1.1);
        }

        .image-info {
            padding: 12px;
            background: white;
        }

        .image-name {
            font-size: 13px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .image-size {
            font-size: 11px;
            color: #6b7280;
        }

        /* Progress bar */
        .upload-progress {
            display: none;
            margin-top: 16px;
            background: white;
            border-radius: 12px;
            padding: 12px;
            box-shadow: 
                inset 4px 4px 10px #d1d9e6,
                inset -4px -4px 10px #ffffff;
        }

        .progress-text {
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 8px;
            text-align: center;
        }

        .progress-bar-container {
            width: 100%;
            height: 6px;
            background: #e5e7eb;
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            width: 0%;
            transition: width 0.3s ease;
            border-radius: 3px;
        }

        /* Error message */
        .error-message {
            display: none;
            margin-top: 12px;
            padding: 12px 16px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-radius: 12px;
            color: #dc2626;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .images-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 15px;
            }
            
            .grid-image {
                height: 120px;
            }
            
            .multi-drag-drop-zone {
                min-height: 180px;
            }
        }
    </style>

    <!-- Botón de retroceso -->


<!-- FORMULARIO SIMPLIFICADO PARA PORTAFOLIO -->
<div class="blogPostForm glass-card">
<?= $this->Form->create($blogPost, ['type' => 'file']) ?>

<fieldset>
    <legend>🎨 <strong>Agregar Proyecto</strong></legend>
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
                <img id="bannerPreview" src="#" style="display:none; max-width: 100%; margin-top:10px; border-radius: 8px;" />
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
                'class' => 'selectize-single',
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
                'class' => 'selectize-single',
                'id' => 'categoryInput'
            ]) ?>
            <small class="form-text text-muted">
                Ej: Personajes, Paisajes, Concept Art
            </small>
        </div>
        
        <div class="col-md-4">
            <?= $this->Form->control('blog_tags', [
                'label' => 'Tags/Técnicas',
                'options' => $blogTags,
                'multiple' => true,
                'class' => 'select-tags',
                'id' => 'tagInput'
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
        <div class="multi-drag-drop-zone" id="multiImageDragDrop">
            <div class="upload-icon">🖼️</div>
            <div class="upload-text">
                <div class="upload-title">Arrastra imágenes del proceso aquí</div>
                <div class="upload-subtitle">o haz clic para seleccionar (máx. 10 imágenes)</div>
            </div>
            <input type="file" id="galleryInput" name="gallery[]" multiple accept="image/*" style="display: none;">
        </div>
        
        <div class="images-grid" id="imagesGrid">
            <!-- Las imágenes seleccionadas aparecerán aquí -->
        </div>
        
        <small class="form-text text-muted">
            Sube sketches, WIP, versiones alternativas, detalles, etc.
        </small>
    </div>
</fieldset>

<!-- CAMPOS OCULTOS PARA SIMPLIFICAR -->
<?= $this->Form->hidden('status', ['value' => 'activo']) ?>
<?= $this->Form->hidden('scheduled_at', ['value' => null]) ?>
<?= $this->Form->hidden('enable_scheduling', ['value' => false]) ?>

<!-- BOTÓN DE ENVÍO -->
<div class="text-center mt-4">
    <?= $this->Form->button('🚀 Publicar Proyecto', [
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
    .images-grid {
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

    // GALERÍA MÚLTIPLE CON DRAG & DROP
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
            alert('Máximo 10 imágenes permitidas');
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
                    <img src="${e.target.result}" alt="Imagen ${index + 1}">
                    <button type="button" class="remove-image" onclick="removeFile(${index})">×</button>
                `;
                imagesGrid.appendChild(imageDiv);
            };
            reader.readAsDataURL(file);
        });
    }

    // Hacer removeFile global para que funcione desde el HTML
    window.removeFile = removeFile;

    // SELECTIZE PARA CAMPOS EDITABLES
    if (typeof $ !== 'undefined' && $.fn.selectize) {
        // Tags (múltiple con creación)
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
