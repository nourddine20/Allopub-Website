<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Log;


class ContactController extends Controller
{
    // Display the contact form
    public function showForm()
    {
        return view('contact');
    }

    // Handle the form submission and send the email
  
    public function sendContactEmail(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mobile' => 'required|string|max:255',
        'subject'=>'required|string|max:255',
        'message' => 'required|string',
    ], [
        'name.required' => 'nom est obligatoire.',
        'name.string' => 'nom doit être une chaîne de caractères.',
        'name.max' => 'nom ne doit pas dépasser 255 caractères.',
        
        'email.required' => 'adresse e-mail est obligatoire.',
        'email.email' => 'adresse e-mail doit être une adresse e-mail valide.',
        'email.max' => 'adresse e-mail ne doit pas dépasser 255 caractères.',
        
        // Custom error messages for 'mobile'
        'mobile.required' => 'Le numéro de téléphone est obligatoire.',
        'mobile.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
        'mobile.max' => 'Le numéro de téléphone ne doit pas dépasser 255 caractères.',


        'subject.required' => 'sujet est obligatoire.',
        'subject.string' => 'sujet doit être une chaîne de caractères.',
        'subject.max' => 'sujet ne doit pas dépasser 255 caractères.',
        
        'message.required' => 'message est obligatoire.',
        'message.string' => 'message doit être une chaîne de caractères.',
    ]);

    // Sanitize and assign inputs
    $name = trim($request->name);
    $email = filter_var(trim($request->email), FILTER_SANITIZE_EMAIL);
    $mobile = trim($request->mobile);
    $subject = trim($request->subject);
    $messageContent = trim($request->message);

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return response()->json([
            'success' => false,
            'message' => 'Invalid email format',
        ], 422); // Send back a 422 HTTP status code with the error message
    }

    try {
        // Send the email using the Mailable class and pass form data
     Mail::to('contact@allopub.ma')->send(new ContactFormSubmitted($name, $email,$mobile,$subject,$messageContent));
          
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
