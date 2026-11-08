@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Tugas {{ $username }}</h1>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left border border-slate-400 bg-white">
            <thead>
                <tr class="border-b border-slate-400 bg-slate-200">
                    <th class="px-3 py-2 border-r border-slate-400">Judul</th>
                    <th class="px-3 py-2 border-r border-slate-400">Mata Kuliah</th>
                    <th class="px-3 py-2 border-r border-slate-400">Deadline</th>
                    <th class="px-3 py-2 border-r border-slate-400">Prioritas</th>
                    <th class="px-3 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tugas as $t)
                    <tr class="border-b border-slate-300">
                        <td class="px-3 py-2 border-r border-slate-300">{{ $t['judul'] }}</td>
                        <td class="px-3 py-2 border-r border-slate-300">{{ $t['matkul'] }}</td>
                        <td class="px-3 py-2 border-r border-slate-300">{{ $t['deadline'] }}</td>
                        <td class="px-3 py-2 border-r border-slate-300">{{ $t['prioritas'] }}</td>
                        <td class="px-3 py-2">{{ $t['status'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection