<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        // Hier zou later de code komen om gegevens op te slaan in de database

        // Geef een bedankbericht terug aan de gebruiker
        return back()->with('success', 'Bedankt voor uw aanvraag! We nemen spoedig contact met u op.');
    }
}
