<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    
        $project = Project::all();
        return view('project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $filename = '';
        if ($request->hasFile('img')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/web/img/' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('/assets/web/img/'), $filename);
        }
        Project::create(
            [
                'name' => $request->name,
                'link' => $request->link,
                'type' => $request->type,
                'section' => $request->section,
                'img' => $filename,

            ]
        );
        return redirect()->route('projects.index')->with('message', 'section created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::findorFail($id);
        return view('project.update', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */

public function update(Request $request, $id)
{
    // dd($request->all());
    $project = Project::findorFail($id);

    $filename = '';
    if ($request->hasFile('img')) {
        $filename = $request->getSchemeAndHttpHost() . '/assets/web/img/' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('/assets/web/img/'), $filename);
    }

    $project->update([
        'name' => $request->name,
        'link' => $request->link,
        'type' => $request->type,
        'section' => $request->section,
        'img' => $filename,
    ]);

    return redirect()->route('projects.index')->with('message', 'section created');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->route('projects.index')->with('message', 'section deleted');
    }
}
