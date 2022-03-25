@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1 class="text-center text-4xl mt-24">Welcome to Register Section</h1>

    <div class="mt-7 flex justify-center rounded-md">
        <div class="w-82 h-96">
            <form class="shadow-md flex flex-col space-y-7 p-10" action="{{ route('register.store') }}" method="post">
                @csrf
    
                <input class="border rounded-md border-gray-500 py-2 px-7" type="email" name="name" placeholder="Username">
                @error('name')
                    <p class="border rounded-md border-red-600 bg-red-400 text-white text-center py-2 py-4">{{$message}}</p>
                @enderror
                <input class="border rounded-md border-gray-500 py-2 px-7" type="text" name="email" placeholder="Email">
                @error('email')
                    <p class="border rounded-md border-red-600 bg-red-400 text-white text-center py-2 py-4">{{$message}}</p>
                @enderror
                <input class="border rounded-md border-gray-500 py-2 px-7" type="password" name="password" placeholder="Password">
                @error('password')
                    <p class="border rounded-md border-red-600 bg-red-400 text-white text-center py-2 py-4">{{$message}}</p>
                @enderror
                <button class="border rounded-md border-gray-500 py-2 px-7" type="submit">Register</button>
            </form>
        </div>
    </div>
@endsection