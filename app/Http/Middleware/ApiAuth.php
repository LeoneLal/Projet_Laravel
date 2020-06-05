<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//Our middleware will be actived when we going to access at page of the API
//Here we try to get the api_token of the user, 
//if he has one we go to the next request, if not we send an error message in Json
        $user = User::where('api_token', $request->api_token)->first();
        if(!is_null($user)){
            return $next($request);
        }
      
        return response()->json([
        'Etat' => "Erreur vous n'avez pas de token"
        ]);
    }
}
