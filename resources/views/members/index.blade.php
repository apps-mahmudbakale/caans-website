@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Members') }} <a href="{{route('members.create')}}" class="btn btn-sm btn-primary float-end">Create Member</a></div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                  <table class="table table-striped">
                    <thead>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Region</th>
                        <th>Country</th>
                        <th>Date Created</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$member->name}}</td>
                                <td>{{$member->email}}</td>
                                <td>{{$member->region->name}}</td>
                                <td>{{$member->country->name}}</td>
                                <td>{{$member->created_at}}</td>
                                <td class="btn-group"> 
                                    <a href="{{route('members.edit', $member->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
