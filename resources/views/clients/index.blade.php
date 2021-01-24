@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            CLIENTS
            <form action="{{route('clients')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name"
                           class="bg-gray-100 border-200 w-full p-4 rounded-lg " value="{{ old('name') }}">
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">username</label>
                    <input type="text" name="username" id="username" placeholder="Username"
                           class="bg-gray-100 border-200 w-full p-4 rounded-lg" value="{{ old('username') }}">
                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">
                        Add new Client
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
