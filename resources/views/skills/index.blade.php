@extends('layouts.app')

@section('content')

<h2>Skill Summary</h2>

@foreach($skills as $e)

<div class="card">
    <div class="card-body">
        <h4 class="card-title"> {{$e->name}} ({{$e->rating}}) </h4>

        <a name="" id="" class="btn btn-sm btn-primary" href= {{route('skill.edit', $e)}} role="button">Edit</a>
        {{-- <a name="" id="" class="btn btn-sm btn-danger" href="#" role="button">Delete</a> --}}

<form action="{{route('skill.destroy' , $e)}}" method="POST">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-sm btn-danger" style="display: inline">

</form>
        </div>

</div>

@endforeach
<a name="" id="" class="btn btn-primary mt-3" href= {{route('skill.create')}} role="button">Add Another Skill</a>
{{-- <a name="" id="" class="btn btn-primary mt-3 ml-auto" href= {{route('skill.index')}} role="button">Skill</a> --}}

@endsection
