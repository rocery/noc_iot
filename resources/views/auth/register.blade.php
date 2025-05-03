@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl mb-4">Register</h2>
        
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block mb-2">Name</label>
                <input type="text" name="name" class="w-full p-2 border rounded" value="{{ old('name') }}" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded" value="{{ old('email') }}" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full p-2 border rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Register</button>
        </form>
        <p class="mt-4">Already have an account? <a href="{{ route('login') }}" class="text-blue-500">Login</a></p>
    </div>
</div>
@endsection