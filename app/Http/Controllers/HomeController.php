<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function subjects(){
        $data['type'] = Subject::select('type')->distinct()->get();
//        echo $data['type'];
        $data['data'] = Subject::all();
        return view('front.subjects', $data);
    }

    public function addSubjects(Request $request){
        $data = [
          'subjectTitle' =>  $request['subject_name'],
          'type' =>  $request['type'],
          'languageMedium' =>  $request['language_medium'],
          'subjectCode' =>  $request['subject_code'],
          'url' =>  $request['url']
        ];
        $data['data'] = Subject::insert($data);
        return view('front.welcome');
    }
}
