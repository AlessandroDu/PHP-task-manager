<!-- resources/views/tasks/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks</h1>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">See All Projects</a>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>
    <table class="table">
        <thead>
            <tr>
                <th>Project</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->project->name}}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task) }}" class="btn btn-info">View</a>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection