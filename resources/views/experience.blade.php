@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mb-4">Experience</h2>
        </div>
        @foreach ($experience as $exp)
            <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $exp['title'] }} at {{ $exp['company'] }}</h5>
                        <p class="card-text text-muted">{{ $exp['duration'] }}</p>
                        <p class="card-text">{{ $exp['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <hr class="my-5">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center mb-4">Achievements</h2>
        </div>
        @foreach ($achievements as $ach)
            <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $ach['title'] }}</h5>
                        <p class="card-text text-muted">{{ $ach['date'] }}</p>
                        <p class="card-text">{{ $ach['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
