<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <title>Songs</title>
        </h2>
    </x-slot>

    <div class="py-12">
        
        @foreach($songs as $song)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                   <div class="p-6 text-gray-900 dark:text-gray-100">
                        <a href="#"> {{$song->name}}</a> 
                        <br>
                        Genre: {{$song->Genre->name}} - duration:{{$song->duration}} m
                   </div>
               </div>
           </div>
           <br>
        @endforeach  
    </div>
</x-app-layout>
