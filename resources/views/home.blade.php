@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Submits</div>

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Major</th>
                        <th>Date of birth</th>
                        <th>Car type</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($submits AS $submit)
                    <tr>
                        <td>{{$submit->name}}</td>
                        <td>{{$submit->email}}</td>
                        <td>{{$submit->number}}</td>
                        <td>{{$submit->address}}</td>
                        <td>{{$submit->major}}</td>
                        <td>{{$submit->dob}}</td>
                        <td>{{$submit->carType}}</td>
                    </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Major</th>
                        <th>Date of birth</th>
                        <th>Car type</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
