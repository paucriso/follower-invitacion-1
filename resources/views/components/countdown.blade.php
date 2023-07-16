
<div
    x-data="timer()"
    x-init="countdown()"
    style="background-image: url({{asset('storage/images/contador.jpg')}})"
    class="h-96 w-full bg-cover bg-center font-nanum font-bold bg-no-repeat"
>
    <div class="max-w-full h-96 text-white flex flex-col items-center justify-around py-20">
        <h2 class="text-3xl font-nanum font-medium mb-10">Faltan:</h2>
        <div class="flex justify-around items-center w-full h-full">
            <div class="flex justify-center items-center flex-col">
                <p class="contenedor-fecha relative flex justify-center items-center text-3xl font-bold font-nanum w-20 h-20
                    bg-white bg-opacity-20 rounded-xl">
                    <span x-text="days"></span>
                    <img class="absolute -bottom-2 -right-3 w-8" src="{{asset('storage/images/florecita.png')}}" alt="">
                </p>
                <p class="pt-2 tracking-wide text-lg italic">Días</p>
            </div>
            <div class="flex justify-center items-center flex-col">
                <p class="contenedor-fecha relative flex justify-center items-center text-3xl font-bold font-nanum w-20 h-20
                    bg-white bg-opacity-20 rounded-xl">
                    <span x-text="hours"></span>
                    <img class="absolute -bottom-2 -right-3 w-8" src="{{asset('storage/images/florecita.png')}}" alt="">
                </p>
                <p class="pt-2 tracking-wide text-lg italic">Horas</p>
            </div>
            <div class="flex justify-center items-center flex-col">
                <p class="contenedor-fecha relative flex justify-center items-center text-3xl font-bold font-nanum w-20 h-20
                    bg-white bg-opacity-20 rounded-xl">
                    <span x-text="minutes"></span>
                    <img class="absolute -bottom-2 -right-3 w-8" src="{{asset('storage/images/florecita.png')}}" alt="">
                </p>
                <p class="pt-2 tracking-wide text-lg italic">Minutos</p>
            </div>
            <div class="flex justify-center items-center flex-col">
                <p class="contenedor-fecha relative flex justify-center items-center text-3xl font-bold font-nanum w-20 h-20
                    bg-white bg-opacity-20 rounded-xl">
                    <span x-text="seconds"></span>
                    <img class="absolute -bottom-2 -right-3 w-8" src="{{asset('storage/images/florecita.png')}}" alt="">
                </p>
                <p class="pt-2 tracking-wide text-lg italic">Segundos</p>
            </div>
        </div>
        <h2 class="text-3xl font-nanum font-medium mt-10">para casarnos</h2>

    </div>
</div>

@push('scripts')
 <script>
    function timer() {
        return {
            days: "00",
            hours: "00",
            minutes: "00",
            seconds: "00",
            endTime: new Date("December 31, 2023 23:59:59 GMT+6").getTime(),
            now: new Date().getTime(),
            timeLeft: 0,
            countdown: function() {
                let counter = setInterval(() => {
                    this.now = new Date().getTime();
                    this.timeLeft = (this.endTime - this.now)/1000;
                    this.seconds = this.format(this.timeLeft % 60);
                    this.minutes = this.format(this.timeLeft / 60) % 60;
                    this.hours = this.format(this.timeLeft / (60 * 60)) % 24;
                    this.days = this.format(this.timeLeft / (60 * 60 * 24));
                    if(this.timeLeft <= 0) {
                        clearInterval(counter);
                        this.seconds = "00";
                        this.minutes = "00";
                        this.hours = "00";
                        this.days = "00";
                    }
                }, 1000);
            },
            format: function(value) {
                console.log(value);
                if(value < 10) {
                    return "0" + Math.floor(value);
                }else{
                    return Math.floor(value);
                }
            }
        }
    }
 </script>
@endpush
