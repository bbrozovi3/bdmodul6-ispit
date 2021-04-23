@extends('layouts.main')

@section('title', 'Your links')

@section('content')

<form action="{{ route('links.update', ['link' => $link->id]) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label>Link address</label>
            <br>
            <br>
            <input type="text" name="title">
        </div>
            <br>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Edit Link" >
        </div>
            <br>

    </form>
    
@endsection