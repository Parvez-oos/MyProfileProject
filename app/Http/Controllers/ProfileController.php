<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donald Trump";
        $age = "75";

        // Create associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Define cookie parameters
        $cookie = cookie(
            'access_token',
            '123-XYZ',
            1, // Expiry in minutes
            '/',
            $_SERVER['SERVER_NAME'], // Domain
            false, // Secure
            true // HttpOnly
        );

        // Pass data to view
        return view('profile', compact('data'))->withCookie($cookie);
    }
}


