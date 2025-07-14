@extends('layouts.app')

@section('title', 'Home')

@section('content')
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
        <p class="text-gray-300 max-w-md mx-auto md:mx-0">
            Passionate about building clean, functional, and visually engaging web applications using Laravel, JavaScript, and modern web tools. Always eager to learn and grow in a collaborative environment.
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
