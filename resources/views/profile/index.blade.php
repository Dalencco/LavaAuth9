@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <h1 class="text-center text-3xl mt-24">Welcome to your profile {{$user->name}}({{$user->id}})</h1>
@endsection