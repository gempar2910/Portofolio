@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section class="py-20 px-6 max-w-6xl mx-auto" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-cyan-400 mb-8">My Projects</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @php
    $projects = [
        [
            'title' => 'KRRS System',
            'desc' => 'A Laravel-based academic system for managing course registration and study plans.',
            'repo' => 'https://github.com/gempar2910/UAS_KRRS_LINTAR.git',
            'demo' => null
        ],
        [
            'title' => 'Interactive Lyrics Website',
            'desc' => 'An HTML/CSS/JS animation project with pixel-art theme and audio sync.',
            'repo' => 'https://github.com/gempar2910/song-lyrics.git',
            'demo' => null
        ],
        [
            'title' => 'Over.Doseid',
            'desc' => 'A collaborative Laravel-based web app focused on creative music community content, built by Gempar Ramadhan.',
            'repo' => 'https://github.com/gempar2910/Over.Doseid.git',
            'demo' => null
        ],
    ];
@endphp

        @foreach ($projects as $project)
        <div class="bg-gray-800 p-6 rounded-xl shadow hover:scale-[1.02] transition duration-300 flex flex-col justify-between">
            <div>
                <h3 class="text-xl font-bold text-white mb-2">{{ $project['title'] }}</h3>
                <p class="text-gray-400 mb-4">{{ $project['desc'] }}</p>
            </div>
            <div class="flex gap-3 mt-auto">
                <a href="{{ $project['repo'] }}" target="_blank"
                   class="bg-cyan-600 hover:bg-cyan-700 text-white text-sm px-4 py-2 rounded-full transition">
                    🔗 GitHub
                </a>
                @if ($project['demo'])
                <a href="{{ $project['demo'] }}" target="_blank"
                   class="bg-emerald-600 hover:bg-emerald-700 text-white text-sm px-4 py-2 rounded-full transition">
                    🚀 Demo
                </a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
