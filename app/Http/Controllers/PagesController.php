<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home(){
    	$people = ['Islam', 'Dudaev', 'Wolf'];
    	return view('welcome', compact('people'));
    }

    public function about(){
    	return 'Page about';
    }
}
