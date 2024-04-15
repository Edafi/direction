<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class directionController extends Controller
{
    
    public function index(){
        //////////////////////////////
        $name = 'Ya nichego ne ponimau';
        //////////////////////////////
        $faculties = DB::table('faculty')
        -> where('id', '=', '5')        //после авторизации человека из дирекции последний аргумент должен вставить id дирекции
        -> get();
        $streams = DB::table('streams') 
        -> get();
        $profiles = DB::table('profiles') -> get();
        dump($faculties);
        return view('laravel', ['faculties' => $faculties, 'streams' => $streams, 'profiles' => $profiles]);
        //@if ($stream -> profile_id == $profile -> id) @if ($faculty -> id == $profile -> faculty_id)
    }
    /*
    public function downloadJson(){
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            // Add more data as needed
        ];

        $json = json_encode($data);

        return response($json)
            ->header('Content-Type', 'application/json')
            ->header('Content-Disposition', 'attachment; filename="data.json"');
        
    }
    */
}
