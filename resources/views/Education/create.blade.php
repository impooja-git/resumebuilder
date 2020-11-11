@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Education Details</h2>

<form action="/education" method='POST'>
    @csrf
    <input type="text" name='school_name' placeholder='schoolname'><br><br>

    <input type="text" name='school_location' placeholder='location'><br><br>


    <input type="text" name='degree' placeholder='degree'><br><br>
    <input type="text" name='field_of_study' placeholder='faculty'><br><br>
    <input type="date" name='graduation_start_date' placeholder='graduation_start_date'><br><br>
    <input type="date" name='graduation_end_date' placeholder='graduation_end_date'><br><br>



    {{-- <input type="submit"  value='submit'> --}}
    <button type="submit" class="btn btn-primary">Submit</button></button><br><br>
</form
</div>
@endsection
