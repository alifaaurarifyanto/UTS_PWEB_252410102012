@props(['username' => ''])

<nav class="bg-indigo-600 text-white shadow">
    <div class="max-w-5xl mx-auto px-4 py-3 flex flex-wrap items-center justify-between gap-3">
        <a href="/dashboard?username={{ urlencode($username) }}" class="text-xl font-bold">TugasKu</a>

        <ul class="flex gap-2 text-sm">
            @foreach ([
                ['Dashboard', '/dashboard', 'dashboard'],
                ['Pengelolaan', '/pengelolaan', 'pengelolaan'],
                ['Profil', '/profile', 'profile'],
            ] as [$label, $url, $pattern])
                <li>
                    <a href="{{ $url }}?username={{ urlencode($username) }}"
                       class="pb-1 {{ request()->is($pattern) ? 'border-b-2 border-white font-semibold' : 'hover:underline' }}">
                        {{ $label }}
                    </a>
                </li>
            @endforeach
        </ul>

        <span class="text-sm">Halo, {{ $username }}</span>
    </div>
</nav>