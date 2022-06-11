@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white p-5 rounded-lg w-4/12">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-100 border-2 w-full rounded-lg p-4 @error('email') border-red-500" @enderror placeholder="
                        Your Email" value="">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Password</label>
                    <input type="password" name="password" id="password"
                        class="bg-gray-100 border-2 w-full rounded-lg p-4 @error('password') border-red-500 @enderror"
                        placeholder="Password" value="">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-4">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Log
                        In</button>
                </div>
            </form>
        </div>
    </div>
@endsection
