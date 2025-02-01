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
    <x-floating-action-button></x-floating-action-button>
    <div class="w-100 lg:mt-10 font-raleway">
        <x-navbar :active="$active"></x-navbar>

        <div class="mt-36">
            {{ $slot }}
        </div>


        <x-footer></x-footer>
    </div>

</body>

</html>
