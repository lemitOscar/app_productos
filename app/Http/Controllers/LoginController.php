<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $token = $request->user()->createToken("MyApp");
            $response = [
                'displayName' => $user->name,
                'userId' => $user->id,
                'token' => $token->plainTextToken,
                'message' => "Acceso Concedido"
            ];

            return response()->json($response, 200);
        }else{
            $response = [
                'displayName' => '',
                'userId' => 0,
                'token' => '',
                'message' => "Usuario no Encontrado"
            ];

            return response()->json($response, 200);
        }
    }

    public function logout(Request $request){
        if(Auth::check()){
            $request->user()->currentAccessToken()->delete();
            return "OK";
        }
    }
}
