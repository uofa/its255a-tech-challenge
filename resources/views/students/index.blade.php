<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($students as $student)
                <div class="p-6 flex space-x-2">
                    <div class="flex-1">
                        <p class="mt-4 text-lg text-gray-900">
                            {{ $student->forename_1 }} {{ $student->surname }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
