//JS menu

document.addEventListener('DOMContentLoaded', function() {
    const hamburgerButton = document.querySelector('.hamburger-button');
    const menuPanel = document.querySelector('.menu-panel');
    const menuOverlay = document.querySelector('.menu-overlay');
    const closeButton = document.querySelector('.close-button');
    const menuItems = document.querySelectorAll('.menu-item');

    // Función para abrir/cerrar el menú
    function toggleMenu() {
        hamburgerButton.classList.toggle('active');
        menuPanel.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        document.body.style.overflow = menuPanel.classList.contains('active') ? 'hidden' : '';
    }

    // Event listeners para abrir/cerrar el menú
    hamburgerButton.addEventListener('click', toggleMenu);
    closeButton.addEventListener('click', toggleMenu);
    menuOverlay.addEventListener('click', toggleMenu);

    // Event listeners para los submenús
    menuItems.forEach(item => {
        const title = item.querySelector('.menu-title');
        title.addEventListener('click', () => {
            // Cierra otros submenús abiertos
            menuItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            item.classList.toggle('active');
        });
    });

    // Cierra el menú al hacer clic en un enlace del submenú
    const submenuLinks = document.querySelectorAll('.submenu a');
    submenuLinks.forEach(link => {
        link.addEventListener('click', () => {
            toggleMenu();
        });
    });

    // Cierra el menú al presionar ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && menuPanel.classList.contains('active')) {
            toggleMenu();
        }
    });
});
// Swiper JS
var swiper = new Swiper(".mySwiper", {
  loop: true,
  speed: 600,
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 40,
    stretch: 10,
    depth: 100,
    modifier: 1,
    slideShadows: false,
    scale: 0.8,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
  },
});

var swiperrev = new Swiper(".mySwiperrev", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 5,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
  autoplay: {
    delay: 6000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
const botonMostrarMas = document.getElementById('botonMostrarMas');
      const listaCaracteristicas = document.getElementById('listaCaracteristicas');
      const elementosOcultos = listaCaracteristicas.querySelectorAll('.oculto');
      
      botonMostrarMas.addEventListener('click', function() {
          const estaExpandido = botonMostrarMas.textContent === 'Ocultar';
          
          if (estaExpandido) {
              // Contraer la lista
              elementosOcultos.forEach(elemento => {
                  elemento.classList.add('oculto');
              });
              botonMostrarMas.textContent = 'Mostrar';
              listaCaracteristicas.scrollIntoView({ behavior: 'smooth', block: 'start' });
          } else {
              // Expandir la lista
              elementosOcultos.forEach(elemento => {
                  elemento.classList.remove('oculto');
              });
              botonMostrarMas.textContent = 'Ocultar';
              
              // Esperar a que la transición de expansión termine antes de desplazar
              setTimeout(() => {
                  // Desplazar la lista hasta la parte superior de la pantalla
                  const rect = listaCaracteristicas.getBoundingClientRect();
                  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                  const targetScrollPosition = rect.top + scrollTop - 20; // 20px de margen superior
                  
                  window.scrollTo({
                      top: targetScrollPosition,
                      behavior: 'smooth'
                  });
              }, 700);
          }
      });

(function() {
    var popupShown = false;
    var floatingButton = document.getElementById('floatingButton');

    // Función para mostrar el popup
    function showPopup() {
        document.getElementById('customPopupOverlay').style.display = 'block';
        document.getElementById('customPopup').style.display = 'block';
        document.body.style.overflow = 'hidden';
        popupShown = true;
    }

    // Función para ocultar el popup
    function hidePopup() {
        document.getElementById('customPopupOverlay').style.display = 'none';
        document.getElementById('customPopup').style.display = 'none';
        document.body.style.overflow = '';
        
        // Mostrar el botón flotante solo después de que el popup se haya mostrado una vez
        if (popupShown) {
            setTimeout(showFloatingButton, 300);
        }
    }

    // Función para mostrar el botón flotante
    function showFloatingButton() {
        floatingButton.style.display = 'block';
        // Forzar un reflow para que la animación funcione
        void floatingButton.offsetWidth;
        floatingButton.classList.add('visible');
        // Agregar efecto de pulso después de un momento
        setTimeout(function() {
            floatingButton.classList.add('pulse');
        }, 1000);
    }

    // Resto de funciones previas del countdown...

    // Event listeners
    floatingButton.addEventListener('click', function() {
        floatingButton.classList.remove('visible');
        setTimeout(function() {
            floatingButton.style.display = 'none';
            showPopup();
        }, 300);
    });

    // Función para agregar ceros a la izquierda
    function padNumber(number) {
        return number < 10 ? '0' + number : number;
    }

    // Función de cuenta regresiva
    function updateCountdown() {
        var targetDate = new Date('2024-11-01T00:00:00');
        var now = new Date();
        var difference = targetDate - now;

        if (difference > 0) {
            var days = Math.floor(difference / (1000 * 60 * 60 * 24));
            var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((difference % (1000 * 60)) / 1000);

            document.getElementById('countdown-days').textContent = padNumber(days);
            document.getElementById('countdown-hours').textContent = padNumber(hours);
            document.getElementById('countdown-minutes').textContent = padNumber(minutes);
            document.getElementById('countdown-seconds').textContent = padNumber(seconds);
        } else {
            document.getElementById('countdown-days').textContent = '00';
            document.getElementById('countdown-hours').textContent = '00';
            document.getElementById('countdown-minutes').textContent = '00';
            document.getElementById('countdown-seconds').textContent = '00';
        }
    }

    // Iniciar cuenta regresiva
    updateCountdown();
    setInterval(updateCountdown, 1000);


    // Cerrar popup con el botón X
    document.getElementById('customPopupClose').onclick = hidePopup;

    // Cerrar popup con click en overlay
    document.getElementById('customPopupOverlay').onclick = hidePopup;

    // Cerrar con la tecla ESC
    document.onkeydown = function(evt) {
        evt = evt || window.event;
        if (evt.keyCode === 27) {
            hidePopup();
        }
    };

    // Mostrar popup inicial después de 8 segundos
    setTimeout(showPopup, 9000);
})();

// Función para mostrar el botón después de 5 segundos de carga
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        const whatsappButton = document.querySelector('.float-whatsapp');
        whatsappButton.style.display = 'flex';
    // Función para activar la animación de salto cada 10 segundos
    setInterval(function() {
      whatsappButton.classList.add('bounce-animation');       
    // Remover la clase después de 1 segundo (duración de la animación)
    setTimeout(function() {
        whatsappButton.classList.remove('bounce-animation');
    }, 1000);
  }, 8000); // 10000ms = 10 segundos
}, 5000);
});



