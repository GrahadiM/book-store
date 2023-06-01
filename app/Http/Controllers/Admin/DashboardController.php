<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => ['index','list','show']]);
        $this->middleware('role:admin', ['only' => ['create','store']]);
        $this->middleware('role:admin', ['only' => ['edit','update']]);
        $this->middleware('role:admin', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('admin.index', $data);
    }
}
