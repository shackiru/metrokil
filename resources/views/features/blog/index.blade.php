<x-template title="Blog" active="blog">
    <div class="mt-20 lg:mx-14 xl:mx-44 mx-8">
        <div class="blog-header flex justify-between items-center gap-8">
            <h2 class="font-semibold inline-flex text-3xl lg:text-4xl">Blog&nbsp;<span
                    class="text-primary">Metrokil</span>
            </h2>
            <div class="ring-primary ring-2 rounded-lg flex align-center px-4 py-2 gap-4 w-96">
                <input type="text"
                    class="w-full outline-none placeholder:text-primary placeholder:opacity-65 text-primary font-semibold flex items-center border-0 focus:border-0 focus:ring-0"
                    placeholder="Cari...">
                <button>
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/search-normal-1-primary.svg') }}" alt="">
                </button>
            </div>
        </div>
    </div>

    <div class="mt-12 lg:mx-14 xl:mx-44 mx-8 mb-20 lg:mb-36">
        <div class="grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 grid-rows-2 gap-6">
            @foreach ($blogs as $blog)
                <a href="/blogs/{{ $blog->id }}">
                    <x-blog-card date="{{ $blog->created_at }}" category="{{ $blog->category }}"
                        image="{{ $blog->image_url }}" author="{{ $blog->user->name }}" isLimitWidth="false">
                        {{ \Str::limit($blog->title, 60) }}
                    </x-blog-card>
                </a>
            @endforeach
        </div>
        <div class="flex justify-end mt-8">
            {{ $blogs->links() }}
        </div>
    </div>
</x-template>
