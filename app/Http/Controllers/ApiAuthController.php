<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {

        $client = new Client();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // URL de l'API pour la connexion
        $apiUrl = 'https://api.dealtoo.co/api/login';

        // Effectuer la requête POST vers l'API
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



        dd($data);

        if ($response->successful()) {
            // La connexion a réussi
            $data = $response->json();

            // Authentifier l'utilisateur dans Laravel si nécessaire
            Auth::loginUsingId($data['user_id']);

            return response()->json(['success' => true]);
        } else {
            // La connexion a échoué
            return response()->json([
                'success' => false,
                'message' => $response->json('error', 'Erreur de connexion'),
            ]);
        }
    }
}
