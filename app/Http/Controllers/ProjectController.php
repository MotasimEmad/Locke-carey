<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\City;
use App\Models\Client;


class ProjectController extends Controller
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
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('admin.projects.create', compact('clients'));
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
            'image' => 'required',
            'project_name' => 'required',
            'client_id' => 'required',
            'type' => 'required',
            'city_name' => 'required',
         ]);

         $project = new Project();
         $project->project_name = $request->project_name;
         $project->client_id = $request->client_id;
         $project->type = $request->type;
         $project->city_name = $request->city_name;
         $project->location = $request->location;
         if($request->hasfile('image')){
             $file = $request->file('image');
             $ext = $file->getClientOriginalExtension();
             $filename =  time().'.'.$ext;
             $file->move('uploads/projects', $filename );
             $project->image = $filename;
         }else {
             return $request;
             $project->image = '';
         }
 
         $project->save();
         return redirect('admin/projects');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('admin/projects');
    }
}
