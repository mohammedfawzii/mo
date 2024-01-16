@extends('layouts.dashboard')
@section('page-name', 'create project')
@section('title', 'create new project')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>create</strong><small> project</small></div>
            <div class="card-body card-block">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text"  required name="name" placeholder="Enter your company name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" required name="link" placeholder="link" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" required name="img" placeholder="img" class="form-control">
                    </div>
                    <select class="form-control" name="section" required>
                        <option @selected(true)>select section</option>

                            <option value="html&css">html&css</option>
                            <option value="js">js</option>
                            <option value="laravel">laravel</option>


                    </select>
                    <input class="btn btn-success mt-3" type="submit">
                </form>

            </div>
        </div>
    </div>

@endsection
