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
                @apply mx-auto px-10;
            }

            .btn {
                @apply bg-green-600 text-white rounded py-2 px-4
            }
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="flex justify-between my-5">
            <h2 class="text-red-500 text-xl">Home</h2>

            <a href="/create" class="btn">Add New Post</a>
        </div>

        @if (session('success'))
            <h2 class="text-green-600">{{ session('success') }}</h2>
        @endif

        <div class="">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $post)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $post->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $post->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->description }}
                                </td>
                                <td class="px-6 py-4">
                                    <img src="images/{{ $post->image }}" alt="" class="w-20 h-20 object-cover">
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit', $post->id) }}" class="btn">Edit</a>

                                    <a href="{{ route('edit', $post->id) }}" class="btn">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>
