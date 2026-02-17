<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Handle contact form submission via AJAX.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'phone'   => 'required|string|max:20',
            'service' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first()
            ], 422);
        }

        try {
            ContactMessage::create([
                'name'    => $request->name,
                'email'   => $request->email ?? '',
                'phone'   => $request->phone,
                'subject' => $request->service ?? 'General Inquiry',
                'message' => $request->message ?? '',
                'status'  => 'new',
            ]);

            return response()->json([
                'success' => true,
                'message' => __('site.contact.success_message', ['default' => 'Your message has been sent successfully. We will contact you soon.'])
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => __('site.contact.error_message', ['default' => 'Failed to send message. Please try again.'])
            ], 500);
        }
    }
}
