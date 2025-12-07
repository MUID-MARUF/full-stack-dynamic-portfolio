@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mb-4">About Me</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h4>Background</h4>
            <p>{{ $about['background'] }}</p>

            <h4>Skills</h4>
            <div class="row">
                <div class="col-md-6">
                    <h5>Technical Skills</h5>
                    <ul>
                        @foreach ($about['skills']['technical'] as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Soft Skills</h5>
                    <ul>
                        @foreach ($about['skills']['soft'] as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <h4>Tools & Technologies</h4>
            <ul>
                @foreach ($about['tools'] as $tool)
                    <li>{{ $tool }}</li>
                @endforeach
            </ul>

            <h4>What I'm Currently Learning</h4>
            <ul>
                @foreach ($about['learning'] as $learning)
                    <li>{{ $learning }}</li>
                @endforeach
            </ul>

            <h4>Career Goals</h4>
            <p>{{ $about['goals'] }}</p>
        </div>
    </div>
@endsection
