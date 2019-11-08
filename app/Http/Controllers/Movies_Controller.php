<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Movies_Controller extends Controller
{
    public function index()
    {
        if(request()-> has('cinema_id')){
        	return DB::table('movies')
        	->where('cinema_id', request()-> cinema_id)
        	->get();
        }
     $movies = DB::table('movies')->get();
     return $movies;
    }
}
