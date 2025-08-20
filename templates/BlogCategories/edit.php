
    <style>
        * {
            box-sizing: border-box;
        }

       
        .form-container {
            background: linear-gradient(145deg, #e6f2ff, #d1e7ff);
            border-radius: 30px;
            padding: 40px;
            box-shadow: 
                20px 20px 40px rgba(166, 180, 200, 0.4),
                -20px -20px 40px rgba(255, 255, 255, 0.8);
            max-width: 600px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #4a5568;
            font-weight: 300;
            font-size: 2.2em;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.8);
        }

        .form-group {
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 12px;
            color: #4a5568;
            font-weight: 500;
            font-size: 1.1em;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 18px 24px;
            border: none;
            border-radius: 20px;
            background: linear-gradient(145deg, #e6f2ff, #d1e7ff);
            box-shadow: 
                inset 8px 8px 16px rgba(166, 180, 200, 0.3),
                inset -8px -8px 16px rgba(255, 255, 255, 0.7);
            font-size: 16px;
            color: #4a5568;
            transition: all 0.3s ease;
            outline: none;
        }

        input[type="text"]:focus,
        textarea:focus {
            box-shadow: 
                inset 12px 12px 20px rgba(166, 180, 200, 0.4),
                inset -12px -12px 20px rgba(255, 255, 255, 0.9),
                0 0 0 3px rgba(99, 179, 237, 0.1);
        }

        textarea {
            min-height: 120px;
            resize: vertical;
            font-family: inherit;
        }

        input[type="file"] {
            padding: 20px;
            cursor: pointer;
        }

        input[type="file"]:hover {
            box-shadow: 
                inset 6px 6px 12px rgba(166, 180, 200, 0.2),
                inset -6px -6px 12px rgba(255, 255, 255, 0.8);
        }

        .image-preview {
            margin-top: 15px;
            text-align: center;
        }

        .current-image {
            display: inline-block;
            padding: 20px;
            border-radius: 20px;
            background: linear-gradient(145deg, #e6f2ff, #d1e7ff);
            box-shadow: 
                8px 8px 16px rgba(166, 180, 200, 0.3),
                -8px -8px 16px rgba(255, 255, 255, 0.7);
            margin-bottom: 15px;
        }

        .current-image img {
            max-width: 200px;
            max-height: 150px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .image-label {
            display: block;
            margin-top: 10px;
            color: #718096;
            font-size: 0.9em;
            font-weight: 400;
        }

        button {
            width: 100%;
            padding: 18px 24px;
            border: none;
            border-radius: 20px;
            background: linear-gradient(145deg, #4299e1, #3182ce);
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 
                8px 8px 16px rgba(166, 180, 200, 0.4),
                -8px -8px 16px rgba(255, 255, 255, 0.1);
            margin-top: 20px;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 
                12px 12px 20px rgba(166, 180, 200, 0.5),
                -12px -12px 20px rgba(255, 255, 255, 0.2);
        }

        button:active {
            transform: translateY(0);
            box-shadow: 
                4px 4px 8px rgba(166, 180, 200, 0.3),
                -4px -4px 8px rgba(255, 255, 255, 0.1);
        }

        /* Estilo para el placeholder del textarea */
        textarea::placeholder,
        input::placeholder {
            color: #a0aec0;
            opacity: 0.7;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .form-container {
                padding: 30px 20px;
                margin: 10px;
            }
            
            h2 {
                font-size: 1.8em;
                margin-bottom: 30px;
            }
        }
    </style>

    <div class="form-container">
        <h2><?= $this->fetch('title') ?></h2>
        
        <?= $this->Form->create($blogCategory, ['enctype' => 'multipart/form-data']) ?>
        
        <div class="form-group">
            <?= $this->Form->control('name', [
                'label' => 'Nombre de la categoría',
                'placeholder' => 'Ingresa el nombre de la categoría...',
                'div' => false,
                'templates' => [
                    'inputContainer' => '{{content}}',
                    'label' => '<label{{attrs}}>{{text}}</label>',
                    'input' => '<input type="{{type}}" name="{{name}}"{{attrs}}/>',
                ]
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('description', [
                'type' => 'textarea',
                'label' => 'Descripción',
                'placeholder' => 'Describe brevemente esta categoría...',
                'div' => false,
                'templates' => [
                    'inputContainer' => '{{content}}',
                    'label' => '<label{{attrs}}>{{text}}</label>',
                    'textarea' => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',
                ]
            ]) ?>
        </div>

        <div class="form-group">
            <?= $this->Form->control('image', [
                'type' => 'file',
                'label' => 'Imagen (JPG, PNG)',
                'accept' => 'image/*',
                'div' => false,
                'templates' => [
                    'inputContainer' => '{{content}}',
                    'label' => '<label{{attrs}}>{{text}}</label>',
                    'file' => '<input type="file" name="{{name}}"{{attrs}}/>',
                ]
            ]) ?>
            
            <?php if (!empty($blogCategory->image)): ?>
                <div class="image-preview">
                    <div class="current-image">
                        <img src="<?= $this->Url->webroot('img/' . $blogCategory->image) ?>" 
                             alt="Imagen actual">
                        <span class="image-label">Imagen actual</span>
                    </div>
                    <p style="color: #718096; font-size: 0.9em; margin: 0;">
                        Selecciona una nueva imagen para reemplazar la actual
                    </p>
                </div>
            <?php endif; ?>
        </div>

        <?= $this->Form->button(__('Guardar'), [
            'templates' => [
                'button' => '<button{{attrs}}>{{text}}</button>',
            ]
        ]) ?>
        
        <?= $this->Form->end() ?>
    </div>

    <script>
        // Preview de imagen antes de subir
        document.querySelector('input[type="file"]').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    let previewContainer = document.querySelector('.image-preview');
                    if (!previewContainer) {
                        previewContainer = document.createElement('div');
                        previewContainer.className = 'image-preview';
                        e.target.parentNode.appendChild(previewContainer);
                    }
                    
                    previewContainer.innerHTML = `
                        <div class="current-image">
                            <img src="${e.target.result}" alt="Nueva imagen">
                            <span class="image-label">Nueva imagen seleccionada</span>
                        </div>
                    `;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
