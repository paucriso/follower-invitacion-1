@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
@endpush

<section class="bg-white py-20 z-50 relative">
    <h2 id="galeria" class="text-center font-simonetta uppercase text-3xl mb-12 text-pink-800 font-black">Momentos Inolvidables</h2>
    <div class="columns-2 lg:columns-3  px-20 relative">
        <a href="{{asset('storage/images/galeria/foto-1.jpg')}}" data-lightbox="momentos">
            <img class="mb-4" src="{{asset('storage/images/galeria/foto-1.jpg')}}" />
        </a>
        <a href="{{asset('storage/images/galeria/foto-2.jpg')}}" data-lightbox="momentos">
            <img class="mb-4" src="{{asset('storage/images/galeria/foto-2.jpg')}}" />
        </a>
        <a href="{{asset('storage/images/galeria/foto-3.jpg')}}" data-lightbox="momentos">
            <img class="mb-4" src="{{asset('storage/images/galeria/foto-3.jpg')}}" />
        </a>
        <a href="{{asset('storage/images/galeria/foto-4.jpg')}}" data-lightbox="momentos">
            <img class="mb-4" src="{{asset('storage/images/galeria/foto-4.jpg')}}" />
        </a>
        <a href="{{asset('storage/images/galeria/foto-5.jpg')}}" data-lightbox="momentos">
            <img class="mb-4" src="{{asset('storage/images/galeria/foto-5.jpg')}}" />
        </a>
        <a href="{{asset('storage/images/galeria/foto-6.jpg')}}" data-lightbox="momentos">
            <img class="mb-4" src="{{asset('storage/images/galeria/foto-6.jpg')}}" />
        </a>


    </div>
</section>

@push('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.min.js"></script>
@endpush
