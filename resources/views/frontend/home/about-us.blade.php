@php
    $isArabic = app()->getLocale() === 'ar';
@endphp
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-10 items-center">
        <div>
            <p class="text-xs tracking-[0.3em] uppercase text-[#D60F12] mb-4">
                {{ $isArabic ? 'عن مكتبنا' : 'About Us' }}
            </p>
            <h2 class="text-3xl font-bold text-[#00015B] mb-6">
                {{ $isArabic ? 'مكتب علوم المعاجم للترجمة المعتمدة' : 'About Lexicology Certified Translation' }}
            </h2>
            <div class="space-y-5 text-gray-700 leading-relaxed rtl:text-right">
                @if ($isArabic)
                    <p>
                        مكتب علوم المعاجم للترجمة المعتمدة رائد في تقديم حلول لغوية متخصصة في خدمات الترجمة الدقيقة والموثوقة والمعترف بها رسميًا. نلتزم بتقديم ترجمات معتمدة تلبي أعلى المعايير الدولية للجودة والموثوقية.
                    </p>
                    <p>
                        يعمل فريقنا من اللغويين المحترفين والخبراء في مختلف المجالات بشكل تعاوني لضمان ترجمة كل وثيقة بعناية فائقة مع الحفاظ على سلامة النص الأصلي وأسلوبه وغايته.
                    </p>
                    <p>
                        في مكتب علوم المعاجم، ندرك أن اللغة أكثر من مجرد كلمات — إنها الرابط الذي يوصل الثقافات والفرص والأفكار، لذلك نسعى لتقديم تواصل سلس عبر اللغات باحترافية وسرية وتميز.
                    </p>
                @else
                    <p>
                        Lexicology Certified Translation is a premier language solutions provider focused on accurate, reliable,
                        and officially recognized translations that meet the highest international standards.
                    </p>
                    <p>
                        Our team of professional linguists, subject-matter experts, and certified translators collaborate to
                        preserve the tone and intent of every original document across legal, academic, medical, technical, and business fields.
                    </p>
                    <p>
                        We believe language is the bridge between cultures and opportunities, and we deliver every project with professionalism, confidentiality, and excellence.
                    </p>
                @endif
            </div>
            <div class="mt-8 grid sm:grid-cols-2 gap-4 text-sm text-gray-800">
                @foreach (($isArabic
                        ? [
                            'ترجمات معتمدة ومعترف بها دوليًا',
                            'مترجمون متخصصون ناطقون أصليون',
                            'مراجعة دقيقة وجودة مضمونة',
                            'تسليم سريع مع دقة عالية',
                            'حماية كاملة لخصوصية المستندات',
                        ]
                        : [
                            'Certified translations recognized worldwide',
                            'Native, subject-matter expert translators',
                            'Strict quality assurance and proofreading',
                            'Fast turnaround with guaranteed accuracy',
                            'Secure handling of all client documents',
                        ]) as $feature)
                    <div class="flex items-start gap-3">
                        <span class="mt-1 h-2 w-2 rounded-full bg-[#D60F12]"></span>
                        <p>{{ $feature }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="relative">
            <div class="aspect-[4/3] rounded-3xl overflow-hidden shadow-xl bg-gray-200">
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

