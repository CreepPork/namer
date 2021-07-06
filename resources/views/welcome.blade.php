<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class="antialiased bg-gray-800">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow sm:rounded-lg">
                <div>
                    <h1 class="text-white text-6xl">
                        {{ ucfirst(\App\Models\Word::all()->random()->text) }}
                        {{ ucfirst(\App\Models\Word::all()->random()->text) }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
