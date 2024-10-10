<!-- resources/views/projects/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Project</h1>
    <form action="{{ route('projects.update', $project) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $project->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
</div>
@endsection