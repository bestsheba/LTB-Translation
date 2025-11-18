@php
    $isArabic = app()->getLocale() === 'ar';
    $services = $isArabic
        ? [
            [
                'title' => 'الترجمة القانونية',
                'desc' => 'العقود، الاتفاقيات، الأنظمة الأساسية للشركات، والمستندات القانونية.',
                'icon' => 'fa-solid fa-scale-balanced',
            ],
            [
                'title' => 'الترجمة التجارية',
                'desc' => 'الوثائق المالية، المعاملات التجارية، المحتوى التسويقي.',
                'icon' => 'fa-solid fa-briefcase',
            ],
            [
                'title' => 'ترجمة المستندات الشخصية',
                'desc' => 'شهادات الميلاد، عقود الزواج، رخص القيادة، الإقامات.',
                'icon' => 'fa-solid fa-id-card',
            ],
            [
                'title' => 'الترجمة التقنية',
                'desc' => 'المواد الهندسية، العلمية، والتقنية المتخصصة.',
                'icon' => 'fa-solid fa-gears',
            ],
            [
                'title' => 'الترجمة الطبية',
                'desc' => 'التقارير الطبية والمستندات الصحية باستخدام مصطلحات دقيقة.',
                'icon' => 'fa-solid fa-stethoscope',
            ],
            [
                'title' => 'ترجمة الوسائط والفيديو',
                'desc' => 'ترجمة المحتوى الإعلامي وإضافة الترجمات النصية (Subtitles).',
                'icon' => 'fa-solid fa-film',
            ],
        ]
        : [
            [
                'title' => 'Legal Translation',
                'desc' => 'Contracts, agreements, company statutes, and legal documents.',
                'icon' => 'fa-solid fa-scale-balanced',
            ],
            [
                'title' => 'Commercial Translation',
                'desc' => 'Financial documents, business transactions, marketing content.',
                'icon' => 'fa-solid fa-briefcase',
            ],
            [
                'title' => 'Personal Document Translation',
                'desc' => 'Birth certificates, marriage certificates, driver’s licenses, iqamas.',
                'icon' => 'fa-solid fa-id-card',
            ],
            [
                'title' => 'Technical Translation',
                'desc' => 'Engineering, scientific, and other technical materials.',
                'icon' => 'fa-solid fa-gears',
            ],
            [
                'title' => 'Medical Translation',
                'desc' => 'Medical reports and health documentation with accurate terminology.',
                'icon' => 'fa-solid fa-stethoscope',
            ],
            [
                'title' => 'Media & Video Translation',
                'desc' => 'Media content localization and subtitle preparation.',
                'icon' => 'fa-solid fa-film',
            ],
        ];
@endphp
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#00015B]">
                {{ $isArabic ? 'خدماتنا المتخصصة' : 'Our Services' }}
            </h2>
            <p class="text-xl md:text-2xl text-[#D60F12] mb-3">
                {{ $isArabic ? 'خدمات ترجمة متخصصة لكل قطاع' : 'Specialized Translation Services' }}
            </p>
        </div>
        <div class="grid gap-6 md:grid-cols-2">
            @foreach ($services as $service)
                <div class="p-6 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-lg transition">
                    <div class="flex items-center gap-3 mb-3">
                        <span
                            class="h-12 w-12 rounded-2xl bg-[#00015B]/10 text-[#00015B] flex items-center justify-center text-xl flex-shrink-0">
                            <i class="{{ $service['icon'] }}"></i>
                        </span>
                        <h3 class="text-xl font-semibold text-[#00015B]">
                            {{ $service['title'] }}
                        </h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $service['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
