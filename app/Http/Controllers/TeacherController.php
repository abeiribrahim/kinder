<?php

namespace App\Http\Controllers;
use App\models\Teacher;
use Illuminate\Http\Request;
use App\Traits\Common;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Common;
    public function index()
    {
        $teachers= Teacher::get();
        return view('admin.indexteacher',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createteacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'occupation'=>'required|string|max:50',
            'tname'=> 'required|string',
            'facebook'=> 'required|string',
            'twiter'=> 'required|string',
            'instagram'=> 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
           ]);
           $data['active'] = isset($request->active);
           $fileName = $this->uploadFile($request->image, 'assets/img');    
       $data['image'] = $fileName;
       Teacher::create($data);
       return redirect('admin/indexteacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        return view ('admin.showteacher', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        
        return view('admin.updateteacher',compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'occupation'=>'required|string|max:50',
            'tname'=> 'required|string',
            'facebook'=> 'required|string',
            'twiter'=> 'required|string',
            'instagram'=> 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
           ]);
           $data['active'] = isset($request->active);
           if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/img');    
            $data['image'] = $fileName;
           
        }else{
            $data ['image']=$request->oldImage;
            //unlink("assets/images/" . $request->oldImage);
        }
         
        
        Teacher::where('id', $id)->update($data);
            return redirect('admin/indexteacher');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
