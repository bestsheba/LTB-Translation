@php
    $isArabic = app()->getLocale() === 'ar';
@endphp
<section class="py-16">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-[#00015B]">
            {{ $isArabic ? 'ثقة معززة بالخبرة' : 'Certified Excellence' }}
        </h2>
        <p class="text-xl md:text-2xl text-[#D60F12] mb-3">
            {{ $isArabic ? 'ترجمة معتمدة متميزة يمكنك الوثوق بها تدعمها الخبرة المهنية العالية' : 'Certified Translation Excellence You Can Trust' }}
        </p>
    </div>
    <div class="max-w-6xl mx-auto px-6 mt-10 grid lg:grid-cols-2 gap-10 text-gray-700 leading-relaxed">
        @if ($isArabic)
            <div class="col-span-full space-y-4">
                <p>
                    في مكتب علوم المعاجم للترجمة المعتمدة، نحرص على تقديم خدمات ترجمة دقيقة ومهنية وموثوقة، مصممة لتلبية
                    الاحتياجات المتنوعة لعملائنا. يقع مكتبنا في الرياض، المملكة العربية السعودية، وقد بنينا سمعة راسخة
                    كشريك موثوق للأفراد والشركات والجهات الحكومية التي تبحث عن ترجمات معتمدة عالية الجودة بأكثر من 100
                    لغة.
                    نحن ندرك أن كل مستند يحمل قيمة — سواء كانت قانونية أو شخصية أو تجارية أو تقنية — ولهذا يضمن فريقنا
                    من المترجمين الخبراء والمعتمدين أن تلبي كل ترجمة أعلى المعايير الدولية، مع الحفاظ على الدقة والاتساق
                    والملاءمة الثقافية.
                    تجاوز التزامنا بالتميز المهارات اللغوية فقط، فكمكتب ترجمة معتمد ومعترف به رسميًا، تُقبل ترجماتنا لدى
                    الوزارات والسفارات والمؤسسات التجارية والجهات الدولية داخل المملكة وخارجها. سواء كانت الحاجة عاجلة،
                    أو معقدة، أو شديدة السرية، فإننا نتعامل مع كل مشروع بأعلى درجات الاحترافية.
                    يخضع كل مستند نترجمه لمراجعة داخلية وفحص دقيق للجودة لضمان نتائج خالية من الأخطاء. وللمشاريع
                    الكبيرة، نقدم أيضًا عينة مجانية — تصل إلى 200 كلمة عند الطلب — مما يمنح العملاء ثقة كاملة في دقة
                    وجودة العمل.
                    وبفضل شبكة تضم أكثر من 150 مترجمًا محترفًا حول العالم، نقدم خدمات ترجمة سريعة وموثوقة وسرية. يمكن
                    إنجاز العديد من المستندات الصغيرة خلال ساعة واحدة فقط، بينما يتم تسليم المشاريع الكبيرة عادة خلال 24
                    ساعة.
                    نحن نضع راحة العميل في المقام الأول من خلال تقديم خدمات إلكترونية كاملة. يمكن إرسال المستندات عبر
                    الواتساب أو البريد الإلكتروني، ليحصل العملاء على ترجمات معتمدة بسرعة وكفاءة — بغض النظر عن موقعهم.
                    في مكتب علوم المعاجم للترجمة المعتمدة، رسالتنا هي تقديم ترجمات دقيقة ومعتمدة تساعد العملاء على تلبية
                    احتياجاتهم الرسمية والتجارية والشخصية بكل ثقة وسهولة.
                </p>
            </div>
        @else
            <div class="space-y-4">
                <p>
                    At Lexicology Certified Translation Office, we deliver precise, professional, and reliable
                    translations for individuals, companies, and government entities across 100+ languages.
                </p>
                <p>
                    As an officially recognized provider, our work is accepted by ministries, embassies, and
                    international organizations. Urgent, complex, or confidential projects are handled with unmatched
                    professionalism.
                </p>
                <p>
                    Every document passes through internal quality reviews, and we provide a complimentary 200-word
                    sample for large projects so clients can validate tone and accuracy.
                </p>
            </div>
            <div class="space-y-4">
                <p>
                    With a network of 150+ certified translators worldwide, we offer rapid delivery — many small
                    documents within an hour, larger sets within 24 hours.
                </p>
                <p>
                    Clients enjoy a fully remote workflow: submit and receive certified translations via WhatsApp or
                    email from anywhere in the world.
                </p>
                <p class="font-semibold text-[#00015B]">
                    Our mission is simple: provide precise, certified translations that empower clients to meet
                    official, business, and personal needs with confidence.
                </p>
            </div>
        @endif
    </div>
</section>
