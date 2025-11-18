@php
    $isArabic = app()->getLocale() === 'ar';
    $advantages = $isArabic
        ? [
            [
                'title' => 'فريق ترجمة خبير',
                'desc' => 'شبكة عالمية تضم أكثر من 150 مترجمًا معتمدًا وذوي كفاءة عالية.',
                'icon' => 'fa-solid fa-people-group',
            ],
            [
                'title' => 'اعتراف رسمي',
                'desc' => 'ترجمات مقبولة لدى الوزارات، السفارات، والهيئات الدولية داخل المملكة وخارجها.',
                'icon' => 'fa-solid fa-award',
            ],
            [
                'title' => 'أكثر من 100 لغة',
                'desc' => 'من اللغات الأكثر انتشارًا إلى اللغات الشرقية والغربية النادرة.',
                'icon' => 'fa-solid fa-globe',
            ],
            [
                'title' => 'دقة عالية',
                'desc' => 'تدقيق داخلي ومراقبة جودة لكل مستند لضمان نتائج خالية من الأخطاء.',
                'icon' => 'fa-solid fa-bullseye',
            ],
            [
                'title' => 'سرعة في التسليم',
                'desc' => 'مستندات صغيرة خلال ساعة والمشاريع الكبيرة خلال 24 ساعة.',
                'icon' => 'fa-solid fa-bolt',
            ],
            [
                'title' => 'سرية تامة',
                'desc' => 'حماية كاملة وخصوصية لجميع مستندات العملاء.',
                'icon' => 'fa-solid fa-shield-halved',
            ],
            [
                'title' => 'خدمات إلكترونية',
                'desc' => 'إرسال واستلام المستندات بسهولة عبر الواتساب أو البريد الإلكتروني.',
                'icon' => 'fa-solid fa-wifi',
            ],
        ]
        : [
            [
                'title' => 'Expert Translation Team',
                'desc' => 'Global network of 150+ highly qualified, certified linguists.',
                'icon' => 'fa-solid fa-people-group',
            ],
            [
                'title' => 'Official Recognition',
                'desc' => 'Accepted by government entities, ministries, and embassies worldwide.',
                'icon' => 'fa-solid fa-award',
            ],
            [
                'title' => '100+ Languages',
                'desc' => 'From widely spoken languages to rare Eastern and Western languages.',
                'icon' => 'fa-solid fa-globe',
            ],
            [
                'title' => 'High Accuracy',
                'desc' => 'Internal auditing and QA for every document to ensure precision.',
                'icon' => 'fa-solid fa-bullseye',
            ],
            [
                'title' => 'Fast Delivery',
                'desc' => 'Small documents within an hour; large projects within 24 hours.',
                'icon' => 'fa-solid fa-bolt',
            ],
            [
                'title' => 'Strict Confidentiality',
                'desc' => 'Robust privacy safeguards for every client document.',
                'icon' => 'fa-solid fa-shield-halved',
            ],
            [
                'title' => 'Online Services',
                'desc' => 'Submit and receive certified translations via WhatsApp or email.',
                'icon' => 'fa-solid fa-wifi',
            ],
        ];
@endphp
<section class="py-16 bg-[#00015B] text-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold">
                {{ $isArabic ? 'المزايا الرئيسية' : 'Key Advantages' }}
            </h2>
            <p class="text-xl md:text-2xl text-[#D60F12] mb-3">
                {{ $isArabic ? 'لماذا تختار مكتب ليكسولوجي؟' : 'Why Choose Lexicology Translation Office?' }}
            </p>
        </div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($advantages as $advantage)
                <div
                    class="bg-white/5 backdrop-blur rounded-2xl border border-white/10 p-6 shadow-lg hover:-translate-y-1 transition">
                    <div
                        class="h-12 w-12 mb-4 rounded-2xl bg-[#F7B32B]/15 flex items-center justify-center text-[#F7B32B] text-2xl flex-shrink-0">
                        <i class="{{ $advantage['icon'] }} text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-white">
                        {{ $advantage['title'] }}
                    </h3>
                    <p class="text-white/80 leading-relaxed">
                        {{ $advantage['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
