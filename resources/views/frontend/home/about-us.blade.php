@php
    $isArabic = app()->getLocale() === 'ar';
@endphp
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6 mb-12 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-[#00015B] mb-3">
            {{ $isArabic ? 'عن مكتب علوم المعاجم للترجمة المعتمدة' : 'About Lexicology Certified Translation Office' }}
        </h2>
        <p class="text-xl md:text-2xl text-[#E31E24]">
            {{ $isArabic ? 'هدفنا الأساسي هو تلبية احتياجات عملائنا من خلال تقديم خدمات ترجمة بأعلى جودة' : 'Our primary goal is to meet the needs of our clients by delivering translation services of the highest quality' }}
        </p>
    </div>

    <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-start">
        <!-- Features Section -->
        <div class="space-y-8">
            @php
                $features = $isArabic
                    ? [
                        [
                            'icon' => 'crown',
                            'title' => 'جودة عالية',
                            'description' =>
                                'كمكتب ترجمة معتمد في المملكة العربية السعودية، نحن ملتزمون بتقديم جودة استثنائية في جميع خدمات الترجمة لعملائنا. نهجنا يتجاوز الترجمة الحرفية، مع التركيز بدلاً من ذلك على نقل المعنى بدقة والحفاظ على السياق الأصلي.',
                        ],
                        [
                            'icon' => 'medal',
                            'title' => 'التخصص',
                            'description' =>
                                'لضمان الدقة والدقة، نقوم بتعيين كل مشروع لفريق متخصص من المترجمين ذوي الخبرة في المجال ذي الصلة. يتيح لنا هذا التفاني تحقيق مستويات عالية من الدقة في مشاريعنا المترجمة باستمرار.',
                        ],
                        [
                            'icon' => 'search',
                            'title' => 'التدقيق والمراجعة',
                            'description' =>
                                'عند الانتهاء من كل ترجمة، تخضع كل ترجمة لعملية مراجعة وتدقيق صارمة من خطوتين. يضمن هذا النهج الدقيق دقة المحتوى المترجم ويضمن خلوه من جميع الأخطاء.',
                        ],
                        [
                            'icon' => 'file',
                            'title' => 'الحفاظ على أسلوب الكاتب',
                            'description' =>
                                'في مكتب علوم المعاجم للترجمة المعتمدة، نعطي الأولوية للحفاظ على أسلوب المؤلف وجوهر النص الأصلي. نسعى جاهدين للحفاظ بعناية على النية والأسلوب والصوت للمؤلف الأصلي، مما يضمن أن الترجمة تعكس بأمانة رؤية المؤلف.',
                        ],
                    ]
                    : [
                        [
                            'icon' => 'crown',
                            'title' => 'Top Quality',
                            'description' =>
                                'As a certified translation office in the Kingdom of Saudi Arabia, we are committed to delivering exceptional quality in all translation services for our clients. Our approach goes beyond literal translation, focusing instead on accurately conveying meaning and preserving the original context.',
                        ],
                        [
                            'icon' => 'medal',
                            'title' => 'Specialization',
                            'description' =>
                                'To ensure accuracy and precision, we assign each project to a specialized team of translators with expertise in the relevant field. This dedication allows us to consistently achieve high levels of accuracy in our translated projects.',
                        ],
                        [
                            'icon' => 'search',
                            'title' => 'Proofreading and Reviewing',
                            'description' =>
                                'Upon completing each translation, every translation undergoes a rigorous two-step review and proofreading process. This meticulous approach ensures the accuracy of translated content and guarantees it is free of all errors.',
                        ],
                        [
                            'icon' => 'file',
                            'title' => 'Maintaining the Writer\'s Style',
                            'description' =>
                                'At Lexicology Certified Translation Office, we prioritize preserving the author\'s style and the essence of the original text. We strive to faithfully maintain the intent, style, and voice of the original author, ensuring that the translation accurately reflects the author\'s vision.',
                        ],
                    ];
            @endphp

            @foreach ($features as $feature)
                <div class="flex items-start gap-4 {{ $isArabic ? 'flex-row-reverse text-right' : '' }}">
                    <!-- Icon Circle -->
                    <div
                        class="flex-shrink-0 w-16 h-16 rounded-full bg-gradient-to-br from-[#00015B] to-[#000340] flex items-center justify-center shadow-lg">
                        @if ($feature['icon'] === 'crown')
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L15 8L21 9L16.5 13.5L18 20L12 16.5L6 20L7.5 13.5L3 9L9 8L12 2Z" />
                            </svg>
                        @elseif($feature['icon'] === 'medal')
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 7C9.24 7 7 9.24 7 12C7 14.76 9.24 17 12 17C14.76 17 17 14.76 17 12C17 9.24 14.76 7 12 7ZM12 15C10.35 15 9 13.65 9 12C9 10.35 10.35 9 12 9C13.65 9 15 10.35 15 12C15 13.65 13.65 15 12 15ZM8 2L11 7L8 12L5 7L8 2ZM16 2L19 7L16 12L13 7L16 2Z" />
                            </svg>
                        @elseif($feature['icon'] === 'search')
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        @else
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2ZM6 20V4H13V9H18V20H6Z" />
                            </svg>
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-[#E31E24] mb-2">{{ $feature['title'] }}</h3>
                        <p class="text-gray-700 leading-relaxed text-sm">{{ $feature['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Image Section -->
        <div class="relative lg:sticky lg:top-8">
            <div
                class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl bg-gradient-to-br from-[#00015B] to-[#000340]">
                <img src="{{ asset('about.jpeg') }}" alt="About Lexicology" class="w-full h-full object-cover">
            </div>
            <div
                class="absolute -bottom-6 {{ $isArabic ? '-right-6' : '-left-6' }} bg-white shadow-xl rounded-2xl p-6 max-w-xs border-t-4 border-[#E31E24]">
                <p class="text-xs uppercase text-gray-500 tracking-wide mb-2">
                    {{ $isArabic ? 'خبرة معتمدة' : 'Certified Expertise' }}
                </p>
                <p class="text-3xl font-bold text-[#00015B]">27+</p>
                <p class="text-sm text-gray-600">
                    {{ $isArabic ? 'سنوات من الثقة في خدمات الترجمة' : 'Years delivering trusted translations' }}
                </p>
            </div>
        </div>
    </div>
</section>
