<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ServicesController extends Controller
{
    /**
     * Show the services page.
     */
    public function index(): View
    {
        // Define the services data
        $services = [
            [
                'title' => __('messages.service_legal_translation'),
                'description' => __('messages.service_legal_desc'),
                'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'
            ],
            [
                'title' => __('messages.service_academic_translation'),
                'description' => __('messages.service_academic_desc'),
                'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'
            ],
            [
                'title' => __('messages.service_business_translation'),
                'description' => __('messages.service_business_desc'),
                'icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'
            ],
            [
                'title' => __('messages.service_medical_translation'),
                'description' => __('messages.service_medical_desc'),
                'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
            ],
            [
                'title' => __('messages.service_personal_documents'),
                'description' => __('messages.service_personal_desc'),
                'icon' => 'M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z'
            ],
            [
                'title' => __('messages.service_website_localization'),
                'description' => __('messages.service_website_desc'),
                'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9'
            ]
        ];

        // Define the languages
        $languages = [
            __('messages.lang_arabic_english'),
            __('messages.lang_arabic_french'),
            __('messages.lang_arabic_turkish'),
        ];

        return view('frontend.services', compact('services', 'languages'));
    }
}
