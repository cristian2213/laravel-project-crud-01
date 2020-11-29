@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">{{ strtoupper('new Project') }}</h1>
        <div class="row ">
            <div class="col-md-6 mx-auto">
                <form action="{{ route('project.store') }}" method="POST">
                    @csrf
                    @include('projects.partials._project_form', ['btn_text' => 'Create new project'])

                </form>
            </div>
        </div>
    </div>
@endsection
