<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserVisitorsController extends Controller
{
    public function index()
    {
        return view('layouts.visitors.index');
    }
}
