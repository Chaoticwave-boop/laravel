<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Playlists') }}
        </h2>
        <br>

        <a href="/playlists/create" class="font-semibold text-l text-gray-800 dark:text-gray-200 leading-tight">
            add new list
        </a>
    </x-slot>

    <div class="py-12">

        
        @foreach($playlists as $Playlist)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                   <div class="p-6 text-gray-900 dark:text-gray-100">
                        <a> {{$Playlist->name}}</a> 
                   </div>
               </div>
           </div>
           <br>
        @endforeach  
    </div>
</x-app-layout>
