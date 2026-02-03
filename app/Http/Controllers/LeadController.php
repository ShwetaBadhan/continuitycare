<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

use Illuminate\Support\Facades\Http;
class LeadController extends Controller
{
    //

    public function store(Request $request)
    {
        // Validate input + captcha token
        $request->validate([
            'fullname' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'subject' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'message' => ['nullable', 'max:5000'],
            'recaptcha_token' => ['required', 'string']
        ]);

        
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $request->recaptcha_token,
                'remoteip' => $request->ip(),
            ]
        );

        $recaptcha = $response->json();

        if (
            empty($recaptcha['success']) ||
            $recaptcha['score'] < 0.5 ||
            $recaptcha['action'] !== 'contact_form'
        ) {
            return response()->json([
                'message' => 'Captcha verification failed. Please try again.'
            ], 422);
        }

      
        Lead::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => $request->ip(),
        ]);

        return response()->json([
            'message' => 'Thank you for contacting us. We will get back to you soon!'
        ], 200);
    }
}

