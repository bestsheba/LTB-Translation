@php
    $isArabic = app()->getLocale() === 'ar';
    $steps = $isArabic
        ? [
            [
                'icon' => 'receipt',
                'title' => 'إرسال الملف المراد ترجمته',
                'description' => '',
                'button' => 'إرسال واتساب',
                'buttonLink' => 'https://wa.me/966559548756',
            ],
            [
                'icon' => 'dollar',
                'title' => 'اسعار الترجمة',
                'description' => 'سيقوم فريقنا بمراجعة الملف وتقديم تقدير تفصيلي للتكلفة والوقت المتوقع للإنجاز.',
            ],
            [
                'icon' => 'payment',
                'title' => 'الدفع اونلاين',
                'description' => 'بعد التأكيد، يرجى المتابعة بالدفع لبدء الخدمة.',
                'isPayment' => true,
            ],
            [
                'icon' => 'pdf',
                'title' => 'ترجمة الملف وإرساله للعميل',
                'description' => 'سنكمل الترجمة ونسلم المستند النهائي إليك.',
            ],
        ]
        : [
            [
                'icon' => 'receipt',
                'title' => 'Submit the file requiring translation',
                'description' => '',
                'button' => 'via WhatsApp',
                'buttonLink' => 'https://wa.me/966559548756',
            ],
            [
                'icon' => 'dollar',
                'title' => 'Price Estimate',
                'description' =>
                    'Our team will review the file and provide a detailed estimate of the cost and expected completion time.',
            ],
            [
                'icon' => 'payment',
                'title' => 'Payment',
                'description' => 'Upon confirmation, please proceed with the payment to initiate the service.',
                'isPayment' => true,
            ],
            [
                'icon' => 'pdf',
                'title' => 'Delivery',
                'description' => 'We will complete the translation and deliver the finalized document to you.',
            ],
        ];

    $bankInfo =
        "Name: Fayez Alyami Translation Office\nBank Name: Alinma\nAccount No.: 68203014306000\nIBAN: SA1905000068203014306000";
@endphp

<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#00015B] mb-3">
                {{ $isArabic ? 'كيف تحصل على خدماتنا؟' : 'Four Easy Steps for Translation Services' }}
            </h2>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 {{ $isArabic ? 'rtl' : '' }}">
            @foreach ($steps as $index => $step)
                <div class="p-6 bg-white rounded-2xl shadow-sm border-2 border-[#00015B] hover:shadow-lg hover:border-[#E31E24] transition {{ $isArabic ? 'text-right' : 'text-center' }} {{ isset($step['isPayment']) ? 'cursor-pointer relative group' : '' }}"
                    @if (isset($step['isPayment'])) onclick="copyBankInfo()"
                        title="{{ $isArabic ? 'انقر لنسخ معلومات البنك' : 'Click to copy bank information' }}" @endif>
                    <!-- Copy Icon (only for payment card) -->
                    @if (isset($step['isPayment']))
                        <div
                            class="absolute top-4 {{ $isArabic ? 'left-4' : 'right-4' }} opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-5 h-5 text-[#E31E24]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                    @endif

                    <!-- Icon -->
                    <div class="mb-4 flex justify-center">
                        @if ($step['icon'] === 'receipt')
                            <svg class="w-16 h-16 text-[#00015B]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        @elseif($step['icon'] === 'dollar')
                            <svg class="w-16 h-16 text-[#00015B]" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        @elseif($step['icon'] === 'payment')
                            <img src="{{ asset('payment.jpeg') }}" alt="" class="w-32 h-16 object-contain">
                        @else
                            <svg class="w-16 h-16 text-[#E31E24]" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zM6 20V4h7v5h5v11H6z" />
                                <circle cx="17" cy="7" r="3" fill="#E31E24" />
                            </svg>
                        @endif
                    </div>

                    <!-- Title -->
                    <h3 class="text-lg font-semibold text-[#00015B] mb-3">
                        {{ $step['title'] }}
                    </h3>

                    <!-- Description -->
                    @if (!empty($step['description']))
                        <p class="text-gray-600 text-sm leading-relaxed">
                            {{ $step['description'] }}
                        </p>
                    @endif

                    <!-- Button (only for first step) -->
                    @if (isset($step['button']))
                        <a href="{{ $step['buttonLink'] }}" target="_blank"
                            class="mt-4 inline-flex items-center gap-2 px-6 py-2 bg-[#25D366] text-white rounded-full hover:bg-[#20BA5A] transition font-medium shadow-md">
                            <i class="fab fa-whatsapp text-lg"></i>
                            <span>{{ $step['button'] }}</span>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    <!-- Toast Notification -->
    <div id="copyToast"
        class="fixed bottom-8 left-1/2 transform -translate-x-1/2 bg-[#00015B] text-white px-6 py-3 rounded-lg shadow-lg opacity-0 transition-opacity duration-300 z-50 flex items-center gap-2">
        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd" />
        </svg>
        <span id="toastMessage">{{ $isArabic ? 'تم نسخ معلومات البنك!' : 'Bank information copied!' }}</span>
    </div>
</section>

<script>
    function copyBankInfo() {
        const bankInfo = `{{ $bankInfo }}`;

        // Copy to clipboard
        navigator.clipboard.writeText(bankInfo).then(function() {
            // Show toast notification
            const toast = document.getElementById('copyToast');
            toast.classList.remove('opacity-0');
            toast.classList.add('opacity-100');

            // Hide toast after 3 seconds
            setTimeout(function() {
                toast.classList.remove('opacity-100');
                toast.classList.add('opacity-0');
            }, 3000);
        }).catch(function(err) {
            console.error('Failed to copy: ', err);
        });
    }
</script>
