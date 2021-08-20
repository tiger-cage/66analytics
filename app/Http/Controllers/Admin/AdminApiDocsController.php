<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminApiDocsController extends Controller
{
    public function index()
    {
        return view('admin.api.view');
    }
}
