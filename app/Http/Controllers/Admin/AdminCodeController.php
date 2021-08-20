<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCodeController extends Controller
{
    public function index()
    {
        return view('admin.code.view');
    }
}
