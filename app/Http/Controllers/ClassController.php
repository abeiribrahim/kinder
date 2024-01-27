<?php

namespace App\Http\Controllers;
use App\models\kclass;
use App\models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Common;

class ClassController extends Controller
{ 
     use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kclasses= Kclass::get();
        $teachers=Teacher::get();
        return view('admin.indexclass',compact('kclasses','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers=Teacher::get();
     
        return view('admin.createclass', compact('teachers'));
        $messages = $this->messages();
        return view('admin.createclass');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();

        $data = $request->validate([
            'teacherId'=>'required',
            'kcname'=>'required|string',
            'age'=>'required|string|max:50',
            'time'=>'required|string|max:50',
            'capacity'=>'required|string|max:50',
            'price'=>'required|string|max:50',
            'class_image'=>'required|mimes:png,jpg,jpeg|max:2048',
           
            ], $messages);

        $fileName = $this->uploadFile($request->class_image,'assets/img');    
        $data['class_image'] = $fileName;
        $data['active'] = isset($request->active);
        Kclass::create($data);
        return redirect('admin/indexclass');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kclasses = Kclass::findOrFail($id);
        return view ('admin.showclass', compact('kclasses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kclasses =kclass::findOrFail($id);
        $teachers=Teacher::get();
        return view ('admin.updateclass', compact('kclasses','teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();

        $data = $request->validate([
            'teacherId'=>'required',
            'kcname'=>'required|string',
            'age'=>'required|string|max:50',
            'time'=>'required|string|max:50',
            'capacity'=>'required|string|max:50',
            'price'=>'required|string|max:50',
            'class_image'=>'required|mimes:png,jpg,jpeg|max:2048',
           
            ], $messages);
            if($request->hasFile('class_image')){
                $fileName = $this->uploadFile($request->class_image, 'assets/img');    
                $data['class_image'] = $fileName;
               
            }else{
                $data ['class_image']=$request->oldImage;
                //unlink("assets/images/" . $request->oldImage);
            }

        $data['active'] = isset($request->active);
        kclass::where('id', $id)->update($data);
        return redirect('admin/indexclass');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kclass::where('id',$id)->delete();
        
        return redirect('admin/indexclass');
    }
    public function messages()
    {
    return [
        'title.required'=>'العنوان مطلوب',
        'title.string'=>'Should be string',
        'description.required'=> 'should be text',
        'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
        ];
    }
}
