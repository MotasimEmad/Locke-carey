<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'service_description' => 'required',
         ]);

         $service = new Service();
         $service->service_name = $request->service_name;
         $service->service_description = $request->service_description;
         if($request->hasfile('image')){
             $file = $request->file('image');
             $ext = $file->getClientOriginalExtension();
             $filename =  time().'.'.$ext;
             $file->move('uploads/services', $filename );
             $service->image = $filename;
         }else {
             return $request;
             $service->image = '';
         }
 
         $service->save();
         return redirect('admin/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required',
            'service_description' => 'required',
         ]);

         $service= Service::find($id);
         $service->service_name = $request->service_name;
         $service->service_description = $request->service_description;
         if($request->hasFile('image')){
            $file = $request->file('image');
            $destinationPath = public_path(). '/uploads/';
            $filename = $file->getClientOriginalName();
            $file->move('uploads/services', $filename);
 
           //then proceeded to save user
           $service-> images =           
           $destinationPath.$filename;
           }
 
         $service->save();
         return redirect('admin/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('admin/services');
    }
}
