<!-- resources/views/projects/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Create New Project</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->name}}</td>
                    <td>{{ $project->description}}</td>
                    <td>
                        <a href="{{ route('projects.show', $project) }}" class="btn btn-info">View</a>
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('projects.destroy', $project) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection