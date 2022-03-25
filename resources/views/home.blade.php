@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-center text-4xl mt-24">Hi, This is Home</h1>

    @if (auth()->check())
        <h1 class="text-center text-2xl mt-14">Logged</h1>
    @else
    <h1 class="text-center text-2xl mt-14">Not Logged</h1>
    @endif
@endsection