<?php
declare(strict_types=1);
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Http\Exception\NotFoundException;
use App\Model\Entity\BlogBanner;

/**
 * BlogBanners Model
 *
 * Gestiona los banners parallax dinámicos de la portada del portafolio.
 * La estructura de cada banner (capas, medidas recomendadas, formato y la
 * imagen/texto por defecto) vive en la constante BANNERS para mantener una
 * única fuente de verdad compartida entre el admin y la vista pública.
 */
class BlogBannersTable extends Table
{
    /**
     * Directorio (dentro de webroot/img) donde se guardan las imágenes
     * personalizadas de los banners procesadas por ImageProcessorService.
     */
    public const IMG_DIR = 'bannersSecciones';

    /**
     * Configuración de los banners editables.
     *
     * - default: ruta relativa a webroot/img usada cuando no hay imagen
     *   personalizada (mantiene el diseño original intacto).
     * - size / format: medidas y formato recomendados mostrados al admin.
     */
    public const BANNERS = [
        'hero' => [
            'name' => 'Banner Principal (Hero)',
            'section' => 'Portada del portafolio · dinosaurio, nave y diálogo con parallax.',
            'has_text' => false,
            'layers' => [
                'layer1' => [
                    'label' => 'Capa 1 · Fondo',
                    'help' => 'Fondo del banner. Se recomienda JPG o WEBP para un peso ligero.',
                    'format' => 'JPG / WEBP',
                    'size' => '1920 × 1080 px',
                    'default' => 'Fondo_banner_Hero.jpg',
                ],
                'layer2' => [
                    'label' => 'Capa 2 · Diálogo',
                    'help' => 'Globo de diálogo. Debe ser PNG con fondo transparente.',
                    'format' => 'PNG (fondo transparente)',
                    'size' => '400 × 300 px',
                    'default' => 'Dialogo.png',
                ],
                'layer3' => [
                    'label' => 'Capa 3 · Nave y Dinosaurio',
                    'help' => 'Ilustración principal. Debe ser PNG con fondo transparente.',
                    'format' => 'PNG (fondo transparente)',
                    'size' => '720 × 1080 px',
                    'default' => 'Nave_y_dino.png',
                ],
            ],
        ],
        'historia' => [
            'name' => 'Banner Historia (¡Hola!)',
            'section' => 'Sección "¡Hola!" · fondo, texturas y sirena con parallax.',
            'has_text' => true,
            'text' => [
                'heading' => '¡Hola!',
                'paragraph' => 'Soy Estefanía Palma, ilustradora mexicana en Puebla. Transformo historias en imágenes llenas de color y emoción.',
            ],
            'layers' => [
                'layer1' => [
                    'label' => 'Capa 1 · Fondo',
                    'help' => 'Fondo del banner (efecto parallax). Se recomienda JPG o WEBP.',
                    'format' => 'JPG / WEBP',
                    'size' => '1920 × 1080 px',
                    'default' => 'banner-seccion-historia.jpg',
                ],
                'layer2' => [
                    'label' => 'Capa 2 · Texturas',
                    'help' => 'Texturas decorativas (burbujas, estrellas). PNG con fondo transparente.',
                    'format' => 'PNG (fondo transparente)',
                    'size' => '600 × 300 px',
                    'default' => 'texturasBannerParallax.png',
                ],
                'layer3' => [
                    'label' => 'Capa 3 · Sirena',
                    'help' => 'Ilustración de la sirena. PNG con fondo transparente.',
                    'format' => 'PNG (fondo transparente)',
                    'size' => '406 × 406 px',
                    'default' => 'sirenaBannerParallax.png',
                ],
            ],
        ],
    ];

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('blog_banners');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('banner_key')
            ->maxLength('banner_key', 50)
            ->requirePresence('banner_key', 'create')
            ->notEmptyString('banner_key');

        $validator
            ->scalar('name')
            ->maxLength('name', 150)
            ->allowEmptyString('name');

        foreach (['layer1', 'layer2', 'layer3'] as $layer) {
            $validator
                ->scalar($layer)
                ->maxLength($layer, 255)
                ->allowEmptyString($layer);
        }

        $validator
            ->scalar('heading')
            ->maxLength('heading', 255)
            ->allowEmptyString('heading');

        $validator
            ->scalar('paragraph')
            ->allowEmptyString('paragraph');

        return $validator;
    }

    /**
     * Obtiene (o crea si aún no existe) el banner para una clave dada.
     * Auto-provisiona la fila la primera vez que el admin abre el módulo.
     */
    public function getForKey(string $key): BlogBanner
    {
        if (!isset(self::BANNERS[$key])) {
            throw new NotFoundException(__('Banner no encontrado.'));
        }

        /** @var \App\Model\Entity\BlogBanner|null $banner */
        $banner = $this->find()->where(['banner_key' => $key])->first();

        if (!$banner) {
            $banner = $this->newEntity([
                'banner_key' => $key,
                'name' => self::BANNERS[$key]['name'],
            ]);
            $this->saveOrFail($banner);
        }

        return $banner;
    }

    /**
     * Devuelve todos los banners indexados por banner_key.
     *
     * @return array<string, \App\Model\Entity\BlogBanner>
     */
    public function getAllKeyed(): array
    {
        $keyed = [];
        foreach ($this->find()->all() as $row) {
            $keyed[$row->banner_key] = $row;
        }

        return $keyed;
    }

    /**
     * Resuelve la información lista para renderizar en la portada pública.
     * Cada capa cae al valor por defecto si no hay imagen personalizada, y el
     * texto cae al valor por defecto si está vacío. Es tolerante a fallos:
     * si la tabla aún no existe (migración pendiente) devuelve los defaults.
     *
     * @return array<string, array<string, string>>
     */
    public function resolveForPublic(): array
    {
        try {
            $keyed = $this->getAllKeyed();
        } catch (\Exception $e) {
            $keyed = [];
        }

        $out = [];
        foreach (self::BANNERS as $key => $config) {
            $row = $keyed[$key] ?? null;
            $data = [];

            foreach ($config['layers'] as $layer => $meta) {
                $stored = $row ? $row->get($layer) : null;
                $data[$layer] = !empty($stored) ? $stored : $meta['default'];
            }

            if (!empty($config['has_text'])) {
                $heading = $row ? trim((string)$row->heading) : '';
                $paragraph = $row ? trim((string)$row->paragraph) : '';
                $data['heading'] = $heading !== '' ? $heading : $config['text']['heading'];
                $data['paragraph'] = $paragraph !== '' ? $paragraph : $config['text']['paragraph'];
            }

            $out[$key] = $data;
        }

        return $out;
    }
}
