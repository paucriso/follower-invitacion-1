<section style="background-image: url('{{asset('storage/images/old-paper.jpg')}}')"
         class="bg-stone-200 px-5 lg:px-20 pt-12 pb-20 min-h-[300px] h-auto">
    <h1 class="text-center font-simonetta uppercase text-3xl mb-12 text-pink-800 font-black">
        Te invitamos a nuestra boda
    </h1>
    <img class="mx-auto max-w-[160px] mb-2" src="{{asset('storage/images/rings.png')}}" alt="anillos de boda">
    <p class="text-center font-simonetta text-xl font-medium my-6">Queremos que compartan junto a nosotros éste momento tan especial.</p>
    <div class="bg-white shadow-lg rounded-md max-w-2xl mx-auto text-center p-8 mt-3">
        <h3 class="font-bold text-lg mb-2 text-neutral-700">Código de Invitado</h3>
        @livewire('confirmation-code')
    </div>
</section>
