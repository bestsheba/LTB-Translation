<section class="bg-[#D60F12] py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h2 class="text-xl md:text-2xl font-semibold text-white mb-12 relative inline-block">
            {{ __('messages.our_certified_capacities') }}
            <span class="block w-24 h-[1px] bt-white mx-auto mt-3"></span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 text-white">
            <!-- Counter 1 -->
            <div>
                <h3 class="text-4xl md:text-5xl font-bold mb-2">
                    +<span class="count" data-target="1600">0</span>
                </h3>
                <p class="text-white font-semibold uppercase tracking-wide text-sm md:text-base">
                    {{ __('messages.certified_translators') }}
                </p>
            </div>

            <!-- Counter 2 -->
            <div>
                <h3 class="text-4xl md:text-5xl font-bold mb-2">
                    +<span class="count" data-target="100">0</span>
                </h3>
                <p class="text-white font-semibold uppercase tracking-wide text-sm md:text-base">
                    {{ __('messages.languages') }}
                </p>
            </div>

            <!-- Counter 3 -->
            <div>
                <h3 class="text-4xl md:text-5xl font-bold mb-2">
                    +<span class="count" data-target="7000">0</span>
                </h3>
                <p class="text-white font-semibold uppercase tracking-wide text-sm md:text-base">
                    {{ __('messages.translated_projects') }}
                </p>
            </div>

            <!-- Counter 4 -->
            <div>
                <h3 class="text-4xl md:text-5xl font-bold mb-2">
                    +<span class="count" data-target="2450000">0</span>
                </h3>
                <p class="text-white font-semibold uppercase tracking-wide text-sm md:text-base">
                    {{ __('messages.translated_words') }}
                </p>
            </div>
        </div>
    </div>
</section>
