<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

/**
 * Summary of HomeController
 */
class HomeController extends Controller
{
 
    public function home ()
    
    {
              
        return view('home.index');
        
    }   

<<<<<<< HEAD
    
=======
    public function keyofficers ()
    
    {
              
        return view('home.key-officers');
        
    }   

>>>>>>> 6ba277fbd871dff7fdf6471def08f9561ceeff9c
    public function store(Request $request)
    {  

		dd($request);
		
    	if($request->ajax())
    	{
			

    		if($request->type == 'add')
    		{
    			$event = Event::create([
    				'title'	=>	$request->title,
    				'start'	=>	$request->start,
    				'end'	=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		
    	}
    }
}
