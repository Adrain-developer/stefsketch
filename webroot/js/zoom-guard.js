/**
 * Zoom Guard — Detección del nivel de zoom del navegador para CSS.
 *
 * El zoom del navegador (Ctrl +/-) reduce o aumenta el viewport medido en
 * píxeles CSS (window.innerWidth), mientras que window.outerWidth se mantiene
 * estable. Su cociente aproxima el factor de zoom de forma independiente al
 * tamaño de la ventana; por eso se prefiere sobre screen.width, que reporta
 * mal cuando la ventana no está maximizada.
 *
 * Publica en el elemento <html>:
 *   - Variable CSS  --browser-zoom  (factor continuo, p. ej. 1.25)
 *   - Atributo      data-zoom-level = "normal" | "in" | "out"
 *
 * zoom-guard.css consume estos valores para compensar el tamaño de los
 * elementos con medidas fijas en px (logo del header y capas decorativas de
 * los banners del home) y así evitar que la composición se rompa al hacer
 * zoom. El responsive base no se altera: la compensación solo actúa fuera de
 * la banda "normal".
 */
(function () {
    'use strict';

    var root = document.documentElement;

    var IN_THRESHOLD = 1.1;   // ratio >= => zoom in
    var OUT_THRESHOLD = 0.9;  // ratio <= => zoom out
    var MIN_FACTOR = 0.5;     // límites de seguridad para el factor
    var MAX_FACTOR = 3;

    function detectZoom() {
        var ratio = 1;

        if (window.outerWidth && window.innerWidth) {
            ratio = window.outerWidth / window.innerWidth;
        } else if (window.devicePixelRatio) {
            ratio = window.devicePixelRatio;
        }

        // Redondeo a 2 decimales para evitar repaints por ruido subpíxel.
        ratio = Math.round(ratio * 100) / 100;

        return Math.min(MAX_FACTOR, Math.max(MIN_FACTOR, ratio));
    }

    function apply() {
        var zoom = detectZoom();
        var level = 'normal';

        if (zoom >= IN_THRESHOLD) {
            level = 'in';
        } else if (zoom <= OUT_THRESHOLD) {
            level = 'out';
        }

        root.style.setProperty('--browser-zoom', zoom);

        if (root.getAttribute('data-zoom-level') !== level) {
            root.setAttribute('data-zoom-level', level);
        }
    }

    var rafId = null;
    function schedule() {
        if (rafId) {
            return;
        }
        rafId = window.requestAnimationFrame(function () {
            rafId = null;
            apply();
        });
    }

    apply();
    window.addEventListener('resize', schedule, { passive: true });
    window.addEventListener('orientationchange', schedule, { passive: true });
})();
