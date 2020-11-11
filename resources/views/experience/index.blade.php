@extends('layouts.app')

@section('content')

<h2>Work Summary</h2>

@foreach($experiences as $e)

<div class="card">
    <div class="card-body">
        <h4 class="card-title"> {{$e->job_title}} ({{$e->start_date}} to {{$e->end_date}}) </h4>
<ul>
    <li>{{ $e->employer}}</li>
    <li>{{ $e->city}}</li>
    <li>{{ $e->state}}</li>

    </ul>

        <a name="" id="" class="btn btn-sm btn-primary" href= {{route('experience.edit', $e)}} role="button">Edit</a>
        {{-- <a name="" id="" class="btn btn-sm btn-danger" href="#" role="button">Delete</a> --}}

<form action="{{route('experience.destroy' , $e)}}" method="POST">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-sm btn-danger" style="display: inline">

</form>
        </div>

</div>

@endforeach
<a name="" id="" class="btn btn-primary mt-3" href= {{route('experience.create')}} role="button">Add Another Experience</a>
@endsection
