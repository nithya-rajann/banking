<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ABC BANK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex m-5">
                    <h1 class="text-3xl">Welcome</h1><div class="ml-5 text-3xl">{{ Auth::user()->name }}</div>
                </div>
                <div class="flex">
            <div class="grid grid-rows-2">
                <div class="flex m-5">
                    <div class="text-xl">Your ID</div>
                    <!-- <div>{{ Auth::user()->email }}</div> -->
                </div>
                <div class="flex m-5">
                    <div class="text-xl">Your Balance</div>
                    <!-- <div></div> -->
                </div>
            </div>
            <div class="grid grid-rows-2">
                <div class="flex m-5">
                    <div>{{ Auth::user()->email }}</div>
                </div>
                <div class="flex m-5">
                    <div>{{ Auth::user()->name }}</div>
                </div>
            </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
