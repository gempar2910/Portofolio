@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<section class="py-20 px-6 max-w-6xl mx-auto" x-data="{ modalOpen: false, project: {} }">
    <h2 class="text-3xl font-bold text-cyan-400 mb-10">My Projects</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @php
            $projects = [
                [
                    'name' => 'KRRS System',
                    'desc' => 'A Laravel-based academic system for managing course registration and study plans.',
                    'thumb' => asset('images/krrs.png'),
                    'github' => 'https://github.com/gempar2910/UAS_KRRS_LINTAR.git',
                ],
                [
                    'name' => 'Interactive Lyrics Website',
                    'desc' => 'An HTML/CSS/JS animation project with pixel-art theme and audio sync.',
                    'thumb' => asset('images/lyrics.png'),
                    'github' => 'https://github.com/gempar2910/song-lyrics.git',
                ],
                [
                    'name' => 'Over.Doseid',
                    'desc' => 'A collaborative Laravel-based web app focused on creative music community content.',
                    'thumb' => asset('images/overdose.png'),
                    'github' => 'https://github.com/gempar2910/Over.Doseid.git',
                ]
            ];
        @endphp

        @foreach ($projects as $proj)
        <div class="bg-gray-800 p-6 rounded-xl shadow hover:scale-[1.02] transition cursor-pointer"
             @click="project = {{ json_encode($proj) }}; modalOpen = true">
            <h3 class="text-xl font-bold text-white mb-2">{{ $proj['name'] }}</h3>
            <p class="text-gray-400">{{ $proj['desc'] }}</p>
            <a href="{{ $proj['github'] }}" target="_blank"
               class="inline-block mt-4 px-4 py-2 bg-cyan-500 text-white rounded-full text-sm hover:bg-cyan-600">
                🔗 GitHub
            </a>
        </div>
        @endforeach
    </div>

    {{-- Modal --}}
    <div 
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 px-4"
        x-show="modalOpen"
        x-transition
        x-cloak
    >
        <div class="bg-gray-900 rounded-xl max-w-md w-full p-6 text-center relative shadow-xl"
             @click.away="modalOpen = false">
            <img :src="project.thumb" alt="Project Thumbnail" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-2xl font-bold text-white mb-2" x-text="project.name"></h3>
            <p class="text-gray-300 text-sm mb-4" x-text="project.desc"></p>
            <div class="flex justify-center gap-4 mt-4">
                <a :href="project.github" target="_blank"
                   class="px-4 py-2 bg-cyan-500 text-white rounded-full hover:bg-cyan-600 text-sm">🔗 GitHub</a>
            </div>
            <button @click="modalOpen = false"
                    class="absolute top-2 right-3 text-gray-400 hover:text-white text-lg">&times;</button>
        </div>
    </div>
</section>
@endsection
