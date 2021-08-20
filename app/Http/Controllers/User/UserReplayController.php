<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserReplayController extends Controller
{
    public function index()
    {
        return view('layouts.replay.index');
    }
}
