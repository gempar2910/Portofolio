@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<section x-data="{ modalOpen: false, selectedSkill: {} }" class="py-20 px-6 max-w-5xl mx-auto" data-aos="fade-up">
    <h2 class="text-3xl font-bold text-cyan-400 mb-8 text-center">Skills & Tools</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-10 text-center">
        @php
            $skills = [
                ['name' => 'HTML5', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg', 'desc' => 'Markup Language for Web Pages', 'detail' => 'HTML5 is the standard markup language for structuring web content.', 'color' => '#e34c26'],
                ['name' => 'CSS3', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg', 'desc' => 'Styling and Layouting Web Pages', 'detail' => 'CSS3 is used to style and layout web pages including transitions, animations, and more.', 'color' => '#264de4'],
                ['name' => 'JavaScript', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg', 'desc' => 'Interactive Behavior on Web', 'detail' => 'JavaScript makes websites dynamic and interactive.', 'color' => '#f7df1e'],
                ['name' => 'Laravel', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg', 'desc' => 'PHP Web Framework', 'detail' => 'Laravel is a web framework for building clean and powerful PHP applications.', 'color' => '#ff2d20'],
                ['name' => 'TailwindCSS', 'icon' => 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Tailwind_CSS_Logo.svg', 'desc' => 'Utility-first CSS Framework', 'detail' => 'Tailwind is a utility-first CSS framework for rapid UI building.', 'color' => '#38bdf8'],
                ['name' => 'MySQL', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg', 'desc' => 'Database Management System', 'detail' => 'MySQL is an open-source relational database system.', 'color' => '#00758f'],
                ['name' => 'GitHub', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg', 'desc' => 'Version control & code hosting platform', 'detail' => 'GitHub is a platform for hosting and collaborating on code using Git.', 'color' => '#ffffff'],
            ];
        @endphp

        @foreach ($skills as $skill)
        <div 
            class="relative group cursor-pointer"
            @click="selectedSkill = {{ json_encode($skill) }}; modalOpen = true"
        >
            <img 
                src="{{ $skill['icon'] }}" 
                alt="{{ $skill['name'] }}" 
                class="w-16 h-16 mx-auto mb-2 transition duration-300 transform group-hover:scale-110"
                style="filter: drop-shadow(0 0 8px {{ $skill['color'] }})"
                {{ $skill['name'] === 'GitHub' ? 'class=invert' : '' }}
            >
            <p class="text-sm text-gray-300">{{ $skill['name'] }}</p>

            <!-- Tooltip -->
            <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 bg-gray-900 text-white text-xs px-3 py-2 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition duration-300 z-10 w-40">
                {{ $skill['desc'] }}
            </div>
        </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div 
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
        x-show="modalOpen"
        x-transition
        x-cloak
    >
        <div class="bg-gray-800 p-6 rounded-xl max-w-sm text-center shadow-xl relative" @click.away="modalOpen = false">
            <img 
                :src="selectedSkill.icon" 
                :alt="selectedSkill.name" 
                class="w-16 h-16 mx-auto mb-4" 
                :class="selectedSkill.name === 'GitHub' ? 'invert' : ''"
                :style="`filter: drop-shadow(0 0 8px ${selectedSkill.color})`"
            >
            <h3 class="text-xl font-bold mb-2" 
                x-text="selectedSkill.name" 
                :style="`color: ${selectedSkill.color}`">
            </h3>
            <p class="text-gray-300 text-sm mb-4" x-text="selectedSkill.detail"></p>
            <button 
                 @click="modalOpen = false" 
                class="mt-2 px-4 py-1 text-sm rounded-full transition duration-300"
                :class="selectedSkill.name === 'GitHub' ? 'text-black' : 'text-white'"
                :style="`background-color: ${selectedSkill.color}`"
            >
            Close
            </button>

        </div>
    </div>
</section>
@endsection
