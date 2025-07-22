<x-app-layout>
    <div class="py-8 px-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-3xl font-bold text-green-800 mb-4">📚 Available Books</h2>

            <p class="text-sm text-gray-600 mb-6">
                To issue a book, kindly inform the librarian manually at the library counter. 
                Provide the <strong>Book Title</strong> you want, your preferred <strong>Issued Date</strong>, and <strong>Return Date</strong>.
            </p>

            <!-- Search Form -->
            <form method="GET" action="{{ route('student.books') }}" class="mb-6">
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2">
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Search by book title..."
                        class="w-full sm:w-64 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400" />

                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                        Search
                    </button>
                </div>
            </form>

            @if($books->count())
                <table class="w-full table-auto border-collapse text-sm">
                    <thead>
                        <tr class="bg-green-100 text-green-700">
                            <th class="border px-4 py-2">Title</th>
                            <th class="border px-4 py-2">Author</th>
                            <th class="border px-4 py-2">Category</th>
                            <th class="border px-4 py-2 text-center">Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr class="hover:bg-green-50">
                                <td class="border px-4 py-2 font-medium">{{ $book->title }}</td>
                                <td class="border px-4 py-2">{{ $book->author->name ?? 'N/A' }}</td>
                                <td class="border px-4 py-2">{{ $book->category->name ?? 'N/A' }}</td>
                                <td class="border px-4 py-2 text-center {{ $book->available_quantity == 0 ? 'text-red-500 font-bold' : '' }}">
                                    {{ $book->available_quantity > 0 ? $book->available_quantity : 'Out of stock' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-green-600">No books found{{ request('search') ? ' for "' . request('search') . '"' : '' }}.</p>
            @endif
        </div>
    </div>
</x-app-layout>
