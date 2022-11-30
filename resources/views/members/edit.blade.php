@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create Member') }} </div>

                <div class="card-body">
                  <form action="{{route('members.update', $member->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label>Name</label>
                    <input type="text" name="name" value="{{old('name', isset($member) ? $member->name : '')}}" class="form-control">
                    <label>Email</label>
                    <input type="email" name="email" value="{{old('email', isset($member) ? $member->email : '')}}" class="form-control">
                    <label>Region</label>
                    <select class="form-control" name="region" id="region">
                        <option selected value="{{$member->region_id}}">{{$member->region->name}}</option>  
                        @foreach($regions as $region)
                            <option value="{{$region->id}}">{{$region->name}}</option>  
                        @endforeach
                    </select>
                    <label>Country</label>
                    <select class="form-control" id="country" name="country">
                    <option selected value="{{$member->country_id}}">{{$member->country->name}}</option>  
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<script>
let region = document.getElementById('region');
let country = document.getElementById('country');
// country.length = 0;
// let countryOption = document.createElement('option');
// countryOption.text = 'Select Country ...';
// country.add(countryOption);
// country.selectedIndex = 0;
let url = '/getCountries/';
region.addEventListener('change', function(){
    fetch(url + region.value)
    .then((response) => response.json())
    .then((data) => {
        let option;
        data.forEach(element => {
            option = document.createElement('option');
            option.text = element.name;
            option.value = element.id;
            country.add(option);
            console.log(element.name)
        })
            
    });
});
</script>
@endsection
