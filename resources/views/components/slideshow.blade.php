<div>
    @push('styles')
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    @endpush


    <div class="swiper mySwiper relative">
        <div id="particlesjs" class="absolute w-full h-full top-0 left-0 z-10"></div>
        <div class="swiper-wrapper">

            <div class="swiper-slide relative bg-center" style="background-image: url('{{ asset('storage/images/pareja-1-portada-1.jpg')}}');">
                <div class="leading-relaxed text-white text-center absolute top-1/2 left-1/2
                            transform -translate-x-1/2 -translate-y-1/2">
                            <h3 class="font-open text-lg">TE INVITAMOS A NUESTRA BODA</h3>
                            <h1 class="font-simonetta text-6xl">MEGAN & ALEX</h1>
                            <div class="py-4">
                                <img class="mx-auto max-h-8" src="{{asset('storage/images/divisor.png')}}" alt="">
                            </div>
                            <p class="font-open italic font-extralight tracking-wider">Te invitamos a compartir la alegría de compartir nuestras vidas.</p>
                </div>
            </div>

            <div class="swiper-slide relative bg-top" style="background-image: url('{{ asset('storage/images/pareja-1-portada-2.jpg')}}');">
                <div class="leading-relaxed text-white text-center absolute top-1/2 left-1/2
                            transform -translate-x-1/2 -translate-y-1/2">
                            <h3 class="font-open text-lg">TE INVITAMOS A NUESTRA BODA</h3>
                            <h1 class="font-simonetta text-6xl">MEGAN & ALEX</h1>
                            <div class="py-4">
                                <img class="mx-auto max-h-8" src="{{asset('storage/images/divisor.png')}}" alt="">
                            </div>
                            <p class="font-open italic font-extralight">Te invitamos a compartir la alegría de compartir nuestras vidas.</p>
                </div>
            </div>

        </div>
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> --}}
      </div>

@push('scripts')
<script>console.log('funcionando');</script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
         navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        mousewheel: false,
        keyboard: false,
            autoplay: {
                delay: 5000,
        },
        loop: false,
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js" integrity="sha512-Kef5sc7gfTacR7TZKelcrRs15ipf7+t+n7Zh6mKNJbmW+/RRdCW9nwfLn4YX0s2nO6Kv5Y2ChqgIakaC6PW09A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

particlesJS(
{
  "particles": {
    "number": {
      "value": 40,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#fff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 500,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 2
    },
    "move": {
      "enable": true,
      "speed": 2,
      "direction": "bottom",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "bubble"
      },
      "onclick": {
        "enable": false,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 0.5
        }
      },
      "bubble": {
        "distance": 400,
        "size": 4,
        "duration": 0.3,
        "opacity": 1,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
)

    </script>
@endpush
</div>
