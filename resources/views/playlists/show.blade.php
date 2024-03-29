<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Playlists') }}
        </h2>
        <br>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>Playlist: {{ $playlist->name }}</h3>
                </div>
            </div>
        </div>
        <ul>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @php
                            $totalDuration = 0;
                        @endphp
                        @foreach ($songs as $song)
                            <li>
                                {{ $song->name }}
                                <!-- Display Song Duration -->
                                <span class="text-gray-500">Duration: {{ $song->duration }} minutes</span>
                                <form action="{{ route('playlist.destroySong', ['playlist' => $playlist->id, 'song' => $song->id]) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="display: block; margin-left: auto;" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                                        Delete Song
                                    </button>
                                </form>
                            </li>
                            @php
                                $totalDuration += $song->duration;
                            @endphp
                        @endforeach
                        <!-- Display Total Duration -->
                        <div class="mt-4 text-gray-700">
                            Total Duration: {{ $totalDuration }} minutes
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</x-app-layout>
