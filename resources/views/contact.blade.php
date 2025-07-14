@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<section class="py-20 px-6 max-w-4xl mx-auto text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-cyan-400 mb-6">Contact Me</h2>
    <p class="text-gray-300 mb-8">
        Feel free to reach out for collaboration, freelance projects, or just to connect!
    </p>

    <div class="space-y-4 text-gray-200 text-left max-w-md mx-auto">
        <p><strong>📧 Email:</strong> <a href="mailto:gempar@example.com" class="text-cyan-400 hover:underline">gempar@example.com</a></p>
        <p><strong>📱 Phone:</strong> <a href="https://wa.me/6281234567890" class="text-cyan-400 hover:underline">+62 812-3456-7890</a></p>
        <p><strong>📍 Location:</strong> Jakarta, Indonesia</p>
    </div>

    <div class="mt-8 flex justify-center gap-6">
        <a href="https://github.com/gempar2910" target="_blank" class="hover:scale-110 transition">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" class="w-8 h-8 invert" alt="GitHub">
        </a>
        <a href="https://linkedin.com/in/gempar" target="_blank" class="hover:scale-110 transition">
            <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" class="w-8 h-8" alt="LinkedIn">
        </a>
    </div>
</section>
@endsection
