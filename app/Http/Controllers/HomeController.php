<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepages.home');
    }


    public function about()
    {
        return view('homepages.about');
    }

    public function services()
    {
        return view('homepages.services');
    }

    public function contact()
    {
        return view('homepages.contact');
    }

    public function teams()
    {
        return view('homepages.teams');
    }

    public function features()
    {
        return view('homepages.features');
    }

    public function projects()
    {
        return view('homepages.features');
    }

    public function reviews()
    {
        return view('homepages.reviews');
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('users.dashboard');
        }

    }
}
