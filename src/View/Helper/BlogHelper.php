<?php
namespace App\View\Helper;

use Cake\View\Helper;
use League\CommonMark\CommonMarkConverter;

class BlogHelper extends Helper
{
    public function processContent($body, $galleryJson = null)
    {
        $gallery = $galleryJson ? json_decode($galleryJson, true) : [];

        // Reemplazar shortcodes [img:0], etc.
        $bodyWithImages = $this->processImages($body, $gallery);

        // Convertir a HTML (Markdown)
        $converter = new CommonMarkConverter([
            'html_input' => 'allow', // ⬅ permite HTML como <img>
            'allow_unsafe_links' => false,
        ]);
        $html = $converter->convertToHtml($bodyWithImages);

        return $html;
    }

    private function processImages($content, $images)
    {
        return preg_replace_callback('/\[img:(\d+)\]/', function ($matches) use ($images) {
            $index = (int)$matches[1];
            if (isset($images[$index])) {
                $url = $images[$index];
                return "<img src='/img/{$url}' alt='imagen blog' class='img-fluid mb-3'>";
            }
            return '';
        }, $content);
    }
}
