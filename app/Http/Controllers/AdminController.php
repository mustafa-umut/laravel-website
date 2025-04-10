<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Destination;


class AdminController extends Controller
{
    public function dashboard()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            if($usertype == 'admin')
            {
                return view('admin.index');
            }
            else
            {
                $destination = Destination::inRandomOrder()->limit(3)->get();
                return view('home.homepage', compact('destination'));
            }       
        }
        else
        {
            $destination = Destination::inRandomOrder()->limit(3)->get();
            return view('home.homepage', compact('destination'));

        }
    }
    public function index()
    {
        $destination = Destination::inRandomOrder()->limit(3)->get();
         return view('home.homepage', compact('destination'));
       
    }

    public function homepage()
    {
        $destination = Destination::inRandomOrder()->limit(3)->get();
        return view('home.homepage', compact('destination'));

    }
    public function detail($id)
    {
        $destination= Destination::find($id); 
        return view('home.detail',compact('destination'));
    }
    public function about()
    {
        return view('home.about');
    }
    public function all_destinations()
    {
        $destination= Destination::all();
        return view('home.all_destinations', compact('destination'));
    }
}
