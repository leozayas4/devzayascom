@extends('layout')


@section('content')

    <h1>Edit: {{ $property->job_name }}</h1>

    <form method="post" action="/properties/{{ $property->id }}">
        @method('PATCH')
        @csrf
        
        <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="job_number">Job Number</label>

            <div class="">
                <input type="text" class="" name="job_number" placeholder="Job Number" value="{{ $property->job_number }}" disabled>
            </div>
        </div>

        <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="job_name">Job Name</label>

            <div class="">
                <input type="text" class="" style="width: 300px;" name="job_name" placeholder="" value="{{ $property->job_name }}">
            </div>
        </div>

        <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="address">Address</label>

            <div class="">
                <input type="text" class="" style="width: 300px;" name="address" placeholder="Address" value="{{ $property->address }}">
            </div>
        </div>

         <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="address2">City, State Zip Code</label>

            <div class="">
                <input type="text" class="" style="width: 300px;" name="address2" placeholder="City, State Zip Code" value="{{ $property->address2 }}">
            </div>
        </div>

       <div><button type="submit" style="margin-bottom: 20px;">Make Changes</button>
    </form>

    <form method="post" action="/properties/{{ $property->id }}">
        @method('DELETE')
        @csrf
        
        <button name="delete" type="submit">Delete Property</button>
        
        
        </form>

@endsection