@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<section class="py-20 px-6 max-w-4xl mx-auto text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-cyan-400 mb-6">Contact Me</h2>
    <p class="text-gray-300 mb-8">
        Feel free to reach out for collaboration, freelance projects, or just to connect!
    </p>

    {{-- Contact Info --}}
    <div class="space-y-4 text-gray-200 text-left max-w-md mx-auto">
        <p><strong>📧 Email:</strong> <a href="mailto:gemparramadhan983@gmail.com" class="text-cyan-400 hover:underline">gemparramadhan983@gmail.com</a></p>
        <p><strong>📱 Phone:</strong> <a href="https://wa.me/6285772984968" class="text-cyan-400 hover:underline">+62 857-7298-4968</a></p>
        <p><strong>📍 Location:</strong> East Jakarta, Indonesia</p>
    </div>

    {{-- Social Links --}}
    <div class="mt-8 flex justify-center gap-6">
        <a href="https://github.com/gempar2910" target="_blank" class="hover:scale-110 transition">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" class="w-8 h-8 invert" alt="GitHub">
        </a>
    </div>

    {{-- Contact Form --}}
    <div class="mt-16 max-w-md mx-auto text-left">
        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Message Sent!',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#0ea5e9',
                });
            </script>
        @endif
        @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Failed to Send',
            text: '{{ session('error') }}',
            confirmButtonColor: '#ef4444',
        });
    </script>
@endif


        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4" id="contactForm">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required
                class="w-full p-3 rounded bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-400">
            <input type="email" name="email" placeholder="Your Email" required
                class="w-full p-3 rounded bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-400">
            <textarea name="message" placeholder="Your Message" rows="5" required
                class="w-full p-3 rounded bg-gray-800 text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-400"></textarea>

            <button type="submit"
                class="bg-cyan-500 text-white px-6 py-2 rounded hover:bg-cyan-600 transition duration-300">
                Send Message
            </button>
        </form>
    </div>
</section>
@endsection

@push('scripts')
{{-- SweetAlert2 CDN --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
