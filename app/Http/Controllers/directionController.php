<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Templates;
use excel\download;

class directionController extends Controller
{
    public static function index(){
        //////////////////////////////
        $name = 'Ya nichego ne ponimau';
        //////////////////////////////
        $faculty_id = 5;                          //после авторизации человека из дирекции последний аргумент должен вставить id дирекции
        $faculties = DB::table('faculty')
        -> where('id', '=', $faculty_id) -> get();        //после авторизации человека из дирекции последний аргумент должен вставить id дирекции
        $streams = DB::table('streams')
        -> orderBy('streams.name')
        -> get();
        $profiles = DB::table('profiles') -> get();
        $student_practic = DB::table('student_practic') -> get();
        $formEducation = ["Бакалавриат", "Магистратура"];
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

    public static function post(Request $request)
    {
        date_default_timezone_set('Asia/Irkutsk');
        if($request->input("download")){
            $id = $request->input("download");
            $templatesModel = new Templates;
            if(is_null($templatesModel->where('group_id', $id)->first())){
                $templatesModel->group_id = (string)$id;
                $templatesModel->name = 'Hz che tut dolzno bit';
                $templatesModel->decanat_check = 0;
                $templatesModel->comment = 'GOIDAAAA';
                $templatesModel->date = date("Y-m-d") ." ". date("H:i:s");
                $templatesModel->save();
                
                self::index();
            }
            else{
                $templatesCurrent = $templatesModel->where('group_id', $id);
                $templatesCurrent->update(['decanat_check' => 0, 'date' => date("Y-m-d") ." ". date("H:i:s")]);
                self::index();
            }
        }
    }
}


function Select_instituts()
{
    $resultset = DB::table('faculty')->where('id', 1)->get();
    return $resultset;
}
