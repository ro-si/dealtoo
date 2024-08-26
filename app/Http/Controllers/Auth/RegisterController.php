<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Assurez-vous que vous avez cette vue
    }

    public function register(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'phone' => 'nullable|string',
            'code_commercial' => 'nullable|string',
            'accept_terms' => 'required|accepted',
            'accept_marketing_offers' => 'nullable|accepted',
        ]);
    
        // Préparer les données pour l'API
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation'),
            'phone' => $request->input('phone'),
            'code_commercial' => $request->input('code_commercial'),
            'country_code' => $request->input('country_code', 'CI'),
            'auth_field' => $request->input('auth_field', 'email'),
            'accept_terms' => $request->input('accept_terms'),
            'accept_marketing_offers' => $request->input('accept_marketing_offers'),
        ];
    
     
        try {
            // Envoyer les données à l'API d'inscription
            $response = Http::post('https://api.dealtoo.co/api/register', $data);
    
            // Vérifier la réponse de l'API
            if ($response->successful()) {
                // Inscription réussie
                $user = $response->json(); // Assurez-vous que la réponse contient les informations utilisateur
                
                // Stocker les informations de l'utilisateur dans la session
                session(['user' => $user]);

                // dd(session('user'))
    
            // Redirection vers la page d'accueil avec un message de succès
            return redirect()->route('welcome')->with('success', 'Inscription réussie ! Vous êtes maintenant connecté.');
     

            } else {
                // Gestion des erreurs
                $errors = $response->json('errors');
                return Redirect::back()->withErrors($errors)->withInput();
            }
        } catch (\Exception $e) {
            // Gestion des exceptions
            return Redirect::back()->withErrors(['message' => 'Erreur réseau : ' . $e->getMessage()])->withInput();
        }
    }
    
}
