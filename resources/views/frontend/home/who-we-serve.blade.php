@php
    $isArabic = app()->getLocale() === 'ar';
    $audiences = $isArabic
        ? [
            ['label' => 'الوزارات الحكومية والسفارات', 'icon' => 'fa-solid fa-building-columns'],
            ['label' => 'الشركات متعددة الجنسيات والهيئات الدولية', 'icon' => 'fa-solid fa-earth-americas'],
            ['label' => 'الأعمال المحلية والدولية', 'icon' => 'fa-solid fa-briefcase'],
            ['label' => 'الأفراد الذين يحتاجون إلى ترجمة معتمدة لأغراض رسمية', 'icon' => 'fa-solid fa-user-check'],
        ]
        : [
            ['label' => 'Government ministries and embassies', 'icon' => 'fa-solid fa-building-columns'],
            ['label' => 'Multinational companies and international agencies', 'icon' => 'fa-solid fa-earth-americas'],
            ['label' => 'Local and international businesses', 'icon' => 'fa-solid fa-briefcase'],
            ['label' => 'Individuals needing certified translation for official purposes', 'icon' => 'fa-solid fa-user-check'],
        ];
@endphp
<section class="py-16">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <p class="text-xs tracking-[0.3em] uppercase text-[#D60F12] mb-3">
            {{ $isArabic ? 'من نخدم' : 'Who We Serve' }}
        </p>
        <h2 class="text-3xl md:text-4xl font-bold text-[#00015B] mb-8">
            {{ $isArabic ? 'شريككم الموثوق في الترجمة المعتمدة' : 'Your Trusted Partner for Certified Translation' }}
        </h2>
    </div>
    <div class="max-w-5xl mx-auto px-6 grid gap-6 md:grid-cols-2">
        @foreach ($audiences as $audience)
            <div class="p-6 rounded-2xl border border-gray-200 shadow-sm flex gap-4 items-center bg-white">
                <span class="h-12 w-12 rounded-2xl bg-[#D60F12]/10 text-[#D60F12] flex items-center justify-center text-2xl flex-shrink-0">
                    <i class="{{ $audience['icon'] }}"></i>
                </span>
                <p class="text-gray-700 font-medium leading-relaxed rtl:text-right">
                    {{ $audience['label'] }}
                </p>
            </div>
        @endforeach
    </div>
</section>

