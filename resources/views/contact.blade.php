@extends('layouts.main')

@section('content')
    <div class="row" id="contact">
        <div class="col-lg-8 offset-lg-2 text-center">
            <h2 class="text-center mb-4">Contact</h2>
            <p>
                <a href="mailto:{{ $contact['email'] }}" class="btn btn-primary my-2">Email</a>
                <a href="{{ $contact['linkedin'] }}" class="btn btn-secondary my-2">LinkedIn</a>
                <a href="{{ $contact['github'] }}" class="btn btn-secondary my-2">GitHub</a>
                <a href="{{ $contact['website'] }}" class="btn btn-secondary my-2">Personal Website</a>
            </p>
            <p class="lead mt-4">{{ $contact['closing_note'] }}</p>
        </div>
    </div>
@endsection
