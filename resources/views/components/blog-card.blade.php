@props(['category', 'title', 'description', 'image', 'author', 'date', 'isLimitWidth'])

<div
    class="blog-item shadow-soft rounded-xl min-w-[350px] @if ($isLimitWidth == 'true') max-w-[350px] @else w-full @ @endif relative bg-white">
    <div class="image">
        <img src="http://localhost:8080/storage/{{ $image }}" class="rounded-t-xl h-56 w-full object-cover" alt="">
        {{-- <img src="{{ $image }}" class="rounded-t-xl h-56 w-full object-cover" alt=""> --}}
    </div>
    <div class="px-6 pb-6 h-24">
        <div
            class="badge absolute @if ($category == 'news') bg-blue @else bg-primary @endif  h-8 px-4 flex justify-center items-center font-semibold text-white mt-[-50px]">
            @if ($category == 'news')
                Berita
            @else
                Informasi
            @endif
        </div>
        <div class="content mt-8 flex flex-col gap-3 h-full justify-between">
            <p class="text-lg mt-[-15px] font-semibold">{{ $slot }}</p>
            <span class="text-sm font-semibold opacity-55">{{ $author }} · {{ \Carbon\Carbon::parse($date)->locale('id')->diffForHumans() }}</span>
        </div>
    </div>
</div>
