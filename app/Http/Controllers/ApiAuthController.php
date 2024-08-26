<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $client = new Client();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $apiUrl = 'https://api.dealtoo.co/api/login';

        $response = $client->post($apiUrl, [
            'headers' => [
                'X-AppApiToken' => 'T1RBa3JqM2txYzNybGp2WENDTGpveTQ3STNaQ2lnMlk=',
            ],
            'form_params' => [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ],
        ]);

        $body = $response->getBody()->getContents();
        $data = json_decode($body, true);


        if (isset($data['success']) && $data['success']) {
            // Authentification réussie, redirection vers la page précédente
            Session::put('user', [
                'id' => $data['result']['id'],
                'name' => $data['result']['name'],
                'email' => $data['result']['email'],
                'phone' => $data['result']['phone']
                
            ]);

            return redirect()->back()->with('success', 'Vous êtes connecté.');
        } else {
            // Échec de la connexion
            return redirect()->back()->withErrors(['login_error' => $data['message'] ?? 'Une erreur est survenue.']);
        }
    }
}
