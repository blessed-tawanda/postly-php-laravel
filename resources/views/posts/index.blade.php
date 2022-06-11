@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white p-6 rounded-lg w-8/12">

            {{-- @auth --}}
            <form action="{{ route('posts') }}" method="post" mb-4>
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4"
                        class="bg-gray-100 @error('body') border-red-500 @enderror border-2 w-full p-4 rounded-lg"
                        placeholder="Post something!"></textarea>
                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Post</button>
                </div>
            </form>
            {{-- @endauth --}}


            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                {{-- {{ $posts->links() }} --}}
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection
