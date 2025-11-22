@php
    $isArabic = app()->getLocale() === 'ar';
@endphp
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6 mb-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-[#00015B]">
            {{ $isArabic ? 'موقع مكتب علوم المعاجم للترجمة' : 'About Us' }}
        </h2>
        <p class="text-xl md:text-2xl text-[#D60F12] mb-3">
            {{ $isArabic ? 'عن مكتب علوم المعاجم للترجمة المعتمدة' : 'About Lexicology Certified Translation' }}
        </p>
    </div>
    <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-10 items-center">
        @if ($isArabic)
            <div>
                <div class="space-y-5 text-gray-700 leading-relaxed rtl:text-right">
                    <p>
                        مكتب علوم المعاجم للترجمة المعتمدة رائد في تقديم حلول لغوية، متخصص في تقديم خدمات الترجمة
                        الدقيقة والموثوقة والمعترف بها رسميًا. نلتزم بتقديم ترجمات معتمدة تلبي أعلى المعايير الدولية
                        للجودة والدقة والموثوقية.

                        يعمل فريقنا من اللغويين المحترفين والخبراء المتخصصين في ترجمة المواضيع المختلفة والمترجمين
                        المعتمدين بشكل تعاوني لضمان ترجمة كل وثيقة بعناية فائقة، مع الاهتمام الدقيق بالتفاصيل والحفاظ
                        على سلامة النص الأصلي وأسلوبه وغايته. ترجماتنا مقبولة لدى الهيئات الحكومية والمؤسسات التعليمية
                        والشركات حول العالم، سواءً كانت تخدم أغراضاً قانونية أو أكاديمية أو طبية أو تقنية أو تجارية.

                        نحن في مكتب علوم المعاجم، ندرك أن اللغة أكثر من مجرد كلمات، إنها الرابط بين الثقافات والأفكار
                        والفرص. رسالتنا أن نوفر تواصل سلس عبر اللغات وذلك باحترافية وسرية وتميز.
                    </p>
                </div>
                <div class="mt-8 grid sm:grid-cols-1 gap-4 text-sm text-gray-800">
                    <strong class="-mb-4">ما يميزنا:</strong>
                    <div class="flex items-start gap-1 w-full">
                        <div class="rounded-full text-[#D60F12] text-4xl" style="line-height: 0.4">•</div>
                        <p>
                            • تقديم ترجمات معتمدة ومعترف بها دوليًا.
                        </p>
                    </div>
                    <div class="flex items-start gap-1 w-full">
                        <div class="rounded-full text-[#D60F12] text-4xl" style="line-height: 0.4">•</div>
                        <p>
                            • وجود مترجمون ذوو خبرة ناطقون أصليون للغة المعينة.
                        </p>
                    </div>
                    <div class="flex items-start gap-1 w-full">
                        <div class="rounded-full text-[#D60F12] text-4xl" style="line-height: 0.4">•</div>
                        <p>
                            • ضمان جودة وتدقيق لغوي دقيق.
                        </p>
                    </div>
                    <div class="flex items-start gap-1 w-full">
                        <div class="rounded-full text-[#D60F12] text-4xl" style="line-height: 0.4">•</div>
                        <p>
                            • تسليم سريع مع ضمان الدقة.
                        </p>
                    </div>
                    <div class="flex items-start gap-1 w-full">
                        <div class="rounded-full text-[#D60F12] text-4xl" style="line-height: 0.4">•</div>
                        <p>
                            • تعامل آمن مع جميع مستندات العملاء.
                        </p>
                    </div>
                    <p>مكتب علوم المعاجم للترجمة المعتمدة - شريكك الموثوق في التواصل العالمي.</p>
                </div>
            </div>
        @else
            <div>
                <div class="space-y-5 text-gray-700 leading-relaxed rtl:text-right">

                    <p>
                        "Lexicology Certified Translation Office" (also known as  Lexicology Translation Bureau) is
                        presented as a trusted provider of accurate, affordable, and professional translation
                        services
                        based in Riyadh, Saudi Arabia. The office emphasizes high-quality work delivered by a team
                        of
                        experienced, certified translators.
                    </p>
                </div>
                <div class="mt-8 grid sm:grid-cols-1 gap-4 text-sm text-gray-800">
                    @foreach ([
        'Expert team: The office relies on a network of over 150 highly-rated translators from around the world.',
        'Official recognition: As a certified translation office, its services are officially recognized by various government agencies and embassies within and outside Saudi Arabia.',
        'Diverse languages: The office provides certified translation services in over 100 languages, covering both Eastern and Western languages.',
        'High accuracy: To ensure quality, documents undergo an internal review and auditing process. For larger projects, a free sample of up to 200 words is available upon request.',
        'Fast turnaround: The office is committed to providing some of the fastest delivery times in the market. Some small documents can be translated in under an hour, with larger projects often completed in just 24 hours.',
        'Secure and confidential: A strong emphasis is placed on protecting the privacy of client documents.',
        'Online and remote services: Services are available remotely, with document submission possible via WhatsApp or email.',
    ] as $feature)
                        <div class="flex items-start gap-1 w-full">
                            <div class="rounded-full text-[#D60F12] text-4xl" style="line-height: 0.4">•</div>
                            <p>{{ $feature }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="relative">
            <div class="aspect-[3/3] rounded-3xl overflow-hidden shadow-xl bg-gray-200" style="aspect-ratio: 3/3">
                <img src="{{ asset('translation-office.webp') }}" alt="About Lexicology"
                    class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-6 -left-6 bg-white shadow-lg rounded-2xl p-6 max-w-xs">
                <p class="text-xs uppercase text-gray-500 tracking-wide mb-2">
                    {{ $isArabic ? 'خبرة معتمدة' : 'Certified Expertise' }}
                </p>
                <p class="text-2xl font-bold text-[#00015B]">15+</p>
                <p class="text-sm text-gray-600">
                    {{ $isArabic ? 'سنوات من الثقة في خدمات الترجمة' : 'Years delivering trusted translations' }}
                </p>
            </div>
        </div>
    </div>
</section>
