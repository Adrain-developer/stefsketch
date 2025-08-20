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


<div class="blogPostForm glass-card">
<?= $this->Form->create($blogPost, ['type' => 'file']) ?>

<fieldset>
    

    <legend>📝 <strong>Agregar Post</strong></legend>
    <a href="javascript:history.back()" class="back-button">
    ←
</a>
    <!-- SECCIÓN 1: Encabezado -->
    <div class="row">
        <div class="col-md-6">
            <?= $this->Form->control('title', ['label' => 'Título', 'class' => 'neo-input']) ?>
            <?= $this->Form->control('subtitle', ['label' => 'Subtítulo', 'class' => 'neo-input']) ?>
            <?php if ($this->request->getAttribute('identity')->role === 'admin'): ?>
                <?= $this->Form->control('blog_author_id', [
                    'label' => 'Autor',
                    'options' => $blogAuthors,
                    'empty' => 'Seleccione un autor',
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
                'label' => 'Imagen Principal',
                'class' => 'neo-input',
                'id' => 'bannerInput'
            ]) ?>
            <div id="bannerPreviewContainer">
                <img id="bannerPreview" src="#" style="display:none; max-width: 100%; margin-top:10px;" />
            </div>
        </div>
    </div>
    <!-- Separador visual -->
    <hr class="my-4">
</fieldset>

    <!-- SECCIÓN 2: Metadatos -->
<fieldset>
 <legend>🧩 <strong>Metadatos</strong></legend>
    <div class="row">
        <div class="col-md-3 col-12">
            <?= $this->Form->control('event_type_id', [
                'label' => 'Evento',
                'options' => $eventTypes,
                'empty' => 'Seleccione un tipo',
                'class' => 'neo-select'
            ]) ?>
        </div>
        <div class="col-md-3 col-12">
            <?= $this->Form->control('blog_category_id', [
                'label' => 'Tema',
                'options' => $blogCategories,
                'empty' => 'Seleccione una categoría',
                'class' => 'neo-select'
            ]) ?>
        </div>
        <div class="col-md-3 col-12">
             <?= $this->Form->control('blog_subcategories', [
                'label' => 'Sub Temas',
                'options' => $blogSubcategories,
                'multiple' => true,
                'class' => ' select-tags',
                'id' => 'subcatInput'
            ]) ?>
        </div>
        <div class="col-md-3 col-12">
            <?= $this->Form->control('blog_tags', [
                'label' => 'Tags',
                'options' => $blogTags,
                'multiple' => true,
                'class' => ' select-tags',
                'id' => 'tagInput'
            ]) ?>
        </div>
    </div>

<?= $this->Form->control('slug', ['label' => 'Slug', 'class' => 'neo-input', 'type' => 'hidden']) ?>

    <!-- Separador -->
    <hr class="my-4">

</fieldset>

    <!-- SECCIÓN 3: Contenido + Galería -->
<fieldset>
    <legend>🖼️ <strong>Contenido y Galería</strong></legend>
    <div class="form-group">
        <?= $this->Form->control('body', [
            'type' => 'textarea',
            'id' => 'markdown-editor',
            'required' => false,
            'label' => 'Contenido del post'
        ]) ?>
    </div>

   <div class="form-group">
    <label class="form-label">Galería de Imágenes</label>

    <div class="multi-drag-drop-zone" id="multiImageDragDrop">
        <div class="upload-icon">🖼️</div>
        <div class="upload-text">
            <div class="upload-title">Arrastra tus imágenes aquí</div>
            <div class="upload-subtitle">o haz clic para seleccionar (máx. 10 imágenes, 5MB c/u)</div>
        </div>

        <?= $this->Form->control('gallery[]', [
            'type' => 'file',
            'multiple' => true,
            'accept' => 'image/jpeg,image/png,image/webp',
            'label' => false,
            'id' => 'multiImageInput',
            'class' => 'file-input',
            'templates' => [
                'inputContainer' => '{{content}}'
            ]
        ]) ?>
    </div>

    <div class="upload-progress" id="multiUploadProgress" style="display: none;">
        <div class="progress-text" id="progressText">Procesando imágenes...</div>
        <div class="progress-bar-container">
            <div class="progress-bar" id="multiProgressBar"></div>
        </div>
    </div>

    <div class="images-grid" id="imageGrid">
        <!-- Las imágenes se generarán aquí dinámicamente -->
    </div>

    <div class="error-message" id="multi-image-error"></div>
</div>


 <!--<?php
        $statusOptions = [
            'borrador' => 'Borrador',
            'programado' => 'programado',
        ];

        if ($user->role === 'admin') {
            $statusOptions['activo'] = 'Activo';
            $statusOptions['inactivo'] = 'Inactivo';
        }
    ?>-->

    <?php
        $statusOptions = [
            'borrador' => 'Borrador',
            'programado' => 'Programado',
            'activo' => 'Activo',
            'inactivo' => 'Inactivo',
        ]; 
    ?>

        <div class="form-group">
            <?= $this->Form->label('status', 'Estado del post') ?>
            <?= $this->Form->select('status', $statusOptions, [
                'class' => 'form-control',
                'id' => 'status-select'
            ]) ?>
        </div>

        <!-- para programar post-->
        <div class="form-group" id="scheduling-section" style="display: none;">
            <div class="form-check">
                <?= $this->Form->checkbox('enable_scheduling', [
                    'class' => 'form-check-input',
                    'id' => 'enable-scheduling'
                ]) ?>
                <?= $this->Form->label('enable_scheduling', 'Programar publicación', [
                    'class' => 'form-check-label'
                ]) ?>
            </div>
            
            <div id="datetime-input" style="display: none;">
                <?= $this->Form->label('scheduled_at', 'Fecha y hora de publicación') ?>
                <?= $this->Form->datetime('scheduled_at', [
                    'class' => 'form-control'
                ]) ?>
            </div>
        </div>

</fieldset>

      <div class="text-center mt-4">
        <?= $this->Form->button('Guardar', ['class' => 'neo-button', 'id' => 'submit-button']) ?>
    </div>

    <?= $this->Form->end() ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Cambia texto del botón según el estado
    const statusSelect = document.getElementById('status-select');
    const submitButton = document.getElementById('submit-button');

    function updateButtonText() {
        const status = statusSelect.value;
    if (status === 'borrador') {
        submitButton.textContent = 'Guardar como borrador';
    } else if (status === 'programado') { // Cambié 'programado' por 'publico'
        submitButton.textContent = 'Programar Post';
    } else if (status === 'activo') {
        submitButton.textContent = 'Publicar';
    } else if (status === 'inactivo') {
        submitButton.textContent = 'Publicar Inactivo';
    } else {
        submitButton.textContent = 'Guardar';
    }
    }

    updateButtonText();
    statusSelect.addEventListener('change', updateButtonText);

    // Preview del banner
    const bannerInput = document.getElementById('bannerInput');
    if (bannerInput) {
        bannerInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (ev) {
                    document.getElementById('bannerPreview').src = ev.target.result;
                    document.getElementById('bannerPreview').style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // Inicialización Selectize
    if (document.getElementById('tagInput')) {
        $('#tagInput').selectize({
            plugins: ['remove_button'],
            create: true,
            persist: false,
            placeholder: 'Escribe y presiona Enter para agregar una etiqueta'
        });
    }

    if (document.getElementById('subcatInput')) {
        $('#subcatInput').selectize({
            plugins: ['remove_button'],
            create: true,
            persist: false,
            placeholder: 'Escribe y presiona Enter para agregar una subCategoría'
        });
    }

    // Markdown editor
    const editorElement = document.getElementById("markdown-editor");
    if (editorElement) {
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
            placeholder: "Escribe el contenido del post aquí..."
        });

        document.querySelector('form').addEventListener('submit', function () {
            editorElement.value = easyMDE.value();
        });
    }

    // Drag & Drop de múltiples imágenes
    const multiInput = document.getElementById('multiImageInput');
    const imageGrid = document.getElementById('imageGrid');
    const dropZone = document.getElementById('multiImageDragDrop');
    const errorMsg = document.getElementById('multi-image-error');
    const progressContainer = document.getElementById('multiUploadProgress');
    const progressBar = document.getElementById('multiProgressBar');
    const progressText = document.getElementById('progressText');

    if (multiInput && imageGrid && dropZone) {
        const maxFiles = 10;
        const maxSize = 5 * 1024 * 1024; // 5MB

        function handleFiles(files) {
            errorMsg.textContent = '';
            imageGrid.innerHTML = '';

            if (files.length > maxFiles) {
                errorMsg.textContent = `Solo puedes subir hasta ${maxFiles} imágenes.`;
                return;
            }

            progressContainer.style.display = 'block';
            progressBar.style.width = '0%';

            let loaded = 0;
            [...files].forEach((file, index) => {
                if (file.size > maxSize) {
                    errorMsg.textContent = `La imagen "${file.name}" supera el tamaño máximo permitido (5MB).`;
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (ev) {
                    const img = document.createElement('img');
                    img.src = ev.target.result;
                    img.style = "width: 120px; margin:5px; border-radius:10px;";
                    imageGrid.appendChild(img);

                    loaded++;
                    const progress = Math.round((loaded / files.length) * 100);
                    progressBar.style.width = progress + '%';

                    if (loaded === files.length) {
                        progressText.textContent = "Imágenes listas.";
                        setTimeout(() => progressContainer.style.display = 'none', 1000);
                    }
                };
                reader.readAsDataURL(file);
            });
        }

        multiInput.addEventListener('change', e => {
            handleFiles(e.target.files);
        });

        dropZone.addEventListener('dragover', e => {
            e.preventDefault();
            dropZone.classList.add('dragover');
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.classList.remove('dragover');
        });

        dropZone.addEventListener('drop', e => {
            e.preventDefault();
            dropZone.classList.remove('dragover');
            multiInput.files = e.dataTransfer.files;
            handleFiles(e.dataTransfer.files);
        });

        dropZone.addEventListener('click', () => multiInput.click());
    }
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const statusSelect = document.getElementById('status-select');
    const schedulingSection = document.getElementById('scheduling-section');
    const enableScheduling = document.getElementById('enable-scheduling');
    const datetimeInput = document.getElementById('datetime-input');
    
    statusSelect.addEventListener('change', function() {
        if (this.value === 'borrador') {
            schedulingSection.style.display = 'none';
        } else {
            schedulingSection.style.display = 'block';
        }
    });
    
    enableScheduling.addEventListener('change', function() {
        datetimeInput.style.display = this.checked ? 'block' : 'none';
    });
});
</script>
