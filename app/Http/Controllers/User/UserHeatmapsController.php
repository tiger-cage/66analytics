<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHeatmapsController extends Controller
{
    public function index()
    {
        return view('layouts.heatmap.index');
    }
}
