<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            hi
        </h2>
        <br>
    </x-slot>

    <div class="py-12">
        <form action="{{route('playlists.store')}}" method="POST">4
            @csrf

            <label for="name">Name</label>
            <input id="name" name="name" type="text">

            @error('name')
                <div class="text-red-700 font-bold">{{$message}}</div>
            @enderror

        <input  
            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" 
            type="submit" value="submit me" 
        >
        </form>


    </div>
</x-app-layout>
