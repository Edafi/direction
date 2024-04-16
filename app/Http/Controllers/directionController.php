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
        -> where('id', '=', '5') -> get();        //после авторизации человека из дирекции последний аргумент должен вставить id дирекции
        $streams = DB::table('streams')
        -> orderBy('streams.name')
        -> get();
        dump($streams);
        $profiles = DB::table('profiles') -> get();
        $student_practic = DB::table('student_practic') -> get();

        $formEducation = ["Бакалавриат", "Магистратура"];
        /*$formRusArr = [];
        $formRus = "";
        foreach($formEducation as $form){
            switch ($form) {
                case "Bakalavr":
                    $formRus = "Бакалавриат";
                    break;
                case "Magis":
                    $formRus = "Магистратура";
                    break;
                case "Zaoch":
                    $formRus = "Заочное обучение";
                    break;
            }
        $formRusArr[] = $formRus; 
        }
        */
        $groups = DB::table('groups') -> get();
        $templates = DB::table('templates')->get();
        $students = DB::table('students')->get();
        $teacher_score = DB::table('teacher_score')->get();
        $teachers = DB::table('teachers')->get();
        $companies = DB::table('companies')->get();
        return view('laravel', ['faculties' => $faculties, 'streams' => $streams, 'profiles' => $profiles, 'formEducation' => $formEducation,
        /*'formRus' => $formRusArr,*/ 'groups' => $groups, 'templates' => $templates, 'student_practic' => $student_practic, 'students' => $students, 'teacher_score' => $teacher_score,
        'teachers' => $teachers, 'companies' => $companies]);
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


function Select_instituts()
{
    $resultset = DB::table('faculty')->where('id', 1)->get();
    return $resultset;
}