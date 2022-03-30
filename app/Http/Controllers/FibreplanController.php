<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fibre;
use App\Models\NewRegister;

class FibreplanController extends Controller
{
    public function index(){
        
        $fibreplans = Fibre::all();

return view('welcome', ['fibreplans' => $fibreplans]); 
    }

    public function apply(){
        
            return view('apply'); 
}

    public function store() {

        $NewRegister = new NewRegister();

        $NewRegister->name = request('name');
        $NewRegister->email = request('email');
        $NewRegister->location = request('location');
        $NewRegister->contact = request('contact');
        $NewRegister->package = request('package');
        $NewRegister->message = request('message');
        
        $NewRegister->save();

        return redirect('/fibre')-> with('mssg', "hi");
    }




}



