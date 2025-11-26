<section class="bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">{{ __('messages.faqs') }}</h2>

        <div class="space-y-4">
            <details class="group border border-gray-200 bg-white rounded-xl p-6">
                <summary class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ __('messages.how_long_translation') }}
                    </h3>
                    <span class="text-[#E31E24] transition-transform group-open:rotate-180">
                        ▼
                    </span>
                </summary>
                <p class="mt-3 text-gray-600">
                    {{ __('messages.translation_time_answer') }}
                </p>
            </details>

            <details class="group border border-gray-200 bg-white rounded-xl p-6">
                <summary class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ __('messages.which_languages') }}
                    </h3>
                    <span class="text-[#E31E24] transition-transform group-open:rotate-180">
                        ▼
                    </span>
                </summary>
                <p class="mt-3 text-gray-600">
                    {{ __('messages.languages_answer') }}
                </p>
            </details>

            <details class="group border border-gray-200 bg-white rounded-xl p-6">
                <summary class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ __('messages.certified_translations_question') }}
                    </h3>
                    <span class="text-[#E31E24] transition-transform group-open:rotate-180">
                        ▼
                    </span>
                </summary>
                <p class="mt-3 text-gray-600">
                    {{ __('messages.certified_answer') }}
                </p>
            </details>

            <details class="group border border-gray-200 bg-white rounded-xl p-6">
                <summary class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-lg font-semibold text-gray-900">
                        {{ __('messages.how_request_quote') }}
                    </h3>
                    <span class="text-[#E31E24] transition-transform group-open:rotate-180">
                        ▼
                    </span>
                </summary>
                <p class="mt-3 text-gray-600">
                    {{ __('messages.request_quote_answer') }}
                </p>
            </details>
        </div>
    </div>
</section>
