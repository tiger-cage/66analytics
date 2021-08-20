<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserGoalController extends Controller
{
    public function index()
    {
        return view('layouts.goal.index');
    }
}
