<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .container {
                @apply max-w-7xl mx-auto px-4 sm:px-6 lg:px-8;
            }

            .btn {
                @apply bg-blue-600 text-white rounded-lg py-2 px-4 hover:bg-blue-700 transition;
            }

            .btn_dlt {
                @apply bg-red-500 text-white rounded-lg py-2 px-4 hover:bg-red-600 transition;
            }

            .btn_edit {
                @apply bg-yellow-500 text-white rounded-lg py-2 px-4 hover:bg-yellow-600 transition;
            }

            .table-header {
                @apply text-sm font-medium text-gray-700 uppercase bg-gray-100;
            }

            .table-row {
                @apply bg-white border-b hover:bg-gray-50;
            }

            .table-cell {
                @apply px-6 py-4 text-sm text-gray-900;
            }
        }
    </style>
    <title>Home</title>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="container">
        <!-- Header Section -->
        <div class="flex items-center justify-between py-6 border-b border-gray-200">
            <h1 class="text-2xl font-bold text-gray-700">Manage Posts</h1>
            <a href="/create" class="btn">Add New Post</a>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Posts Table -->
        <div class="mt-8">
            <div class="overflow-hidden rounded-lg shadow-lg border border-gray-200">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr>
                            <th class="table-header px-6 py-3 text-left">Id</th>
                            <th class="table-header px-6 py-3 text-left">Name</th>
                            <th class="table-header px-6 py-3 text-left">Description</th>
                            <th class="table-header px-6 py-3 text-left">Image</th>
                            <th class="table-header px-6 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="table-row">
                                <td class="table-cell">{{ $post->id }}</td>
                                <td class="table-cell">{{ $post->name }}</td>
                                <td class="table-cell">{{ $post->description }}</td>
                                <td class="table-cell">
                                    <img src="images/{{ $post->image }}" alt="Post Image" class="w-16 h-16 rounded-md object-cover">
                                </td>
                                <td class="table-cell">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('edit', $post->id) }}" class="btn_edit">Edit</a>
                                        <a href="{{ route('delete', $post->id) }}" class="btn_dlt">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6 flex px-3 justify-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</body>

</html>
