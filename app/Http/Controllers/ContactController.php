<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'message' => 'nullable|string|max:5000',
        ]);

        Mail::raw(
            "Νέο μήνυμα επικοινωνίας\n\n" .
            "Όνομα: {$validated['first_name']}\n" .
            "Επώνυμο: {$validated['last_name']}\n" .
            "Email: {$validated['email']}\n" .
            "Τηλέφωνο: {$validated['phone']}\n" .
            "Μήνυμα: " . ($validated['message'] ?? '-'),
            function ($mail) use ($validated) {
                $mail->to('info@georgikoisimvouloi.gr')
                     ->replyTo($validated['email'], $validated['first_name'] . ' ' . $validated['last_name'])
                     ->subject('Νέο μήνυμα επικοινωνίας - ' . $validated['first_name'] . ' ' . $validated['last_name']);
            }
        );

        return back()->with('success', 'Το μήνυμά σας στάλθηκε επιτυχώς.');
    }

    public function sendCv(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);

        Mail::raw(
            "Νέο βιογραφικό\n\n" .
            "Όνομα: {$validated['first_name']}\n" .
            "Επώνυμο: {$validated['last_name']}\n" .
            "Email: {$validated['email']}\n" .
            "Τηλέφωνο: {$validated['phone']}",
            function ($mail) use ($validated, $request) {
                $mail->to('info@georgikoisimvouloi.gr')
                     ->replyTo($validated['email'], $validated['first_name'] . ' ' . $validated['last_name'])
                     ->subject('Νέο βιογραφικό - ' . $validated['first_name'] . ' ' . $validated['last_name']);

                if ($request->hasFile('cv')) {
                    $mail->attach($request->file('cv')->getRealPath(), [
                        'as' => $request->file('cv')->getClientOriginalName(),
                        'mime' => $request->file('cv')->getMimeType(),
                    ]);
                }
            }
        );

        return response()->json(['success' => true]);
    }
}
