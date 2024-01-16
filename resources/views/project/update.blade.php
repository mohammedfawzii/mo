@extends('layouts.dashboard')
@section('page-name', 'edit project')
@section('title', 'edit project')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong>edit</strong><small> project</small></div>
        <div class="card-body card-block">
            <form action="{{ route('projects.update' ,$project->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" required name="name" value="{{ $project->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" required name="link" value="{{ $project->link }}" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="img" value="{{ $project->img }}" class="form-control">
                    <img style="width: 100px" src="{{ $project->img}}" alt="null">
                </div>
                <select class="form-control" name="section" required>
                    <option value="html&css">html&css</option>
                    <option value="js">js</option>
                    <option value="laravel">laravel</option>
                </select>
                <input class="btn btn-success mt-3" type="submit" value="update">
            </form>
        </div>
    </div>
</div>

@endsection
