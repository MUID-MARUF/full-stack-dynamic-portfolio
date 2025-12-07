@extends('layouts.main')

@section('content')
    <div class="row" id="projects">
        <div class="col-lg-12">
            <h2 class="text-center mb-4">Projects</h2>
        </div>
    </div>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4">
                <div class="card project-card mb-4 shadow-sm">
                    <img src="{{ asset('assets/images/projects/' . $project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['title'] }}</h5>
                        <p class="card-text">{{ $project['stack'] }}</p>
                        <a href="{{ $project['github_link'] }}" target="_blank" class="btn btn-primary">GitHub</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
