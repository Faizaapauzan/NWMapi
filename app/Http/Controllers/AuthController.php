<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffRegister;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Login The StaffRegister
     * @param Request $request
     * @return StaffRegister
     */
    public function login(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), 
            [
                'username' => 'required',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
          
            $user = StaffRegister::where('username', $request->username)->first();
      
              if(!$user || !Hash::check($request['password'], $user->password)) {
                return response([
                    'message' => 'Username & Password does not match'
                ], 401);
        }
    
             return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'user' => $user,
                'token' => $user->createToken("remember_token")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function logout(Request $request){

        Auth::user()->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Logged out'
        ], 200);
    }
}