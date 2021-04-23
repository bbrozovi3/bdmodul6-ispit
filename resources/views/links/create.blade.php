@extends('layouts.main')

@section('title', 'Your YouTube links')

@section('content')

    <form method="post" action="{{ route('links.store') }}">
        @csrf

        <div class="d-flex justify-content-center">
        <div class="form-group w-25">
            <label>Enter your links</label>
            <br>
            <br>
            <textarea name="title" rows="5" class="form-control"></textarea>
        </div>
    </div>
        <br>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add link" >
        </div>
        <br>

    </form>
    
@endsection