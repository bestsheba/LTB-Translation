@php
    $isArabic = app()->getLocale() === 'ar';
@endphp
<section class="py-16">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <p class="text-xs tracking-[0.3em] uppercase text-[#D60F12] mb-3">
            {{ $isArabic ? 'ثقة معززة بالخبرة' : 'Certified Excellence' }}
        </p>
        <h2 class="text-3xl md:text-4xl font-bold text-[#00015B]">
            {{ $isArabic ? 'ترجمة معتمدة يمكنك الاعتماد عليها' : 'Certified Translation Excellence You Can Trust' }}
        </h2>
        <p class="mt-2 text-gray-500 text-sm uppercase tracking-wider">
            {{ $isArabic ? 'مدعومة بخبرة مهنية' : 'Backed by Professional Expertise' }}
        </p>
    </div>
    <div class="max-w-6xl mx-auto px-6 mt-10 grid lg:grid-cols-2 gap-10 text-gray-700 leading-relaxed">
        @if ($isArabic)
            <div class="space-y-4">
                <p>
                    في مكتب ليكسولوجي للترجمة المعتمدة، نحرص على تقديم خدمات ترجمة دقيقة ومهنية وموثوقة تلبي احتياجات الأفراد والشركات والجهات الحكومية في المملكة العربية السعودية وخارجها.
                </p>
                <p>
                    كمكتب معتمد رسميًا، تُقبل ترجماتنا لدى الوزارات، السفارات، والمؤسسات الدولية. نتعامل مع الطلبات العاجلة والمعقدة والسرية بأعلى درجات الاحترافية.
                </p>
                <p>
                    يخضع كل مستند لعملية مراجعة وتدقيق داخلي لضمان الدقة، ونوفر عينة مجانية للمشاريع الكبيرة (حتى 200 كلمة) لبناء الثقة والوضوح.
                </p>
            </div>
            <div class="space-y-4">
                <p>
                    مع شبكة تضم أكثر من 150 مترجمًا محترفًا عالميًا، نقدم تسليمًا سريعًا: مستندات صغيرة خلال ساعة والمشاريع الكبيرة خلال 24 ساعة عادةً.
                </p>
                <p>
                    نُبقي راحة العميل في المقدمة من خلال خدمات إلكترونية كاملة — إرسال واستلام المستندات عبر الواتساب أو البريد الإلكتروني أينما كنتم.
                </p>
                <p class="font-semibold text-[#00015B]">
                    رسالتنا: توفير ترجمات دقيقة ومعتمدة تمكّن عملاءنا من تلبية احتياجاتهم الرسمية، التجارية، والشخصية بثقة وسهولة.
                </p>
            </div>
        @else
            <div class="space-y-4">
                <p>
                    At Lexicology Certified Translation Office, we deliver precise, professional, and reliable translations for individuals, companies, and government entities across 100+ languages.
                </p>
                <p>
                    As an officially recognized provider, our work is accepted by ministries, embassies, and international organizations. Urgent, complex, or confidential projects are handled with unmatched professionalism.
                </p>
                <p>
                    Every document passes through internal quality reviews, and we provide a complimentary 200-word sample for large projects so clients can validate tone and accuracy.
                </p>
            </div>
            <div class="space-y-4">
                <p>
                    With a network of 150+ certified translators worldwide, we offer rapid delivery — many small documents within an hour, larger sets within 24 hours.
                </p>
                <p>
                    Clients enjoy a fully remote workflow: submit and receive certified translations via WhatsApp or email from anywhere in the world.
                </p>
                <p class="font-semibold text-[#00015B]">
                    Our mission is simple: provide precise, certified translations that empower clients to meet official, business, and personal needs with confidence.
                </p>
            </div>
        @endif
    </div>
</section>

