<section class="py-2 bg-white overflow-hidden">
    <div class="">
        <div class="swiper brandSwiper">
            <div class="swiper-wrapper items-center">
                @for ($i = 0; $i < 22; $i++)
                    <div class="swiper-slide !w-auto px-4">
                        <img src="{{ asset('brands/' . ($i + 1) . '.webp') }}" alt="Brand {{ $i + 1 }}"
                            class="h-16 md:h-24 w-auto object-contain rounded-sm">
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

@push('script')
    <style>
        .brandSwiper .swiper-wrapper {
            transition-timing-function: linear;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper(".brandSwiper", {
                slidesPerView: "auto",
                spaceBetween: 0,
                loop: true,
                speed: 3000, // Slow continuous speed
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: false,
                },
                allowTouchMove: false, // Disable touch dragging for continuous effect
                freeMode: true, // Enable free mode for smooth continuous scrolling
            });
        });
    </script>
@endpush
