<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBlogBanners extends AbstractMigration
{
    /**
     * Tabla que almacena las imágenes (3 capas) y textos editables de los
     * banners parallax de la portada del portafolio (templates/Blog/index).
     *
     * Cada banner se identifica por un "banner_key" estable ('hero', 'historia').
     * Las capas son opcionales: si están vacías, la portada usa la imagen por
     * defecto original, de modo que el sitio nunca se ve incompleto.
     */
    public function change(): void
    {
        $this->table('blog_banners')
            ->addColumn('banner_key', 'string', [
                'limit' => 50,
                'null' => false,
                'comment' => 'Identificador estable del banner (hero, historia)',
            ])
            ->addColumn('name', 'string', [
                'limit' => 150,
                'null' => true,
                'default' => null,
            ])
            ->addColumn('layer1', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
                'comment' => 'Capa 1 - Fondo (ruta relativa a webroot/img)',
            ])
            ->addColumn('layer2', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
                'comment' => 'Capa 2 - PNG transparente',
            ])
            ->addColumn('layer3', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
                'comment' => 'Capa 3 - PNG transparente',
            ])
            ->addColumn('heading', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
                'comment' => 'Título editable (solo banners con texto)',
            ])
            ->addColumn('paragraph', 'text', [
                'null' => true,
                'default' => null,
                'comment' => 'Párrafo editable (solo banners con texto)',
            ])
            ->addColumn('created', 'datetime', [
                'null' => true,
                'default' => null,
            ])
            ->addColumn('modified', 'datetime', [
                'null' => true,
                'default' => null,
            ])
            ->addIndex(['banner_key'], ['unique' => true])
            ->create();
    }
}
