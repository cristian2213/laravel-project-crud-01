@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center my-3 col-md-12">{{ strtoupper('Projects') }}</h1>

            <div class="col-md-12">
                <a href="{{ route('project.create') }}" class="btn btn-primary float-right">Create new project</a>
            </div>

            <div class="col-md-12">

                @if ($projects->all())

                    <ul>
                        @foreach ($projects as $project)
                            <div class="card my-3">
                                <div class="card-body">
                                    <h5 class="card-title">{{ strtoupper($project->title) }}</h5>
                                    <p class="card-text font-weight-bold text-muted">{{ $project->description }}</p>
                                    <a href="{{ route('project.show', $project) }}" class="btn btn-info text-white">Show
                                        Info</a>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                @else
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>There aren't</strong> Projects, You should create a project.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mx-5">
                {{ $projects->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection
