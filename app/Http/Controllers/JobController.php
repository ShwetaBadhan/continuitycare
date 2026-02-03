<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'job_title' => 'required|string|max:255',

                'name'  => 'required|string|min:3|max:255',

                'email' => 'required|email:rfc,dns|max:255',

                'phone' => [
                    'required',
                    'digits:10',
                    'regex:/^[0-9]{10}$/'
                ],

                'resume' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:102400',

                'photo'  => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
            ],
            [
                'job_title.required' => 'Job title is missing. Please refresh the page.',
                'name.required'      => 'Name is required.',
                'name.min'           => 'Name must be at least 3 characters.',
                'email.required'     => 'Email address is required.',
                'email.email'        => 'Please enter a valid email address.',
                'phone.required'     => 'Phone number is required.',
                'phone.digits'       => 'Phone number must be exactly 10 digits.',
                'phone.regex'        => 'Phone number must contain digits only.',
                'resume.required'    => 'Please upload your resume.',
                'resume.mimes'       => 'Resume must be PDF, DOC, DOCX, JPG or PNG.',
                'resume.max'         => 'Resume size must not exceed 100MB.',
                'photo.mimes'        => 'Photo must be JPG or PNG.',
                'photo.max'          => 'Photo size must not exceed 5MB.',
            ]
        );

        // Upload resume
        $resumePath = $request->file('resume')->store('uploads/resumes', 'public');

        // Upload photo (optional)
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('uploads/photos', 'public');
        }

        Job::create([
            'job_title' => $request->job_title,
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'resume'    => $resumePath,
            'photo'     => $photoPath,
        ]);

        return back()->with('success', 'Your job application has been submitted successfully.');
    }
}
