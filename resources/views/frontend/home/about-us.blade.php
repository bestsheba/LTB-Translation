@php
    $isArabic = app()->getLocale() === 'ar';
@endphp
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-6 mb-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-[#00015B]">
            {{ $isArabic ? 'عن مكتبنا' : 'About Us' }}
        </h2>
        <p class="text-xl md:text-2xl text-[#D60F12] mb-3">
            {{ $isArabic ? 'مكتب علوم المعاجم للترجمة المعتمدة' : 'About Lexicology Certified Translation' }}
        </p>
    </div>
    <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-10 items-center">
        <div>
            <div class="space-y-5 text-gray-700 leading-relaxed rtl:text-right">
                @if ($isArabic)
                    <p>
                        "مكتب علوم المعاجم للترجمة المعتمدة" هو شريكك الموثوق في مجال الترجمة، حيث يلتزم بتقديم خدمات
                        ترجمة عالية الجودة وبأسعار تنافسية. يقع المكتب في الرياض، المملكة العربية السعودية، مقرًا له،
                        معتمدًا على فريق من المترجمين المحترفين لضمان ترجمة دقيقة ومتقنة.
                    </p>
                @else
                    <p>
                        "Lexicology Certified Translation Office" (also known as  Lexicology Translation Bureau) is
                        presented as a trusted provider of accurate, affordable, and professional translation services
                        based in Riyadh, Saudi Arabia. The office emphasizes high-quality work delivered by a team of
                        experienced, certified translators.
                    </p>
                @endif
            </div>
            <div class="mt-8 grid sm:grid-cols-1 gap-4 text-sm text-gray-800">
                @foreach ($isArabic ? [
                    'فريق من الخبراء: يضم المكتب فريقًا من المترجمين ذوي الكفاءة العالية، والذين يتمتعون بخبرة واسعة في الترجمة.',
                    'اعتماد رسمي: تُعد ترجمات المكتب معتمدة ومقبولة لدى مختلف الجهات الحكومية والسفارات داخل وخارج المملكة العربية السعودية.',
                    'تنوع اللغات: يقدم المكتب خدمات الترجمة المعتمدة لأكثر من 100 لغة، بما في ذلك اللغات النادرة.',
                    'دقة عالية:  لضمان الجودة، تخضع جميع الوثائق لعملية مراجعة وتدقيق داخلية. للمشاريع الكبيرة، تتوفر عينة مجانية تصل إلى 200 كلمة عند الطلب.',
                    'سرية تامة: يلتزم مكتبنا بتقديم أسرع أوقات تسليم ممكنة في السوق، حيث يمكن ترجمة بعض الوثائق الصغيرة في أقل من ساعة، في حين يتم إنجاز المشاريع الأكبر غالبًا في غضون 24 ساعة فقط ',
                    'الأمان والسرية:  يتم التركيز بشكل كبير على حماية خصوصية وسرية وثائق العملاء.',
                    'خدمات إلكترونية وعن بُعد: يمكن للعملاء الاستفادة من الخدمات عن بُعد، مع إمكانية إرسال الوثائق عبر تطبيقي الواتساب أو البريد الإلكتروني.',
                    'سرية تامة: يضمن المكتب السرية التامة لجميع وثائق العملاء.'
                ] : [
                    'Expert team: The office relies on a network of over 150 highly-rated translators from around the world.', 
                    'Official recognition: As a certified translation office, its services are officially recognized by various government agencies and embassies within and outside Saudi Arabia.',
                    'Diverse languages: The office provides certified translation services in over 100 languages, covering both Eastern and Western languages.', 
                    'High accuracy: To ensure quality, documents undergo an internal review and auditing process. For larger projects, a free sample of up to 200 words is available upon request.', 
                    'Fast turnaround: The office is committed to providing some of the fastest delivery times in the market. Some small documents can be translated in under an hour, with larger projects often completed in just 24 hours.',
                    'Secure and confidential: A strong emphasis is placed on protecting the privacy of client documents.',
                    'Online and remote services: Services are available remotely, with document submission possible via WhatsApp or email.',
                     ] as $feature)
                    <div class="flex items-start gap-3 w-full">
                        <div class="mt-1 !px-1 !py-1 rounded-full bg-[#D60F12]"></div>
                        <p>{{ $feature }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="relative">
            <div class="aspect-[3/3] rounded-3xl overflow-hidden shadow-xl bg-gray-200">
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
