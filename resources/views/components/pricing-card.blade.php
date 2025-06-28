@props(['active', 'price'])

<div data-id="{{ $attributes->get('id') }}"
    class="pricing-card px-6 py-9 flex items-center ring-1 ring-black ring-opacity-20 rounded-xl justify-between cursor-pointer ml-1 @if ($active) bg-primary text-white @endif">
    <div class="pricing-type flex gap-4">
        <div class="pricing-radio">
            <input type="radio" name="pricing" id="pricingRadio{{ $attributes->get('id') }}"
                value="{{ $attributes->get('value') }}" @if ($active) checked @endif
                class="opacity-0 absolute h-6 w-6 cursor-pointer" />
            <div
                class="bg-white border-2 rounded-md border-blue-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                <svg class="fill-current hidden w-3 h-3 text-blue-600 cursor-pointer" version="1.1" viewBox="0 0 17 12"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd">
                        <g transform="translate(-9 -11)" fill="#FE5352" fill-rule="nonzero">
                            <path
                                d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <p class="font-semibold text-lg">{{ $slot }}</p>
    </div>
    <div class="pricing-price text-right">
        <p class="font-semibold">
            @if ($price == 0)
                <span class="opacity-50">Hubungi kami untuk harga</span>
            @else
                <span class="opacity-50">Mulai dari</span>
                <span class="opacity-100 text-lg"> Rp. {{ $price }}</span>
            @endif
        </p>
    </div>
</div>
