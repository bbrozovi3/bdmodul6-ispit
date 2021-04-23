@extends('layouts.main')

@section('title', 'Registration')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div class="col d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card card-block align-self-center">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username">
        </div>
        <br>

        <div class="card card-block align-self-center">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter email">
            </div>
        <br>

        <div class="card card-block align-self-center">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
        </div>
        <br>

        <div class="card card-block align-self-center">
            <input type="submit" class="btn btn-primary" name="" value="Register" >
        </div>
        <br>

        <p>
            Already a member? <a href="{{ route('login') }}">Log In</a>
        </p>
    </div>
</div>
    </form>

@endsection