<?php

namespace App\Http\Controllers;
use App\models\Testimonial;

use Illuminate\Http\Request;
use App\Traits\Common;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Common;
    public function index()
    {
        $testimonials= Testimonial::get();
        return view('admin.indextestimonial',compact('testimonials'));
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createtestimonial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'clientname'=>'required|string|max:50',
            'profession'=> 'required|string',
            'comment'=> 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
           ]);

           $fileName = $this->uploadFile($request->image, 'assets/img');    
       $data['image'] = $fileName;
       Testimonial::create($data);
       return redirect('admin/indextestimonial');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonials = Testimonial::findOrFail($id);
        return view ('admin.showtestimonial', compact('testimonials'));
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonials = Testimonial::findOrFail($id);
        
        return view('admin.updatetestimonial',compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'clientname'=>'required|string|max:50',
            'profession'=> 'required|string',
            'comment'=> 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            
           ]);

           if($request->hasFile('image')){
               $fileName = $this->uploadFile($request->image, 'assets/img');    
               $data['image'] = $fileName;
              
           }else{
               $data ['image']=$request->oldImage;
               //unlink("assets/images/" . $request->oldImage);
           }
            
           
           Testimonial::where('id', $id)->update($data);
               return redirect('admin/indextestimonial');
           }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Testimonial::where('id',$id)->delete();
        
        return redirect('admin/indextestimonial');
    }

public function trashed()
{
    $testimonials = Testimonial::onlyTrashed()->get();
    return view('admin.trashedtestimonials', compact('testimonials'));
}
public function forceDelete(string $id)
{
    Testimonial::where('id',$id)->forceDelete();
        
    return redirect('admin/indextestimonial');
}
public function restore(string $id)
{
    Testimonial::where('id',$id)->restore();
        
    return redirect('admin/indextestimonial');
}
}