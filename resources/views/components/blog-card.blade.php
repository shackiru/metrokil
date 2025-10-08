@props(['category', 'category_color', 'title', 'description', 'image', 'author', 'date', 'isLimitWidth'])

<section
    class="blog-item shadow-soft rounded-xl min-w-[320px] @if ($isLimitWidth == 'true') max-w-[350px] @else w-full @ @endif relative bg-white">
    <div class="image">
        <img src="{{ Storage::disk('public')->exists($image) ? Storage::url($image) : $image }}"
            class="rounded-t-xl h-56 w-full object-cover" alt="{{ $image }}">
        {{-- <img src="{{ $image }}" class="rounded-t-xl h-56 w-full object-cover" alt=""> --}}
    </div>
    <main class="px-6 pb-6 h-24">
        <div
            class="badge absolute h-8 px-4 flex justify-center items-center font-semibold text-white mt-[-50px]" style="background-color: {{ $category_color }};">
            {{-- @if ($category == 'news')
                Berita
            @else
                Informasi
            @endif --}}
            {{ $category }}
        </div>
        <div class="content mt-8 flex flex-col gap-3 h-full justify-between">
            <p class="text-lg mt-[-15px] font-semibold">{{ $slot }}</p>
            <span class="text-sm font-semibold opacity-55">{{ $author }} ·
                {{ \Carbon\Carbon::parse($date)->locale('id')->diffForHumans() }}</span>
        </div>
    </main>
</section>
