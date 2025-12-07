@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center">
            <img src="{{ asset('assets/images/muid_image.jpg') }}" alt="Muid-ur-Rehman" class="img-fluid rounded-circle mb-4" style="width: 150px;">
            <h1>{{ $home['name'] }}</h1>
            <h2>{{ $home['title'] }}</h2>
            <p class="lead">{{ $home['tagline'] }}</p>
            <p>{{ $home['bio'] }}</p>
            <p>
                <a href="{{ $home['resume_link'] }}" class="btn btn-primary my-2">Resume</a>
                <a href="{{ $home['github_link'] }}" class="btn btn-secondary my-2">GitHub</a>
                <a href="{{ $home['linkedin_link'] }}" class="btn btn-secondary my-2">LinkedIn</a>
            </p>
        </div>
    </div>
@endsection
