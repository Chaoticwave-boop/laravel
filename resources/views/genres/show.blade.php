<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$genre->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        @if($genresShow->isEmpty())
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <p>Sorry, there are no songs under this genre.</p>
                    </div>
                </div>
            </div>
        @else
            @foreach($genresShow as $song)
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <a>{{$song->name}}</a> 
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        @endif
    </div>
</x-app-layout>
