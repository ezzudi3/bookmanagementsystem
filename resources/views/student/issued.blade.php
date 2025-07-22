<x-app-layout>
    <div class="py-8 px-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold text-green-800 mb-4">📦 Issued Books</h2>

            @if($issuedBooks->count())
                <table class="w-full table-auto border-collapse text-sm">
                    <thead>
                        <tr class="bg-green-100 text-green-700">
                            <th class="border px-4 py-2">Book Title</th>
                            <th class="border px-4 py-2">Issue Date</th>
                            <th class="border px-4 py-2">Return Date</th>
                            <th class="border px-4 py-2">Returned At</th>
                            <th class="border px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($issuedBooks as $issue)
                            <tr class="hover:bg-green-50">
                                <td class="border px-4 py-2">{{ $issue->book->title ?? 'N/A' }}</td>
                                <td class="border px-4 py-2">{{ $issue->issue_date }}</td>
                                <td class="border px-4 py-2">{{ $issue->return_date }}</td>
                                <td class="border px-4 py-2">
                                    {{ $issue->returned_at ?? 'Not returned yet' }}
                                </td>
                                <td class="border px-4 py-2 capitalize">
                                    {{ $issue->status }}
                                    @if($issue->status == 'issued' && now()->gt($issue->return_date))
                                        <span class="text-red-500 font-semibold">(Overdue)</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-green-600">You haven't issued any books yet.</p>
            @endif
        </div>
    </div>
</x-app-layout>
