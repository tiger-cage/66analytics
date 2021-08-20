<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserLogController extends Controller
{
    public function index()
    {
        return view('admin.log.view');
    }
}
