<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if (session('success'))
                    <div class="mb-4 text-green-700 bg-green-100 p-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('student.profile.update') }}">
    @csrf
    <!-- @method('PUT') — remove this line -->

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700 dark:text-gray-200">Name</label>
        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="w-full rounded-md shadow-sm" required>
        @error('name')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700 dark:text-gray-200">Email</label>
        <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="w-full rounded-md shadow-sm" required>
        @error('email')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update Profile</button>
    </div>
</form>

            </div>
        </div>
    </div>
</x-app-layout>
