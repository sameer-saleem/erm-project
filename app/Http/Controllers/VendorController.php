<?php

namespace App\Http\Controllers;
use App\Models\Vendor;
use Illuminate\Support\Facades\Request;



class VendorController extends Controller
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
        $flight = Vendor::all();

        return view('vendor', ['data' => $flight] );
    }
    public function add(){

        return view('addscore');
    }
    
    public function addvendor(){
        
        $request = Request::all();
        

        Vendor::create([
            'user_id' => 1,
            'date' => $request['date'],
            'vendor' => $request['vendor'],
            'services' => $request['services'],
            'assessor' => $request['assessor'],
            'question1_1' => $request['question1_1'],
            'quesion1_1_comment' => $request['quesion1_1_comment'],
            'question1_2' => $request['question1_2'],
            'question1_2_comment' => $request['question1_2_comment'],
            'question1_3' => $request['question1_3'],
            'question1_3_comment' => $request['question1_3_comment'],
            'question2_1' => $request['question2_1'],
            'question2_1_comment' => $request['question2_1_comment'],
            'question2_2' => $request['question2_2'],
            'question2_2_comment' => $request['question2_2_comment'],
            'question3_1' => $request['question3_1'],
            'question3_1_comment' => $request['question3_1_comment'],
            'question3_2' => $request['question3_2'],
            'question3_2_comment' => $request['question3_2_comment'],
            'total' => $request['total'],
        ]);

        return redirect(route('vendor'));
    }

}

