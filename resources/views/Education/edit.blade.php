@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Education Details</h2>

<form action= "{{route('education.update', $education)}}" method='POST'>
    @csrf
    @method('PUT')
    <input type="text" name='school_name' placeholder='schoolname' value="{{$education->school_name}}"><br><br>

    <input type="text" name='school_location' placeholder='location' value="{{$education->school_location}}"><br><br>


    <input type="text" name='degree' placeholder='degree' value="{{$education->degree}}"><br><br>
    <input type="text" name='field_of_study' placeholder='faculty' value="{{$education->faculty}}"><br><br>
    <input type="date" name='graduation_start_date' placeholder='graduation_start_date' value="{{$education->graduation_start_date}}" ><br><br>
    <input type="date" name='graduation_end_date' placeholder='graduation_end_date'  value="{{$education->graduation_end_date}}"><br><br>



    {{-- <input type="submit"  value='submit'> --}}
    <button type="submit" class="btn btn-primary">Submit</button></button><br><br>
</form
</div>
@endsection
