<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DevisFormSubmitted;
use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Log;

class DevisController extends Controller
{
    //

    public function sendDevisEmail(Request $request)
    {
     // Validate the form data
     $request->validate([
        'name' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mobile' => 'required|string|max:255',
        'name_event' => 'required|string|max:255',
        'event_date' => 'required|date|after_or_equal:today',
        'surface' => 'required|numeric|min:0.01',  // Ensuring surface is a positive number
        'prestation' => 'required|string',
        'budget' => 'required|string',
        'messageContent' => 'required|string|max:1000',
    ], [
        // Custom error messages for 'name'
        'name.required' => 'Le nom est obligatoire.',
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
    
        // Custom error messages for 'company_name'
        'company_name.required' => 'Le nom de l\'entreprise est obligatoire.',
        'company_name.string' => 'Le nom de l\'entreprise doit être une chaîne de caractères.',
        'company_name.max' => 'Le nom de l\'entreprise ne doit pas dépasser 255 caractères.',
    
        // Custom error messages for 'email'
        'email.required' => 'L\'adresse e-mail est obligatoire.',
        'email.email' => 'L\'adresse e-mail doit être valide.',
        'email.max' => 'L\'adresse e-mail ne doit pas dépasser 255 caractères.',
    
        // Custom error messages for 'mobile'
        'mobile.required' => 'Le numéro de téléphone est obligatoire.',
        'mobile.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
        'mobile.max' => 'Le numéro de téléphone ne doit pas dépasser 255 caractères.',
    
        // Custom error messages for 'name_event'
        'name_event.required' => 'Le nom de l\'événement est obligatoire.',
        'name_event.string' => 'Le nom de l\'événement doit être une chaîne de caractères.',
        'name_event.max' => 'Le nom de l\'événement ne doit pas dépasser 255 caractères.',
    
        // Custom error messages for 'event_date'
        'event_date.required' => 'La date de l\'événement est obligatoire.',
        'event_date.date' => 'La date de l\'événement doit être une date valide.',
        'event_date.after_or_equal' => 'La date de l\'événement doit être aujourd\'hui ou plus tard.',
    
        // Custom error messages for 'surface'
        'surface.required' => 'La surface est obligatoire.',
        'surface.numeric' => 'La surface doit être un nombre valide.',
        'surface.min' => 'La surface doit être supérieure à zéro.',
    
        // Custom error messages for 'prestation'
        'prestation.required' => 'La prestation est obligatoire.',
        'prestation.string' => 'La prestation doit être une chaîne de caractères.',
    
        // Custom error messages for 'budget'
        'budget.required' => 'Le budget est obligatoire.',
        'budget.string' => 'Le budget doit être une chaîne de caractères.',
    
        // Custom error messages for 'messageContent'
        'messageContent.required' => 'Le contenu du message est obligatoire.',
        'messageContent.string' => 'Le contenu du message doit être une chaîne de caractères.',
        'messageContent.max' => 'Le contenu du message ne doit pas dépasser 1000 caractères.',
    ]);
    

    
        // Sanitize and assign inputs
        $name = trim($request->name);
        $company_name = trim($request->company_name);
        $email = filter_var(trim($request->email), FILTER_SANITIZE_EMAIL);
        $mobile = trim($request->mobile);
        $name_event = trim($request->name_event);
        $event_date = trim($request->event_date);
        $surface = trim($request->surface);
        $prestation = trim($request->prestation);
        $budget = trim($request->budget);
        $messageContent = trim($request->messageContent);
       
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email format',
            ], 422); // Send back a 422 HTTP status code with the error message
        }
    
        try {
            // Send the email using the Mailable class and pass form data
         Mail::to('contact@allopub.ma')->send(new DevisFormSubmitted($name,$company_name, $email, $mobile,$name_event,$event_date,$surface,$prestation,$budget,$messageContent));
             
        
            // Return a JSON response with success
            return response([
                'success' => true,
                'message' => 'Your message has been sent!',
            ], 200);
    
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
          
            // return response()->json([
            //     'success' => false,
            //     'message' => 'There was an error sending your message. Please try again.',
            // ], 500); // Return a 500 HTTP status code on failure
        }
    }
    
    
}
