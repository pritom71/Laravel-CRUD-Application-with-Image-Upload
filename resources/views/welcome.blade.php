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
        }
      </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="flex justify-between my-5">
            <h2 class="text-red-500 text-xl">Home</h2>

        <a href="/create" class="bg-green-600 text-white rounded py-2 px-4">Add New Post</a>
        </div>

        @if(session('success'))
        <h2 class="text-green-600">{{session('success')}}</h2>
        @endif
      </div>
    
</body>
</html>