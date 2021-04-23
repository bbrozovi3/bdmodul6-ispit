@extends('layouts.main')

@section('title', 'Log in')

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

    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="col d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card card-block align-self-center">
                    <label>Email</label>
            <input type="email" name="email" placeholder="Enter email">
        </div><br>

        <div class="card card-block align-self-center">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
        </div><br>

        <div class="card card-block align-self-center">
            <input type="submit" class="btn btn-primary" name="" value="Log in" >
        </div><br>

        <p>
            Not a member? <a href="{{ route('register') }}">Register here</a>
        </p>
    </div>
</div>
    </form>
    
@endsection