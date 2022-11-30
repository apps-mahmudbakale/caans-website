@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create User') }} </div>

                <div class="card-body">
                  <form action="{{route('users.store')}}" method="POST">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
