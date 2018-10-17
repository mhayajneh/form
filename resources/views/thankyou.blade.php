@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row main">
            <div style="min-width: 400px;" class="main-login main-center">
               <h3> Thank you for submitting!</h3>

                <a href="{{route('welcomePage')}}" class="btn btn-outline-warning">Go back</a>
            </div>
        </div>
    </div>
@endsection
