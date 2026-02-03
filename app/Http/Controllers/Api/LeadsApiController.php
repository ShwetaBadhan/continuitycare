<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;

class LeadsApiController extends Controller
{
    
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Lead::latest()->get()
        ]);
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'nullable|string|max:20',
            'subject'  => 'nullable|string|max:255',
            'message'  => 'nullable|string',
        ]);

        $lead = Lead::create([
            ...$validated,
            'ip' => $request->ip(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Lead submitted successfully',
            'data' => $lead
        ], 201);
    }
}
