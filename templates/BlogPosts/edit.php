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

<div class="blogPostForm glass-card">
  <?= $this->Form->create($blogPost, ['type' => 'file']) ?>

  <fieldset>
    <legend>📝 <strong>Encabezado del Post</strong></legend>

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
          <?php if (!empty($blogPost->banner)) : ?>
            <img id="bannerPreview" src="/img/<?= h($blogPost->banner) ?>" alt="Banner actual" style="max-width: 100%; margin-top: 10px;" />
          <?php else : ?>
            <img id="bannerPreview" style="display:none; max-width: 100%; margin-top:10px;" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </fieldset>

  <hr class="my-4">

  <fieldset>
    <legend>🧩 <strong>Metadatos</strong></legend>

    <div class="row">
      <div class="col-md-3 col-6">
        <?= $this->Form->control('event_type_id', [
          'label' => 'Evento',
          'options' => $eventTypes,
          'empty' => 'Selecciona uno',
          'class' => 'neo-select'
        ]) ?>
      </div>

      <div class="col-md-3 col-6">
        <?= $this->Form->control('blog_category_id', [
          'label' => 'Temas',
          'options' => $blogCategories,
          'empty' => 'Selecciona un tema',
          'class' => 'neo-select'
        ]) ?>
      </div>

          <?php 
    $selectedSubcat = [];
      if (!empty($blogPost->blog_subcategories)) {
          foreach ($blogPost->blog_subcategories as $subcategories) {
              $selectedSubcat[] = $subcategories->id;
          }
      }
      ?>
      <div class="col-md-3 col-6">
          <?= $this->Form->control('blog_subcategories._ids', [
            'label' => 'Sub Temas',
            'options' => $blogSubcategories,
            'multiple' => true,
            'class' => ' select-subcategories selectize-subcategories',
            'id' => 'subcatInput',
            'value' => $selectedSubcat
          ]) ?>
        </div>

       <?php 
      $selectedTags = [];
      if (!empty($blogPost->blog_tags)) {
          foreach ($blogPost->blog_tags as $tag) {
              $selectedTags[] = $tag->id;
          }
      }
      ?>
      <div class="col-md-3 col-6">
          <?= $this->Form->control('blog_tags._ids', [
            'label' => 'Tags',
            'options' => $blogTags,
            'multiple' => true,
            'class' => ' select-tags selectize-tags',
            'id' => 'tagInput',
            'value' => $selectedTags
          ]) ?>
        </div>


    </div>

    <?= $this->Form->control('slug', ['label' => 'Slug', 'class' => 'neo-input', 'type' => 'hidden']) ?>
  </fieldset>

  <hr class="my-4">

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
      <?= $this->Form->control('gallery[]', [
        'type' => 'file',
        'multiple' => true,
        'accept' => 'image/*',
        'label' => 'Galería de Imágenes',
        'id' => 'galleryInput'
      ]) ?>
      <div id="galleryPreview" class="gallery-grid">
        <?php
        $images = json_decode($blogPost->gallery, true);
        if (is_array($images)) {
          foreach ($images as $img): ?>
            <img src="/img/<?= h($img) ?>" style="width: 120px; margin:5px; border-radius:10px;" />
        <?php endforeach;
        } ?>
      </div>
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

        <!-- Sección de programación (agregar después del select de status) -->
        <div class="form-group" id="scheduling-section" style="display: none;">
            <div class="form-check">
                <?= $this->Form->checkbox('enable_scheduling', [
                    'class' => 'form-check-input',
                    'id' => 'enable-scheduling',
                    'checked' => $hasScheduling // ✨ Pre-marcado si ya tiene programación
                ]) ?>
                <?= $this->Form->label('enable_scheduling', 'Programar publicación', [
                    'class' => 'form-check-label'
                ]) ?>
            </div>

            <div id="datetime-input" style="display: <?= $hasScheduling ? 'block' : 'none' ?>;">
                <?= $this->Form->label('scheduled_at', 'Fecha y hora de publicación') ?>
                <?= $this->Form->datetime('scheduled_at', [
                    'class' => 'form-control',
                    'value' => $scheduledDateTime // ✨ Pre-llenado con la fecha existente
                ]) ?>

                <?php if ($hasScheduling): ?>
                    <small class="form-text text-info">
                        📅 Programación actual: <?= $blogPost->scheduled_at->format('d/m/Y H:i') ?>
                    </small>
                <?php endif; ?>
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
    const statusSelect = document.getElementById('status-select');
    const submitButton = document.getElementById('submit-button');

    function updateButtonText() {
        const status = statusSelect.value;
        if (status === 'borrador') {
        submitButton.textContent = 'Guardar como borrador';
    } else if (status === 'programado') { 
        submitButton.textContent = 'Publicar Programado';
    } else if (status === 'activo') {
        submitButton.textContent = 'Publicar Activo';
    } else if (status === 'inactivo') {
        submitButton.textContent = 'Publicar Inactivo';
    } else {
        submitButton.textContent = 'Guardar';
    }
    }

    updateButtonText(); // Inicial
    statusSelect.addEventListener('change', updateButtonText);
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
<!-- Scripts necesarios -->
<script>
document.getElementById('bannerInput').addEventListener('change', function (e) {
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

document.getElementById('galleryInput').addEventListener('change', function (e) {
  const container = document.getElementById('galleryPreview');
  container.innerHTML = '';
  [...e.target.files].forEach(file => {
    const reader = new FileReader();
    reader.onload = function (ev) {
      const img = document.createElement('img');
      img.src = ev.target.result;
      img.style = "width: 120px; margin:5px; border-radius:10px;";
      container.appendChild(img);
    };
    reader.readAsDataURL(file);
  });
});

document.addEventListener('DOMContentLoaded', () => {

  $('#tagInput').selectize({
    plugins: ['remove_button'],
    delimiter: ',',
    persist: false,
    create: function(input) {
      return { value: input, text: input };
    }
  });

  $('#subcatInput').selectize({
    plugins: ['remove_button'],
    delimiter: ',',
    persist: false,
    create: function(input) {
      return { value: input, text: input };
    }
  });

  const easyMDE = new EasyMDE({
    element: document.getElementById("markdown-editor"),
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

  // Sincroniza el contenido del editor al enviar el formulario
  document.querySelector('form').addEventListener('submit', function () {
    document.getElementById("markdown-editor").value = easyMDE.value();
    easyMDE.codemirror.save();
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const statusSelect = document.getElementById('status-select');
    const schedulingSection = document.getElementById('scheduling-section');
    const enableScheduling = document.getElementById('enable-scheduling');
    const datetimeInput = document.getElementById('datetime-input');
    
    // Función para mostrar/ocultar la sección de programación
    function toggleSchedulingSection() {
        if (statusSelect.value === 'borrador') {
            schedulingSection.style.display = 'none';
            enableScheduling.checked = false;
            datetimeInput.style.display = 'none';
        } else {
            schedulingSection.style.display = 'block';
        }
    }
    
    // Ejecutar al cargar la página
    toggleSchedulingSection();
    
    // Ejecutar cuando cambia el status
    statusSelect.addEventListener('change', toggleSchedulingSection);
    
    // Mostrar/ocultar campo de fecha cuando se marca el checkbox
    enableScheduling.addEventListener('change', function() {
        datetimeInput.style.display = this.checked ? 'block' : 'none';
    });
});
</script>