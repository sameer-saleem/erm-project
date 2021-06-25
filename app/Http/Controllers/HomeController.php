<?php

namespace App\Http\Controllers;
use App\Models\Score;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['test'];
        $flight = Score::all();

        return view('home', ['data' => $flight] );
    }

    public function add(){

        return view('addscore');
    }
    
    public function addscore(){
        die();
        print_r('s');
        // $request = Request::all();
        // Score::create([
        //     'date' => $request['date'],
        //     'vendor' => $request['email'],
        //     'services' => $request['services'],
        //     'assessor' => $request['assessor'],
        //     'question1_1' => $request['quality'],
        //     'question1_2' => $request['quantity'],
        //     'question1_3' => $request['results'],
        //     'question2_1' => $request['appropriate'],
        //     'question2_2' => $request['process'],
        //     'question3_1' => $request['readiness'],
        //     'question3_2' => $request['time-frame'],
        //     'result' => $request['total'],
        // ]);
        // return redirect(route('/'));
    }
}

