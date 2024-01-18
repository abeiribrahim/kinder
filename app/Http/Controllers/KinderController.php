<?php

namespace App\Http\Controllers;
use App\models\Testimonial;
use App\models\Appointment;
use Illuminate\Http\Request;
use App\Traits\Common;
class KinderController extends Controller
{
    use Common;

     public function index(){
        $testimonials= Testimonial::get();
        return view('testimonial',compact('testimonials'));
    }
    public function about(){
        return view('about');
    }

    public function calltoaction(){
        return view('calltoaction');
    }
    public function classes(){
        return view('classes');
    }
    public function contact(){
        return view('contact');
    }
    public function facility(){
        return view(' facility');
    }
    public function team(){
        return view('team');
    }
    public function kinder(){
        $testimonials= Testimonial::get();
       // $appointments=Appointment::get();
        return view('kinder',compact('testimonials'));
    }
    public function create()
    {
        
       
    }
    public function store(Request $request)
    {
   
        $data = $request->validate([
            'gname'=>'required|string|max:50',
            'gmail'=> 'required|string',
            'cname'=> 'required|string',
            'cage' => 'required|string',
            'message' => 'required|string',
            
           ]);
           Appointment::create($data);
       return redirect('kinder');
}
}