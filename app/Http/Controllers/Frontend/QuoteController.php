<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\QuoteRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class QuoteController extends Controller
{
    /**
     * Show the quote request form.
     */
    public function index(): View
    {
        $documentTypes = [
            __('messages.legal_documents'),
            __('messages.academic_documents'),
            __('messages.business_documents'),
            __('messages.medical_documents'),
            __('messages.personal_documents'),
            __('messages.website_app_content'),
            __('messages.other')
        ];

        $languages = [
            __('messages.arabic'),
            __('messages.english'),
            __('messages.french'),
            __('messages.turkish'),
        ];

        return view('frontend.quote', compact('documentTypes', 'languages'));
    }

    /**
     * Handle the quote request submission.
     */
    public function store(QuoteRequest $request): RedirectResponse
    {
        // Here you would typically:
        // 1. Store the quote request in the database
        // 2. Handle file upload if present
        // 3. Send notification emails
        // 4. etc.

        return redirect()
            ->route('quote.index')
            ->with('success', 'Your quote request has been submitted successfully. We will contact you shortly.');
    }
}
