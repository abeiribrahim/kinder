<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Appointment;
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // 
        $appointments=Appointment::get();
        return view('admin.appointment',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // مكنتش بتعمل ادخال للبيانات ونقلتها في كيندر كنترولر
      //  $data = $request->validate([
           // 'gname'=>'required|string|max:50',
           // 'gmail'=> 'required|string',
           // 'cname'=> 'required|string',
           // 'cage' => 'required|string',
           // 'message' => 'required|string',
        //    
         //  ]);
      //     Appointment::create($data);
     //  return redirect('');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointments = Appointment::findOrFail($id);
        return view ('admin.showappointment', compact('appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
