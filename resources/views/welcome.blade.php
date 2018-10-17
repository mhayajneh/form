@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row main">
            <div style="min-width: 400px;" class="main-login main-center">
                <form class="" method="post" action="{{route('storeSubmit')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Your Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name"  value="{{old('name')}}" placeholder="Enter your Name"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="carType" class="cols-sm-2 control-label">Car type</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="carType"  value="{{old('carType')}}" placeholder="Enter your car type"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dateOfBirth" class="cols-sm-2 control-label">Date of birth</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="date" class="form-control" name="dateOfBirth" value="{{old('dateOfBirth')}}"   placeholder="Enter your date of birth"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="major" class="cols-sm-2 control-label">Major</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="major" value="{{old('major')}}"   placeholder="Enter your major"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="number" class="cols-sm-2 control-label">Number</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="number" value="{{old('number')}}"   placeholder="Enter your number"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="cols-sm-2 control-label">Address</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="address" value="{{old('address')}}"  placeholder="Enter your address"/>
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <button  type="submit"  class="btn btn-primary btn-lg btn-block login-button">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
