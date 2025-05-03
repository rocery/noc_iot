@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="max-w-xl mx-auto bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl mb-4">My Account</h2>
        
        <div class="mb-4">
            <strong>Name:</strong> {{ Auth::user()->name }}
        </div>
        <div class="mb-4">
            <strong>Email:</strong> {{ Auth::user()->email }}
        </div>
        
        <div class="mt-6">
            <h3 class="text-xl mb-2">Account Actions</h3>
            <div class="space-y-2">
                <a href="#" class="block bg-blue-500 text-white px-4 py-2 rounded">Edit Profile</a>
                <a href="#" class="block bg-red-500 text-white px-4 py-2 rounded">Change Password</a>
            </div>
        </div>
    </div>
</div>
@endsection