<x-template title="Blog" active="blog">
    <div class="mt-20 mx-44">
        <div class="blog-header flex justify-between items-center">
            <h2 class="font-semibold text-4xl">Blog <span class="text-primary">Metrokil</span></h2>
            <div class="ring-primary ring-2 rounded-lg flex align-center px-4 py-2 gap-4 w-96">
                <input type="text"
                    class="w-full outline-none placeholder:text-primary placeholder:opacity-65 text-primary font-semibold flex items-center"
                    placeholder="Cari...">
                <button>
                    <img src="{{ asset('icons/Iconsax/Svg/All/linear/search-normal-1-primary.svg') }}" alt="">
                </button>
            </div>
        </div>
    </div>

    <div class="mt-12 mx-44">
        <div class="grid grid-cols-4 grid-rows-2 gap-6">
            @foreach ($blogs as $blog)
                <a href="/blogs/{{ $blog->id }}">
                    <x-blog-card category="{{ $blog->category }}" image="{{ $blog->image_url }}"
                        author="{{ $blog->user->name }}" isLimitWidth="false">
                        {{ $blog->title }}
                    </x-blog-card>
                </a>
            @endforeach
        </div>
    </div>
</x-template>
