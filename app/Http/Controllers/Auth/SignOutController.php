<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignOutController extends Controller
{
    //


    public function __invoke()
    {
        $this->auth()->logout();
        return response()->json(['success' => 'Logged out']);
    }
}
