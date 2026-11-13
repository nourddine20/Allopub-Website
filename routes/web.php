<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\HomeController;
use App\Models\Portfolio;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PanelController;
use Illuminate\Support\Facades\Auth;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::group(['middleware' => 'lang'], function () {

    // Main routes
    Route::get('/', function () {
        return view('accueil');
    })->name('accueil');

    Route::get('/stand-qui-somme-nous', function () {
        return view('agence');
    })->name('agence');

    
Route::get('/stand-download-pdf',[HomeController::class, 'Downloadpdf'])->name('download.pdf');



    Route::get('/stand-produits-et-services', function () {
        return view('services');
    })->name('produits-et-services');

    Route::get('/stand-devis-en-ligne', function () {
        return view('devis');
    })->name('devis-en-ligne');

    Route::get('/stand-portfolio/', function () {
        return view('portfolio');
    })->name('portfolio');

    // Portfolio dynamic item view
    Route::get('/stand-portfolio/{item}', function ($item) {
        if ($item == 'Stand_Consulat_D`ITALIE') {
            $item = "Stand_Consulat_D'ITALIE";
        }
        return view('pages_protfolio.' . $item, ['item' => $item]);
    })->name('portfolio.view');
    

    // Specific service routes
    Route::get('/stand-produits-et-services/design-graphique', function () {
        return view('services.design-graphique');
    })->name('design-graphique');


    Route::get('/stand-produits-et-services/design-graphique/imprimer', function () {
        return view('services.design-graphic.imprimer');
    })->name('design-graphique.imprimer');

    Route::get('/stand-produits-et-services/design-graphique/Charte-Graphique', function () {
        return view('services.design-graphic.Charte-Graphique');
    })->name('design-graphique.Charte-Graphique');

    Route::get('/stand-produits-et-services/design-graphique/Conception-Graphique', function () {
        return view('services.design-graphic.Conception-Graphique');
    })->name('design-graphique.Conception-Graphique');

    

    Route::get('/stand-produits-et-services/agencement-magasins', function () {
        return view('services.agencement-magasins');
    })->name('agencement_magasins');

    Route::get('/stand-produits-et-services/enseignes-publicitaire', function () {
        return view('services.enseigne-publicitaire');
    })->name('enseignes_publicitaire');

    Route::get('/stand-produits-et-services/amenagement-de-stands', function () {
        return view('services.amenagement-de-stands');
    })->name('amenagement_de_stands');

    Route::get('/stand-produits-et-services/palissades-de-chantier', function () {
        return view('services.palissades-de-chantier');
    })->name('palissades_de_chantier');

    Route::get('/stand-produits-et-services/impression-grand-format', function () {
        return view('services.impression-grand-format');
    })->name('impression_grand_format');

    Route::get('/stand-produits-et-services/plv', function () {
        return view('services.plv');
    })->name('plv');

    Route::get('/stand-produits-et-services/publicite-par-objet', function () {
        return view('services.publicite-par-objet');
    })->name('publicite-par-objet');


    Route::get('/stand-produits-et-services/amenagement-de-stands/stand-sur-mesure',function(){
        return view('services.amenagement-de-stands.stand-sur-mesure');
    })->name('amenagement-de-stands.stand-sur-mesure');

    Route::get('/stand-produits-et-services/amenagement-de-stands/stand-cle-en-main',function(){
        return view('services.amenagement-de-stands.stand-cle-en-main');
    })->name('amenagement-de-stands.stand-cle-en-main');

    Route::get('/stand-produits-et-services/amenagement-de-stands/location-de-meubles',function(){
        return view('services.amenagement-de-stands.location-de-meubles');
    })->name('amenagement-de-stands.location-de-meubles');
    
    Route::get('/stand-produits-et-services/amenagement-de-stands/stand-en-location',function(){
        return view('services.amenagement-de-stands.stand-en-location');
    })->name('amenagement-de-stands.stand-en-location');

    // Contact route
    Route::get('/stand-contact', function () {
        return view('contact');
    })->name('contact');

    Route::post('/stand-contact-submit', [ContactController::class, 'sendContactEmail'])->name('contact.submit');

    Route::post('/stand-devis-submit', [DevisController::class, 'sendDevisEmail'])->name('devis.submit');


    Route::get('/get-video-url', function () {
        return response()->json([
            'videoUrl' => asset('public/assets/video/animation allopub.mp4'),
        ]);
    });

   

});


 ///  Start Admin Panel Routes  ::::////
// Admin Login Routes
// Route to show the login form (only for unauthenticated admin users)
Route::middleware('guest:admin')->get('panel/login', [AuthController::class, 'showLoginForm'])->name('panel.login');

// Route to handle the login form submission (only for unauthenticated admin users)
Route::middleware('guest:admin')->post('panel/login', [AuthController::class, 'login'])->name('panel.login.post');
// Start Admin Panel Routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/panel', [PanelController::class, 'dashboard'])->name('panel.dashboard');
   Route::post('/panel/logout', [AuthController::class, 'logout'])->name('panel.logout');

    // Route::get('/', function () {
    //     return view('panel.dashboard');
    // })->name('panel.dashboard');

    // Example routes for managing portfolio items
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('panel.portfolio.index');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('panel.portfolio.create');
    Route::post('/portfolio', [PortfolioController::class, 'store'])->name('panel.portfolio.store');
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('panel.portfolio.edit');
    Route::put('/portfolio/{id}', [PortfolioController::class, 'update'])->name('panel.portfolio.update');
    Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('panel.portfolio.destroy');

});




///  End Admin Panel Routes 
