@extends('layouts.app')
@section('content')
<div class="cointainer">

    <h2>Welcome to resumebuilder</h2>

    {{-- <button class="btn-btn-primary">Build now</button> --}}

{{-- <button type="button" class="btn btn-primary">Build now</button> --}}
<a name="" id="" class="btn btn-primary" href="{{route('user-detail.create')}}" role="button">Build now</a>
</div>


@endsection
