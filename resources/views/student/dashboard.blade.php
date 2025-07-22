<x-app-layout>
    <div class="py-8 px-6">
        <div class="bg-green-50 rounded-lg shadow-lg p-8 border border-green-200">
            <!-- System Overview -->
            <h1 class="text-3xl font-bold text-green-800 mb-4">📚 Book Management System</h1>
            <p class="text-green-700 text-base leading-relaxed">
                Welcome to the Book Management System! This platform is designed to help students easily view available books, keep track of issued books, and manage their profiles. It's your personal gateway to the library—accessible anytime, anywhere.
            </p>

            <!-- Welcome Message -->
            <div class="mt-6">
                <p class="text-lg text-green-900 font-medium">
                    👋 Hello, {{ Auth::user()->name }}!
                </p>
                <p class="text-sm text-green-600 mt-1">Here's what you can do today:</p>
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <a href="{{ route('student.books') }}" class="bg-blue-600 text-white text-center py-3 px-4 rounded-lg shadow hover:bg-blue-700 transition duration-200">
                    📖 View Book List
                </a>
                <a href="{{ route('student.profile') }}" class="bg-yellow-500 text-white text-center py-3 px-4 rounded-lg shadow hover:bg-yellow-600 transition duration-200">
                    📝 Update Profile
                </a>
                <a href="{{ route('student.issued') }}" class="bg-purple-600 text-white text-center py-3 px-4 rounded-lg shadow hover:bg-purple-700 transition duration-200">
                    📦 View Issued Books
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
