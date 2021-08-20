<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPluginController extends Controller
{
    public function index()
    {
        return view('admin.plugin.view');
    }
}
