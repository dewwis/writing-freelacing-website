<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Stroage;


class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function available()
    {
        $data=orders::all();
        return view('admin.available', compact('data'));
    }
    public function pending()
    {
        return view('admin.pending');
    }
    public function completed()
    {
        return view('admin.completed');
    }
    public function paid()
    {
        return view('admin.paid');
    }
    public function progress()
    {
        return view('admin.progress');
    }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('documents/'.$file));
    }
    public function orderview()
    {
        return view('admin.orderview');
    }

}
