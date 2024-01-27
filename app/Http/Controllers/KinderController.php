<?php

namespace App\Http\Controllers;
use App\models\Contact;
use Mail;
use App\Mail\DemoMail;
use App\models\Testimonial;
use App\models\Appointment;
use App\models\kclass;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\models\Teacher;
use Illuminate\Http\Request;
use App\Traits\Common;
class KinderController extends Controller
{
    use Common;

     public function index(){
        $testimonials=Testimonial::get();
        $appointments=Appointment::get();
        $teachers= Teacher::get();
        $kclasses=Kclass::get();
        return view('kinder',compact('testimonials','appointments','teachers','kclasses'));
    }
    public function about(){
        return view('about',compact('about'));
    }
    public function testimonial(){
        $testimonials=Testimonial::get();
        return view('testimonial',compact('testimonials'));
    }

    public function appointment(){
        $appointments=Appointment::get();
        return view('appointment',compact('appointments'));
    }
    public function calltoaction(){
        return view('calltoaction');
    }
    public function classes(){
        $kclasses= Kclass::get();
        $teachers=Teacher::get();
        return view('classes',compact('kclasses','teachers'));
        
    }
  
    
   

    public function facility(){
        return view(' facility');
    
    }
    public function contact(){
        return view('contact');
    }
    public function sendemails (Request $content)
    {    
        $data = $content->validate([
            'from'=>'required|string|max:50',
            'email'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string',
            
           ]);
        Contact::create($data);
        Mail::to('abeir@gmail.com')->send(new DemoMail(
            $data));
         return view('contact');
         }

    public function team(){
        $teachers= Teacher::get();
        return view('team',compact('teachers'));
    }
  
    public function create()
    {
        return view('appointment');
       
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