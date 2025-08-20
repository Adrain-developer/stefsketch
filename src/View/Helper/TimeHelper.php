<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\I18n\FrozenTime;

class TimeHelper extends Helper
{
    public function timeAgoInSpanish($time)
    {
        $now = FrozenTime::now();
        $diff = $now->diff($time);
        
        if ($diff->y > 0) {
            return $diff->y == 1 ? 'Hace 1 año' : "Hace {$diff->y} años";
        } elseif ($diff->m > 0) {
            return $diff->m == 1 ? 'Hace 1 mes' : "Hace {$diff->m} meses";
        } elseif ($diff->d >= 7) {
            $weeks = floor($diff->d / 7);
            return $weeks == 1 ? 'Hace 1 semana' : "Hace {$weeks} semanas";
        } elseif ($diff->d > 0) {
            return $diff->d == 1 ? 'Hace 1 día' : "Hace {$diff->d} días";
        } elseif ($diff->h > 0) {
            return $diff->h == 1 ? 'Hace 1 hora' : "Hace {$diff->h} horas";
        } elseif ($diff->i > 0) {
            return $diff->i == 1 ? 'Hace 1 minuto' : "Hace {$diff->i} minutos";
        } else {
            return 'Hace unos momentos';
        }
    }
}