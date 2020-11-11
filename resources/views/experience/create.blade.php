@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Work Details</h2>



<form action="/experience" method='POST'>
    @csrf
    <input type="text" name='job_title' placeholder='Job Title'><br><br>

    <input type="text" name='employer' placeholder='Employer'><br><br>


    <input type="text" name='city' placeholder='city'><br><br>
    <input type="text" name='state' placeholder='state'><br><br>
    <input type="date" name='start_date' placeholder='start_date'><br><br>
    <input type="date" name='end_date' placeholder='end_date'><br><br>



    {{-- <input type="submit"  value='submit'> --}}
    <button type="save" class="btn btn-primary">Save</button></button><br><br>
</form>
</div>
@endsection
