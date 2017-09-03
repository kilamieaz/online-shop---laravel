<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Laratrust::hasRole('superadmin')) return $this->superAdminHome();
        if (Laratrust::hasRole('admin')) return $this->adminHome();
        if (Laratrust::hasRole('member')) return $this->memberHome();
    }

    public function superAdminHome()
    {
        $laratrust = Laratrust::all();
        return view('admin.index',compact('laratrust'));
    }

    public function AdminHome()
    {
        $laratrust = Laratrust::all();
        return view('admin.index', compact('laratrust'));
    }

    public function memberHome()
    {
        return view('front.home');
    }
}
