<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add playlist
        </h2>
        <br>
    </x-slot>

    <div class="py-12">
        <div class="max-w-lg lg:ms-auto mx-auto text-center ">
                <div class="py-16 px-7 rounded-md bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
                                                
                    <form class="" action="{{route('playlists.store')}}" method="POST">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                        @csrf

                            <label for="name" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                Name
                            </label>
                            <input id="name" name="name" type="text" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700 ">

                            @error('name')
                                <div class="text-red-700 font-bold">{{$message}}</div>
                             @enderror

                            <div class="md:col-span-2">
                            </div>
                            <div class="md:col-span-2">
                        </div>
                            </div>
                            <div class="md:col-span-2">
                            <button class="py-3 text-base font-medium rounded text-white bg-blue-800 w-full hover:bg-blue-700 transition duration-300">submit</button>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
    </div>
</x-app-layout>
