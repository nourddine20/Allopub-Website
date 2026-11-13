<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DevisEmail;
use App\Mail\ContactEmail;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Object_;

class HomeController extends Controller
{

public function Downloadpdf() {
        
        $myFile = public_path("catalogue/Plaquette_ALLOPUB.pdf");
        
        $headers = ['Content-Type: application/pdf'];
        $newName = 'Plaquette-ALLOPUB-pdf-file-'.time().'.pdf';

        return response()->download($myFile, $newName, $headers);
    
    }

}