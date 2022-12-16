<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required|string|max:255',
                'username' => 'required|string|max:10|unique:users',
                'email'    => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ],
            [
                'name.required'     => 'name is empty',
                'username.required' => 'username is empty',
                'email.required'    => 'email is empty',
                'password.required' => 'password is empty',
            ]
        );
        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => 'failed',
                    'message' => $validator->errors(),
                ]
            );
        } else {
            $user = User::create([
                'name'     => $request->name,
                'username' => $request->username,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);
            if ($user) {
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'status'       => 'success',
                    'access_token' => $token,
                    'message'      => 'registration success',
                ], 200);
            } else {
                return response()->json([
                    'status'  => 'failed',
                    'message' => 'registration failed',
                ], 401);
            }
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email'    => 'required',
                'password' => 'required',
            ],
            [
                'email.required'    => 'email is empty',
                'password.required' => 'password is empty',
            ]
        );
        if ($validator->fails()) {
            return response(
                [
                    'status'  => 'failed',
                    'message' => $validator->errors()->all(),
                ],
                422
            );
        }
        $user  = User::where('email', '=', $request->input('email'))->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('auth_token')->plainTextToken;
                $response = [
                    'status'       => 'success',
                    'message'      => 'login success',
                    'access_token' => $token,
                    'token_type'   => 'bearer',
                ];
                return response($response, 200);
            } else {
                $response = [
                    'stutus'  => 'failed',
                    'message' => 'incorrect password',
                ];
                return response($response, 422);
            }
        } else {
            $response = [
                'status'  => 'failed',
                'message' => 'wrong email or unregistered email'
            ];
            return response($response, 422);
        }
    }

    public function getprofile(Request $request)
    {
        return response()
            ->json([
                'status'  => 'success',
                'message' => 'data is succesfully display',
                auth()->user(),
            ]);;
    }

    public function update(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required|string|max:255',
                'password' => 'required|string|min:8',
            ],
            [
                'name.required'     => 'name is empty',
                'password.required' => 'password is empty'
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status'  => 'failed',
                'message' => $validator->errors(),
            ], 401);
        } else {
            $name           = $request->name;
            $user           = Auth::user();
            $user->name     = $name;
            $request->user()->fill([
                'password' => Hash::make($request->password),
            ])->save();
            $user->save();
            $valid = $user;
            if ($valid) {
                return response()->json([
                    'status'  => 'success',
                    'id'      => $valid->id,
                    'message' => 'update successfully',
                ], 200);
            } else {
                return response()->json([
                    'status'  => 'failed',
                    'message' => $validator->error(),
                ], 401);
            }
        }
        return "data is succesfully updated";
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'status'  => 'success',
            'message' => 'log out success'
        ];
    }
}
