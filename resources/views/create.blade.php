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
                @apply max-w-2xl mx-auto px-4 sm:px-6 lg:px-8;
            }

            .form-label {
                @apply text-sm font-medium text-gray-700;
            }

            .form-input {
                @apply w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500;
            }

            .btn {
                @apply bg-blue-600 text-white rounded-lg py-2 px-4 hover:bg-blue-700 transition;
            }

            .btn-back {
                @apply bg-gray-600 text-white rounded-lg py-2 px-4 hover:bg-gray-700 transition;
            }

            .error-text {
                @apply text-sm text-red-500 mt-1;
            }
        }
    </style>
    <title>Create</title>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="container">
        <!-- Header Section -->
        <div class="flex items-center justify-between py-6">
            <h1 class="text-xl font-bold text-gray-700">Create New Post</h1>
            <a href="/" class="btn-back">Back to Home</a>
        </div>

        <!-- Form Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                @csrf
                <div class="space-y-5">
                    <!-- Name Field -->
                    <div>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-input" placeholder="Enter name">
                        @error('name')
                        <p class="error-text">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-input" rows="4" placeholder="Enter description">{{ old('description') }}</textarea>
                        @error('description')
                        <p class="error-text">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image Upload with Preview -->
                    <div>
                        <label for="image" class="form-label">Select Image</label>
                        <input type="file" name="image" id="image" class="form-input" accept="image/*" onchange="previewImage(event)">
                        @error('image')
                        <p class="error-text">{{ $message }}</p>
                        @enderror
                        <div class="mt-4">
                            <img id="imagePreview" src="#" alt="Image Preview" class="hidden w-32 h-32 object-cover rounded-md">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
