<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard()
    {
        return view('dashboard');
    }

    public function defect_form_user()
    {
        return view('defect_form_user_laravel');
    }

    public function defect_form_admin()
    {
        return view('defect_form_admin_laravel');
    }

    public function defect_report()
    {
        return view('defect_report');
    }

    public function logistics()
    {
        return view('logistics');
    }

}
