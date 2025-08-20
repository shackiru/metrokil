@props(['title', 'active'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

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
    <div class="w-100 lg:mt-10 font-raleway overflow-x-clip">
        <x-navbar :active="$active"></x-navbar>

        <div class="mt-10 md:mt-20 lg:mt-36">
            {{ $slot }}
        </div>


        <x-footer></x-footer>
    </div>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</html>

{{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
