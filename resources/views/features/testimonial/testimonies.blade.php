<x-template title="Blog" active="blog">
    <div class="mt-10 md:mt-20 lg:mt-32 lg:mx-14 xl:mx-44 mx-8">
        <div class="blog-header flex justify-between flex-wrap lg:flex-nowrap items-center gap-8">
            <h2 class="font-semibold inline-flex text-3xl lg:text-4xl">Testimoni&nbsp;<span
                    class="text-primary">Metrokil</span>
            </h2>
            <div class="ring-primary ring-2 rounded-lg align-center px-4 py-2 gap-4 w-full md:w-96">
                <form action="" class="flex">
                    <input type="text"
                        class="w-full outline-none placeholder:text-primary placeholder:opacity-65 text-primary font-semibold flex items-center border-0 focus:border-0 focus:ring-0"
                        placeholder="Cari..." name="search" value="{{ request('search') }}">
                    <button type="submit">
                        <img src="{{ asset('icons/Iconsax/Svg/All/linear/search-normal-1-primary.svg') }}"
                            alt="">
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="mt-12 lg:mx-14 xl:mx-44 mx-8 mb-20 lg:mb-36">
        <div class="grid grid-cols-3 gap-4" data-aos="fade-up">
            @foreach ($testimonials as $index => $testimonial)
                {{-- <a href="/blogs/{{ $blog->id }}" class="w-full md:w-1/3 xl:w-1/3 2xl:w-1/4 flex-shrink-0 px-2 mb-4">
                    <x-blog-card date="{{ $blog->created_at }}" category="{{ $blog->category }}"
                        image="{{ $blog->image_url }}" author="{{ $blog->user->name }}" isLimitWidth="false">
                        {{ \Str::limit($blog->title, 60) }}
                    </x-blog-card>
                </a> --}}
                <div
                        class="testimonial-item bg-white px-8 py-6 rounded-xl min-w-[500px] shadow-soft">
                        <div class="identity">
                            <h4 class="text-primary font-bold text-xl">{{ $testimonial->name }}</h4>
                            <p class="text-md opacity-70 font-semibold mt-1">{{ $testimonial->bio }}</p>
                        </div>
                        <div class="content mt-5">
                            <span class="text-5xl text-primary font-bold">"</span>
                            <p class="text-lg mt-[-15px] font-semibold">{{ $testimonial->review }}</p>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="flex justify-end mt-8">
            {{ $testimonials->links() }}
        </div>
    </div>
</x-template>
