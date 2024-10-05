<x-layout>
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">Your Tickets</h2>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class=""></div>

        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-200/50 text-white">
                <thead>
                    <tr class="bg-gray-100/10">
                        <th class="px-6 py-3 border-b border-gray-200/50 text-left text-sm font-medium text-gray-100">ID
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200/50 text-left text-sm font-medium text-gray-100">
                            Subject</th>
                        <th class="px-6 py-3 border-b border-gray-200/50 text-left text-sm font-medium text-gray-100">
                            Status
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200/50 text-left text-sm font-medium text-gray-100">
                            Created At</th>
                        <th class="px-6 py-3 border-b border-gray-200/50 text-left text-sm font-medium text-gray-100">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $ticket)
                        <tr class="border-b">
                            <td class="px-6 py-4 text-sm text-gray-100">{{ $ticket->id }}</td>
                            <td class="px-6 py-4 text-sm text-gray-100">{{ $ticket->subject }}</td>
                            <td class="px-6 py-4 text-sm text-gray-100">
                                <span
                                    class="inline-block px-2 py-1 text-sm font-semibold rounded
                                    {{ $ticket->status === 'open' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ ucfirst($ticket->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-100">{{ $ticket->created_at }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('customer.show', $ticket->id) }}"
                                    class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                                    View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
