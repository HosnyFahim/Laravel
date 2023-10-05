@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center align-center pt-8">
        <h1>COMPUTERS</h1>
    </div>

    <div class="mt-8">
        <h3>{{ $computer['name'] }} is from <strong>{{ $computer['origin'] }}</strong> </h3>
        <a class="show-link" href="{{ route('computers.index') }}">back to Computers</a>
    </div>
</div>
@endsection

@section('title', 'computers')