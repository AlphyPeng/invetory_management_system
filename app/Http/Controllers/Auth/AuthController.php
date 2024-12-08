<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Throwable;

use App\Models\User;


class AuthController extends Controller
{
    public function registration(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required',
            'email' => 'required',
            'role' => 'required',
            'address' => 'required',
            'contact' => ['required', 'regex:/^(09|\+639)\d{9}$/'],
        ]);


        DB::beginTransaction();

        try {
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'middle_name' => $request->middle_name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'role' => $request->role,
                'address' => $request->address,
                'contact' => $request->contact,
            ]);

            DB::commit();

            return response()->json([
                'message' => 'Successfully Registered.',
                'data' => $user
            ], 201);
        } catch (Throwable $e) {
            DB::rollBack();

            Log::error($e->getMessage(), ['exception' => $e]);

            return response()->json([
                'message' => 'An error occurred during registration. Please try again later.',
            ], 500);
        }
    }
}
