@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
      <div class="bg-white p-5 rounded-lg w-4/12">
        <form action="{{ route('register') }}" method="post">
          @csrf
          <div class="mb-4">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" id="name" class="bg-gray-100 border-2 w-full rounded-lg p-4 @error('name') border-red-500 @enderror " placeholder="Your Name" value="">
            @error('name')
              <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-4">
            <label for="name" class="sr-only">Username</label>
            <input type="text" name="username" id="username" class="bg-gray-100 border-2 w-full rounded-lg p-4 @error('username') border-red-500 @enderror" placeholder="Your Username" value="">
            @error('username')
              <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full rounded-lg p-4 @error('email') border-red-500" @enderror placeholder="Your Email" value="">
            @error('email')
              <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-4">
            <label for="email" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full rounded-lg p-4 @error('password') border-red-500 @enderror" placeholder="Password" value="">
            @error('password')
              <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-4">
            <label for="email" class="sr-only">Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 border-2 w-full rounded-lg p-4" placeholder="Confirm Your Password" value="">
            @error('password_confirmation')
              <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
          </div>
  
          <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
          </div>
        </form>
      </div>
    </div>
@endsection