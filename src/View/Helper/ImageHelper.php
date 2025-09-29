<?php
namespace App\View\Helper;

use Cake\View\Helper;

class ImageHelper extends Helper
{
    /**
     * Obtiene la URL de una imagen optimizada según el tamaño deseado
     * 
     * @param string $imagePath Ruta relativa de la imagen (ej: 'bannersBlog/imagen.webp')
     * @param string $size Tamaño deseado: 'thumb', 'medium', 'full'
     * @param string $format Formato deseado: 'webp' o 'jpg'
     * @return string URL de la imagen optimizada
     */
    public function getOptimizedUrl($imagePath, $size = 'full', $format = 'webp')
    {
        if (empty($imagePath)) {
            return '';
        }

        // Extraer información del path
        $pathInfo = pathinfo($imagePath);
        $directory = $pathInfo['dirname']; // ej: 'bannersBlog' o 'gallery'
        $filename = $pathInfo['filename'];  // nombre sin extensión
        
        // Determinar el directorio según el tamaño
        switch ($size) {
            case 'thumb':
                $sizeDir = 'thumbs';
                break;
            case 'medium':
                $sizeDir = 'medium';
                break;
            case 'full':
            default:
                $sizeDir = '';
                break;
        }

        // Construir la ruta
        if ($sizeDir) {
            $optimizedPath = $directory . '/' . $sizeDir . '/' . $filename . '.' . $format;
        } else {
            $optimizedPath = $directory . '/' . $filename . '.' . $format;
        }

        // Verificar que el archivo existe, si no, usar el original
        $fullPath = WWW_ROOT . 'img' . DS . str_replace('/', DS, $optimizedPath);
        
        if (!file_exists($fullPath)) {
            // Si no existe el optimizado, intentar con el original
            $optimizedPath = $imagePath;
        }

        return '/img/' . $optimizedPath;
    }

    /**
     * Genera un tag <img> con srcset responsive
     * 
     * @param string $imagePath Ruta de la imagen
     * @param array $options Opciones adicionales
     * @return string HTML del tag img
     */
    public function responsive($imagePath, array $options = [])
    {
        $defaults = [
            'alt' => '',
            'class' => '',
            'loading' => 'lazy',
            'sizes' => '(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw'
        ];

        $options = array_merge($defaults, $options);

        // Generar srcset
        $thumbUrl = $this->getOptimizedUrl($imagePath, 'thumb', 'webp');
        $mediumUrl = $this->getOptimizedUrl($imagePath, 'medium', 'webp');
        $fullUrl = $this->getOptimizedUrl($imagePath, 'full', 'webp');
        $fallbackUrl = $this->getOptimizedUrl($imagePath, 'full', 'jpg');

        $srcset = sprintf(
            '%s 400w, %s 800w, %s 1600w',
            $thumbUrl,
            $mediumUrl,
            $fullUrl
        );

        return sprintf(
            '<picture>
                <source type="image/webp" srcset="%s" sizes="%s">
                <img src="%s" srcset="%s" sizes="%s" alt="%s" class="%s" loading="%s">
            </picture>',
            $srcset,
            $options['sizes'],
            $fallbackUrl,
            $srcset,
            $options['sizes'],
            h($options['alt']),
            h($options['class']),
            $options['loading']
        );
    }

    /**
     * Genera un tag <img> simple con una sola versión optimizada
     * 
     * @param string $imagePath Ruta de la imagen
     * @param string $size Tamaño: 'thumb', 'medium', 'full'
     * @param array $options Opciones del tag img
     * @return string HTML del tag img
     */
    public function simple($imagePath, $size = 'thumb', array $options = [])
    {
        $defaults = [
            'alt' => '',
            'class' => '',
            'loading' => 'lazy'
        ];

        $options = array_merge($defaults, $options);

        // Intentar WebP primero, fallback a JPG
        $webpUrl = $this->getOptimizedUrl($imagePath, $size, 'webp');
        $jpgUrl = $this->getOptimizedUrl($imagePath, $size, 'jpg');

        return sprintf(
            '<picture>
                <source type="image/webp" srcset="%s">
                <img src="%s" alt="%s" class="%s" loading="%s">
            </picture>',
            $webpUrl,
            $jpgUrl,
            h($options['alt']),
            h($options['class']),
            $options['loading']
        );
    }

    /**
     * Genera CSS background-image optimizado
     * 
     * @param string $imagePath Ruta de la imagen
     * @param string $size Tamaño deseado
     * @return string CSS inline para background-image
     */
    public function background($imagePath, $size = 'full')
    {
        $webpUrl = $this->getOptimizedUrl($imagePath, $size, 'webp');
        $jpgUrl = $this->getOptimizedUrl($imagePath, $size, 'jpg');

        return sprintf(
            "background-image: url('%s'), url('%s');",
            $webpUrl,
            $jpgUrl
        );
    }
}