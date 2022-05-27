<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\orders;


class UserController extends Controller
{
    public function orders()
    {
        return view('users.orders');
    }

    public function uploadorders(Request $request)
    {
        $data = new orders;

        $data->title= $request->title;
        $data->words= $request->words;
        $data->date= $request->date;
        $data->subject= $request->subject;
        $data->report= $request->report;
        $data->instructions= $request->instructions;


        $file =  $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('documents', $filename);

        $data->file = $filename;

        $data->Save();

        return redirect()->back()->with('message','order placed successfully, please chat the admin for more');

    }

    public function dashboard()
    {
        return view('users.dashboard');
    }
}
