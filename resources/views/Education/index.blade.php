@extends('layouts.app')

@section('content')

<h2>Education Summary</h2>

@foreach($education as $e)

<div class="card">
    <div class="card-body">
        <h4 class="card-title"> {{$e->school_name}}  {{$e->degree}} {{$e->graduation_start_date}} {{$e->graduation_end_date}}</h4>
        <a name="" id="" class="btn btn-sm btn-primary" href= {{route('education.edit', $e)}} role="button">Edit</a>
        {{-- <a name="" id="" class="btn btn-sm btn-danger" href="#" role="button">Delete</a> --}}

<form action="{{route('education.destroy' , $e)}}" method="POST">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-sm btn-danger" style="display: inline">

</form>
        </div>

</div>

@endforeach
<a name="" id="" class="btn btn-primary mt-3" href= {{route('education.create')}} role="button">Add Another Education</a>
<a name="" id="" class="btn btn-primary mt-3" href= {{route('experience.index')}} role="button">Work History</a>

@endsection
