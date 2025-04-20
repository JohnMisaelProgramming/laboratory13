@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded">
                <div class="card-body text-center">
                    <h1 class="mb-3">Welcome, {{ auth()->user()->name }}!</h1>
                    <p class="lead">You are logged in as <strong>{{ auth()->user()->email }}</strong></p>

                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
