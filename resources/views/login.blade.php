@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form method="POST" action="login">
                    <div class="form-group">
                        @csrf
                        <label for="exempleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exempleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exempleInputPassword1">password</label>
                        <input type="password" name="password" class="form-control" id="exempleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">login</button>
                </form>
            </div>
        </div>
    </div>


@endsection