<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Playlists') }}
        </h2>
        <br>
    </x-slot>

    <div class="py-12">
        <h3>{{ $playlist->name }}</h3>

        <ul>
            @foreach ($songs as $song)
                <li>{{ $song->name }}</li>
            @endforeach
        </ul>

    </div>
</x-app-layout>
