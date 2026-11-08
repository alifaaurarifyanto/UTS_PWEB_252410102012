@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="max-w-sm mx-auto mt-10">
        <h1 class="text-2xl font-bold text-center mb-6">Masuk ke TugasKu</h1>

        <form action="/dashboard" method="GET" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium mb-1">Username</label>
                <input type="text" id="username" name="username" required
                       class="w-full border border-slate-400 px-3 py-2 bg-white focus:outline-none focus:border-indigo-600">
            </div>
            <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2">
                Masuk
            </button>
        </form>
    </div>
@endsection