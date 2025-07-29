<x-template title="Blog" active="blog">
    <section class="mt-20 lg:mx-14 xl:mx-44 mx-8 mb-20 lg:mb-36">
        <header class="flex gap-3 items-center">
            <a href="/" class="transition hover:text-primary">Home</a>
            <svg class="text-black opacity-40" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l7-7-7-7" />
            </svg>
            <a href="/blogs" class="transition hover:text-primary">Blogs</a>
            <svg class="text-black opacity-40" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l7-7-7-7" />
            </svg>
            <span class="text-primary">Detail Blog</span>
        </header>
        <main class="mt-8 content">
            <h2 class="text-3xl font-semibold">{{ $blog->title }}</h2>
            <article class="flex flex-col mt-6 gap-3">
                <hr class="opacity-70">
                <div class="flex justify-between mx-6">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('blog->image_urls/logo.png') }}" class="w-10 h-10 rounded-full"
                            alt="">
                        <div class="flex flex-col ml-4">
                            <p class="font-semibold">{{ $blog->user->name }}</p>
                            <p class="opacity-70"></p>
                            {{ \Carbon\Carbon::parse($blog->created_at)->locale('id')->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-10">
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/heart.svg') }}" class="opacity-50"
                            alt="">
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/send-2.svg') }}" class="opacity-50"
                            alt="">
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/archive-book.svg') }}" class="opacity-50"
                            alt="">
                    </div>
                </div>
                <hr class="opacity-70">
            </article>
            <div class="mt-8 flex justify-center">
                {{-- <img src="{{ $blog->image_url }}" class="rounded-xl min-h-80 max-h-132.5" alt=""> --}}
                <img src="{{ Storage::disk('public')->exists($blog->image_url) ? Storage::url($blog->image_url) : $blog->image_url }}"
                    class="rounded-xl min-h-80 max-h-132.5" width="1000" alt="">
            </div>
            <div class="mt-8 prose max-w-max text-justify">
                <p class="">{!! $blog->description !!}</p>
            </div>
        </main>
    </section>
</x-template>
