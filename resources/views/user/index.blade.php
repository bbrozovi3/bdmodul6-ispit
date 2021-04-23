@extends('layouts.main')

@section('title', 'Profil')

@section('content')

    <p>
        Welcome {{ Auth::user()->username }} !
    </p>

    <p>
        This is your dashboard
    </p>

    <p>
        <a href="{{ route('links.index') }}">View links</a>
    </p>
    
@endsection