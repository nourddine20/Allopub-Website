<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('panel.auth.login'); // Ensure you have a `resources/views/admin/login.blade.php` file
    }

    /**
     * Handle the login process.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');
      

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
           
            return response()->json([
                'success' => true,
                'redirect_url' => route('panel.dashboard') // redirect to dashboard if login is successful
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid email or password.'
        ]);
    }

    /**
     * Handle the logout process.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('panel.auth.login'); // Redirect to the admin login page
    }
}
