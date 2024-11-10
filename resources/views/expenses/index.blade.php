
<x-app-layout>
    <!-- Optional header -->
    <x-slot:header>
        <h2 class="font-semibold text-xl text-gray-800">
            {{ __('Expenses Index') }}
        </h2>
    </x-slot>

    <!-- Main content - this becomes $slot -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto p-4">
                <h1 class="text-2xl font-semibold mb-4">Expenses</h1>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="alert alert-success mb-4 p-3 bg-green-500 text-white rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('expenses.create') }}" class="btn btn-primary mb-4 inline-block bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">
                    Add New Expense
                </a>

                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Amount</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Category</th>
                                <th class="border px-4 py-2">Date</th>
                                <th class="border px-4 py-2">Payment Method</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $expense)
                                <tr>
                                    <td class="border px-4 py-2">{{ $expense->id }}</td>
                                    <td class="border px-4 py-2">{{ $expense->amount }}</td>
                                    <td class="border px-4 py-2">{{ $expense->description }}</td>
                                    <td class="border px-4 py-2">{{ ucfirst($expense->category) }}</td>
                                    <td class="border px-4 py-2">{{ $expense->expense_date }}</td>
                                    <td class="border px-4 py-2">{{ ucfirst($expense->payment_method) }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('expenses.show', $expense) }}" class="btn btn-info btn-sm bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                                            View
                                        </a>
                                        <a href="{{ route('expenses.edit', $expense) }}" class="btn btn-warning btn-sm bg-yellow-500 text-white p-2 rounded hover:bg-yellow-600">
                                            Edit
                                        </a>
                                        <form action="{{ route('expenses.destroy', $expense) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm bg-red-500 text-white p-2 rounded hover:bg-red-600" onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $expenses->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
