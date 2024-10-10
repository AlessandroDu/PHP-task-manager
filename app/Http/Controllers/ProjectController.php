<?php

namespace App\Http\Controllers;

use App\Models\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id', auth()->id())->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['user_id'] = auth()->id();

        Project::create($validated);

        return redirect()->route('projects.index');
    }

    public function show(Project $project)
    {
        // Laravel will automatically load the tasks associated with the project
        $tasks = $project->tasks;

        /*
        // Eager load tasks with the project
        $project = Project::with('tasks')->findOrFail($project->id);
        */
        return view('projects.show', compact('project', 'tasks'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact($project));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $project->update($validated);

        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
