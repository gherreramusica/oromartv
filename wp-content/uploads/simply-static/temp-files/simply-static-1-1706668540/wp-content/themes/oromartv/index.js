
var swiper = new Swiper(".swiper-guardianes", {
  effect: "cards",
  grabCursor: true,
});

var toggle = document.querySelector('.toggle');
var bar = document.querySelector('.bar');
var list = document.querySelector('.nav-menu');

toggle.addEventListener('click', () => {
    bar.classList.toggle('show');
    list.classList.toggle('show');
});




// Swiper Slider

var swiper = new Swiper(".hero-slider", {
    loop: true,
    direction: "vertical",
    effect: 'fade',
    
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

 // Siper Carousel videos


var swiper = new Swiper(".swiper-videos", {
    slidesPerView: 5,
    spaceBetween: 50,
    loop: true,
    
    breakpoints: {
        332: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1224: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
      },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  
    // Swiper Programas

        var swiper = new Swiper(".swiper-programas", {
        slidesPerView: 5,
        spaceBetween: 10,
        loop: true,
       
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        breakpoints: {
            332: {
                slidesPerView: 2,
                spaceBetween: 10,
              },
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
            1224: {
              slidesPerView: 4,
              spaceBetween: 20,
            },
          },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      
      // Swiper-GUARDIANES

     
        var swiper = new Swiper(".guardianes-carousel", {
          effect: "coverflow",
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
          },
          pagination: {
            el: ".swiper-pagination",
          },
        });
     

      // STICKY HEADER
      
     
       window.addEventListener("scroll", function (){
         var header = document.querySelector('.header-container');
         var scrollPosition = window.scrollY;

         if (scrollPosition > 100) {
           header.classList.add('sticky-header');
         } else {
           header.classList.remove('sticky-header');
         }
       });


 
     
   function breakingNews () {
     const notification = document.querySelector('.notification');
     const cerrar = document.querySelector('.x');
   
     cerrar.addEventListener('click', () => {
         notification.classList.add('ocultar');
     });
     }
     breakingNews();



     document.addEventListener('DOMContentLoaded', function () {
      const replyLinks = document.querySelectorAll('.reply-link');
  
      replyLinks.forEach(function (link) {
          link.addEventListener('click', function (event) {
              event.preventDefault();
  
              // Obtener el contenedor del formulario de respuesta
              const replyFormContainer = link.closest('.oromartv-comments').querySelector('.comment-form');
  
              // Mostrar u ocultar el formulario de respuesta al hacer clic
              if (replyFormContainer.style.display === 'none') {
                  replyFormContainer.style.display = 'block';
              } else {
                  replyFormContainer.style.display = 'none';
              }
          });
      });
  });
  






// Verificar si la barra de administración de WordPress está visible
function adminBarVisible() {
  return $('#wpadminbar').length > 0 && $('#wpadminbar').css('display') !== 'none';
}

// Función para ajustar el posicionamiento del encabezado si la barra de administración está visible
function ajustarPosicionEncabezado() {
  var header = $('.header');
  if (adminBarVisible()) {
      var adminBarHeight = $('#wpadminbar').outerHeight(); // Obtener altura de la barra de administración
      header.css('top', adminBarHeight + 'px'); // Ajustar el posicionamiento del encabezado
  } else {
      header.css('top', '0'); // Volver al posicionamiento predeterminado si la barra no está visible
  }
}

// Llamar a la función al cargar la página y en cambios de tamaño de la ventana
$(document).ready(function() {
  ajustarPosicionEncabezado(); // Ajustar al cargar la página
  $(window).resize(ajustarPosicionEncabezado); // Ajustar al cambiar el tamaño de la ventana
});





    





 






 

