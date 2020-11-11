@extends('layouts.app')
@section('content')
<div class="container">
    <h2>To Know Something About You</h2>

<form action="/user-detail" method='POST'>
    @csrf
    <input type="text" name='fullname' placeholder='fullname'><br><br>

    <input type="text" name='email' placeholder='email'><br><br>


    <input type="text" name='phone' placeholder='phone'><br><br>


    <input type="text" name='address' placeholder='address'><br><br>
    {{-- <input type="submit"  value='submit'> --}}
    <br>
     <textarea name="summary" id="" cols="30" rows="4"></textarea>

    <button type="submit" class="btn btn-primary">Submit</button></button><br><br>


</form
</div>
@endsection
