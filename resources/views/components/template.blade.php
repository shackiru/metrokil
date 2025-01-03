@props(['title', 'active'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <style>
        .testimonials::-webkit-scrollbar,
        .blogs::-webkit-scrollbar {
            display: none;
        }

        .testimonials,
        .blogs {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body>
    <div class="w-100 mt-10 font-raleway">
        <x-navbar :active="$active"></x-navbar>

        {{ $slot }}

        <x-footer></x-footer>
    </div>

</body>

</html>
