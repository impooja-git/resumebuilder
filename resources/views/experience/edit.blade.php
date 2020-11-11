@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Edit Work Detail</h2>


<form action= "{{route('experience.update', $experience)}}" method='POST'>
    @csrf
    @method('PUT')
    <input type="text" name='job_title' placeholder='job title' value="{{$experience->job_title}}"><br><br>

    <input type="text" name='employer' placeholder='employer' value="{{$experience->employer}}"><br><br>


    <input type="text" name='city' placeholder='city' value="{{$experience->city}}"><br><br>
    <input type="text" name='state' placeholder='state' value="{{$experience->state}}"><br><br>
    <input type="date" name='start_date' placeholder='start_date' value="{{$experience->start_date}}" ><br><br>
    <input type="date" name='end_date' placeholder='end_date'  value="{{$experience->end_date}}"><br><br>



    {{-- <input type="submit"  value='submit'> --}}
    <button type="save" class="btn btn-primary">Save</button></button><br><br>
</form
</div>
@endsection
