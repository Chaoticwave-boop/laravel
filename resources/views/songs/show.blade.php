<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$songs->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-3 sm:max-w-xl sm:mx-auto ">
                <div class="bg-white shadow-lg border-gray-100 max-h-80	 border sm:rounded-3xl p-8 flex space-x-8">
                    <div class="h-48 overflow-visible w-1/2">
                        <img class="rounded-3xl shadow-lg"
                            src="https://upload.wikimedia.org/wikipedia/en/c/ca/Tycho_-_Awake.png" alt="">
                    </div>
                    <div class="flex flex-col w-1/2 space-y-4">
                        <div class="flex justify-between items-start">
                            <h2 class="text-3xl font-bold">{{$songs->name}}</h2>
                            <div class="bg-yellow-400 font-bold rounded-xl p-2">{{$songs->duration}} m</div>
                        </div><p>{{$songs->description}}</p>
                    </div>

                </div>
            </div>

        </div>
    </div>



    </div>
</x-app-layout>