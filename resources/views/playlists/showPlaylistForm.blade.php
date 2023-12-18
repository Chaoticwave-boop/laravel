<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            song => {{$song -> name}}
        </h2>
        <br>

        <a href="/playlists/create" class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg lg:ms-auto mx-auto text-center ">
            <div class="py-16 px-7 rounded-md bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                <form class="" action="/song/addSong" method="POST">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                    @csrf
                    <label for="name" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        PlaylistName
                    </label>
                    <select name="playlist" id="playlists">
                        @foreach($playlist as $playlist)
                            <option value="{{$playlist -> id}}">{{$playlist -> name}}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="song" value="{{ $song->id }}">

            <div class="md:col-span-2">
            </div>
            <div class="md:col-span-2">
            </div>
            </div>
            <div class="md:col-span-2">
                <button class="py-3 text-base font-medium rounded text-white bg-blue-800 w-full hover:bg-blue-700 transition duration-300">Add</button>
            </div>
        </div>
            </form>
                </div>
            </div>
    </div>

    </div>
</x-app-layout>
