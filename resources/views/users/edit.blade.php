@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create User') }} </div>

                <div class="card-body">
                  <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label>Name</label>
                    <input type="text" name="name" value="{{old('name', isset($user) ? $user->name : '')}}" class="form-control">
                    <label>Email</label>
                    <input type="email" name="email" value="{{old('email', isset($user) ? $user->email : '')}}" class="form-control">
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
