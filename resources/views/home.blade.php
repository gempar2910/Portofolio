@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Real-Time Clock (Kiri Atas) --}}
    <div id="clock" class="fixed top-4 left-4 text-cyan-400 font-mono text-sm z-50"></div>

    {{-- Hero Section --}}
    <section class="min-h-screen flex flex-col md:flex-row items-center justify-center px-6 py-20 gap-12 max-w-6xl mx-auto" data-aos="fade-up">

        {{-- Left Content --}}
        <div class="text-center md:text-left space-y-6 flex-1">
            <p class="text-sm uppercase tracking-widest text-gray-400">Hi, I'm</p>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
                Gempar Ramadhan
            </h1>
            <h2 class="text-2xl md:text-3xl font-semibold text-cyan-400">
                Junior Backend & Frontend Developer
            </h2>
            <p class="text-gray-300 max-w-md mx-auto md:mx-0 text-lg font-medium">
                <span id="typed-text"></span><span class="blinking-cursor">|</span>
            </p>
        </div>

        {{-- Right Image --}}
        <div class="flex-1">
            <div class="relative w-60 h-60 rounded-full overflow-hidden border-4 border-cyan-400 shadow-lg mx-auto hover:scale-105 transition duration-300">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover">
            </div>
        </div>

    </section>

@endsection

@push('scripts')
<script>
    // Jam Digital (Realtime Clock)
    function updateClock() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
    }
    setInterval(updateClock, 1000);
    updateClock(); // initial call

    // Animasi Mengetik
    document.addEventListener("DOMContentLoaded", () => {
        const sentences = [
            "Laravel & JS developer.",
            "Clean code, modern UI.",
            "Always growing & learning."
        ];
        let part = '';
        let i = 0;
        let offset = 0;
        let forwards = true;
        let skipCount = 0;
        const skipDelay = 15;
        const speed = 50;
        const typedText = document.getElementById("typed-text");

        function typeEffect() {
            setInterval(() => {
                if (forwards) {
                    if (offset >= sentences[i].length) {
                        skipCount++;
                        if (skipCount === skipDelay) {
                            forwards = false;
                            skipCount = 0;
                        }
                    }
                } else {
                    if (offset === 0) {
                        forwards = true;
                        i++;
                        if (i >= sentences.length) i = 0;
                    }
                }

                part = sentences[i].substring(0, offset);
                if (forwards) {
                    offset++;
                } else {
                    offset--;
                }

                typedText.textContent = part;
            }, speed);
        }

        typeEffect();
    });
</script>

<style>
    /* Cursor Ketik */
    .blinking-cursor {
        font-weight: normal;
        font-size: 1.2rem;
        color: inherit;
        animation: blink 1s step-end infinite;
    }

    @keyframes blink {
        50% {
            opacity: 0;
        }
    }

    /* Glow effect untuk jam */
    #clock {
        text-shadow: 0 0 5px #0bf, 0 0 10px #0bf, 0 0 20px #0bf;
    }
</style>
@endpush
