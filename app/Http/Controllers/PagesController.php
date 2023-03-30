<?php

//Control the views of different links

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //methods (function inside class)
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function defect_form_user()
    {
        return view('pages.defect_form_user');
    }

    public function defect_form_admin()
    {
        return view('pages.defect_form_admin');
    }

    public function defect_form_admin_laravel()
    {
        return view('pages.defect_form_admin_laravel');
    }

    public function defect_form_user_laravel()
    {
        return view('pages.defect_form_user_laravel');
    }

    public function defect_report()
    {
        return view('pages.defect_report');
    }

    public function logistics()
    {
        return view('pages.logistics');
    }

    public function logistics_indv()
    {
        return view('pages.logistics_indv');
    }
    public function logistics_add()
    {
        return view('pages.logistics_add');
    }
}
