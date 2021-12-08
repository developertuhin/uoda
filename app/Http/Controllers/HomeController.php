<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 

class HomeController extends Controller
{
    public function redirect()
    {
    	if (Auth::id()) 
        {
    		
    		if (Auth::user()->usertype=='0')
    		{
    			// Student
    			return view('Student.home');
    			
    		}

    		if (Auth::user()->usertype=='1')
    		{
    			// Admin
    			return view('Admin.home');
    		}

    	    if (Auth::user()->usertype=='2')

             {
    			// Teacher
    			return view('Teacher.home');
    		}

    		// else{
    		// 	return view('Teacher.home');
    		// }


    	}

    	else{
    		return redirect()->back();
    	}
    }



     public function index(){
        if (Auth::id()) {
            return redirect('home');
        }

        else{
        return view('Frontend.frontend');

        }
    }
}
