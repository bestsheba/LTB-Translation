<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch(Request $request, $language)
    {
        // Validate language is supported
        if (!in_array($language, config('languages.supported'))) {
            $language = config('app.locale');
        }

        // Save to session
        session([config('languages.session_key') => $language]);

        // Redirect back with the new language
        return redirect()->back();
    }
}
