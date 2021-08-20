<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserWebsiteController extends Controller
{
    public function index()
    {
        return view('layouts.website.index');
    }
}
