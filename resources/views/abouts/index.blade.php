@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Me</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('abouts.edit') }}"> Edit</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $about->content ?? '' }}
            </div>
        </div>
    </div>
@endsection
